<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Shift;
use App\Models\Sport;
use App\Models\Booking;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Illuminate\Contracts\View\View;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\CheckboxList;
use App\Filament\Resources\BookingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Filament\Resources\BookingResource\Widgets\BookingOverview;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('customer_id')
                ->relationship('customer', 'name')
                ->searchable()
                ->preload()
                ->required()
                ->columnSpan(1)
                ->createOptionForm([
                    TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                    TextInput::make('phone')
                    ->required()
                    ->maxLength(255),
                    TextInput::make('email')
                        ->required()
                        ->maxLength(255),
                ]),
                TextInput::make('name')
                ->columnSpan(1),
                TextInput::make('phone')
                ->columnSpan(1),
                Select::make('sport_id')
                ->relationship('sport', 'name')
                ->searchable()
                ->preload()
                ->required(),
                TextInput::make('total_amount')
                ->required()
                ->maxLength(255),
                TextInput::make('advance')
                ->required()
                ->maxLength(255),
                DatePicker::make('booking_date'),
                CheckboxList::make('booking_times')
                ->options(function(){
                    $dates = [];
                    for($i = 0; $i < 24; $i++){
                        $time = sprintf("%02d", $i) . ":00:00";
                        $dates[$time] = $time;
                    }
                    return $dates;
                })
                ->columns(2),
                // ->gridDirection('row')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name'),
                TextColumn::make('phone')->label('Phone'),
                TextColumn::make('customer.email')->label('Email'),
                TextColumn::make('sport.name'),
                TextColumn::make('booking_date')
                ->dateTime('Y-m-d'),
                // TextColumn::make('booking_times'),
                ViewColumn::make('booking_times')->view('filament.tables.columns.booking_times'),
                TextColumn::make('total_amount'),
                TextColumn::make('advance'),
                ViewColumn::make('status')->view('filament.tables.columns.booking_status'),
                // TextColumn::make('bookingPayment.vendor'),
                // TextColumn::make('bookingPayment.transaction_id')
                // ->copyable()
                // ->copyMessage('Transaction id copied'),
                // TextColumn::make('bookingPayment.payment_date')
                // ->dateTime('Y-m-d'),
                // ViewColumn::make('bookingPayment.attachments')->view('filament.tables.columns.booking_images'),
            ])
            ->filters([
                Filter::make('created_at')
                ->form([
                    Forms\Components\DatePicker::make('created_at')->label('Booking date')->default(now()),
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                    ->when(
                        $data['created_at'],
                        fn (Builder $query, $data): Builder => $query->whereDate('booking_date', $data),
                    );
                }),

                Filter::make('sports')
                ->form([
                    Select::make('sports')
                    ->options(auth()->user()->sports()->get()->pluck('name', 'id'))
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                    ->when(
                        $data['sports'],
                        fn (Builder $query, $date): Builder => $query->whereHas('sport', function($query) use ($data){
                            $query->where('id', $data);
                        }),
                    );
                }),
                // SelectFilter::make('sports')
                // ->options([
                //     'cricket' => 'cricket',
                //     'football (s)' => 'football (s)',
                //     'football (l)' => 'football (l)',
                // ])
                // ->reloa
                // ->query(function (Builder $query, array $data): Builder {
                //     return $query
                //     ->when(
                //         $data['sports'],
                //         fn (Builder $query, $date): Builder => $query->whereHas(['sport' => function($query) use ($data){
                //             $query->where('name', $data);
                //         }]),
                //     );
                // })
            ])
            ->actions([
                Action::make('accept')
                ->action(fn (Booking $record) => $record->update(['status' => 4]))
                ->requiresConfirmation()
                ->button()
                ->color('success')
                ->visible(fn (Booking $record): bool => $record->status == 1 OR $record->status == 2),
                Action::make('reject')
                ->action(fn (array $data, Booking $record) => $record->update(['status' => 3, 'note' => $data['reason']]))
                ->requiresConfirmation()
                ->button()
                ->color('danger')
                ->form([
                    Textarea::make('reason')
                    ->label('Reason')
                ])
                ->visible(fn (Booking $record): bool => $record->status == 1 OR $record->status == 2),
                ViewAction::make()
                ->modalContent(fn (Booking $record): View => view(
                    'filament.resources.booking-resource.payment_view',
                    ['booking' => $record],
                ))
                ->modalHeading("Booking payment")                
                ->button()
                ->form([])
                ->icon('')
                ->tooltip('Payment')
                ->label("$"),
            ])
            ->bulkActions([

            ])
            ->defaultSort('created_at', 'desc')
            ->recordAction(null)            
            ->recordClasses(fn ($record) => match ($record->status) {
                1 => 'bg-yellow-300',
                2 => 'bg-blue-300',
                3 => 'bg-rose-300',
                4 => 'bg-green-300',
                default => null,
            });
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            // 'edit' => Pages\EditBooking::route('/{record}/edit'),
            // 'view' => Pages\ViewPayment::route('/{record}'),
        ];
    }

    // public static function canCreate(): bool
    // {
    //     return false;
    // }    

    public static function getWidgets(): array
    {
        return [
            BookingOverview::class,
        ];
    }    

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereIn('sport_id', auth()->user()->sports()->get()->pluck('id'));
    }

    public static function canViewAny(): bool
    {
        return auth()->user()->hasPermission('booking');
    }
}

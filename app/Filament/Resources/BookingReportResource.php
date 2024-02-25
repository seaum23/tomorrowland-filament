<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Booking;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Illuminate\Contracts\View\View;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BookingReportResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BookingReportResource\RelationManagers;
use App\Filament\Resources\BookingReportResource\Widgets\BookingOverview;
use App\Models\Sport;

class BookingReportResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Booking Report';
    protected static ?string $modelLabel = 'Booking Report';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer.name')->label('Name'),
                TextColumn::make('customer.phone')->label('Phone'),
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
                // Filter::make('created_at')
                // ->form([
                //     Forms\Components\DatePicker::make('created_at')->label('Booking date')->default(now()),
                // ])
                // ->query(function (Builder $query, array $data): Builder {
                //     return $query
                //     ->when(
                //         $data['created_at'],
                //         fn (Builder $query, $data): Builder => $query->whereDate('booking_date', $data),
                //     );
                // }),

                // Filter::make('sports')
                // ->form([
                //     Select::make('sports')
                //     ->options(auth()->user()->sports()->get()->pluck('name', 'id'))
                // ])
                // ->query(function (Builder $query, array $data): Builder {
                //     return $query
                //     ->when(
                //         $data['sports'],
                //         fn (Builder $query, $date): Builder => $query->whereHas('sport', function($query) use ($data){
                //             $query->where('name', $data);
                //         }),
                //     );
                // }),
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
            ], layout: FiltersLayout::AboveContent)
            ->actions([
                Action::make('cancel')
                ->action(fn (Booking $record) => $record->update(['status' => 3]))
                ->requiresConfirmation()
                ->button()
                ->color('danger')
                ->visible(fn (Booking $record): bool => $record->status == 1),
                ViewAction::make()
                ->modalContent(fn (Booking $record): View => view(
                    'filament.resources.booking-resource.payment_view',
                    ['booking' => $record],
                ))
                ->modalHeading("Payment")
                ->label("Payment"),
            ])
            ->bulkActions([

            ])
            ->defaultSort('created_at', 'desc');
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

    public static function canCreate(): bool
    {
        return false;
    }    

    public static function getWidgets(): array
    {
        return [
            BookingOverview::class,
        ];
    }

    public static function canViewAny(): bool
    {
        return auth()->user()->is_admin;
    }
}

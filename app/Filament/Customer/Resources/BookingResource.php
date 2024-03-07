<?php

namespace App\Filament\Customer\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Booking;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Customer\Resources\BookingResource\Pages;
use App\Filament\Customer\Resources\BookingResource\RelationManagers;
use App\Filament\Customer\Resources\BookingResource\Widgets\BookingOverview;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                TextColumn::make('customer.phone')->label('Number'),
                // TextColumn::make('customer.email'),
                TextColumn::make('sport.name'),
                TextColumn::make('booking_date')
                ->dateTime('Y-m-d')
                ->sortable(),
                // TextColumn::make('booking_times'),
                ViewColumn::make('booking_times')->view('filament.tables.columns.booking_times_customer')->label('Slots'),
                ViewColumn::make('status')->view('filament.tables.columns.booking_status'),
                TextColumn::make('total_amount')->label('Total'),
                TextColumn::make('advance'),
                // TextColumn::make('bookingPayment.vendor'),
                // TextColumn::make('bookingPayment.transaction_id')
                // ->copyable()
                // ->copyMessage('Transaction id copied'),
                // TextColumn::make('bookingPayment.payment_date')
                // ->dateTime('Y-m-d'),
                // ViewColumn::make('bookingPayment.attachments')->view('filament.tables.columns.booking_images'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('cancel')
                ->action(fn (Booking $record) => $record->update(['status' => 3]))
                ->requiresConfirmation()
                ->button()
                ->color('danger')
                ->visible(fn (Booking $record): bool => $record->status == 1),
                Action::make('submitPaymentInfo')
                ->form([
                    TextInput::make('vendor')
                    ->label('Bkash/Nagad/Other')
                    ->required()
                    ->columnSpan(2),
                    TextInput::make('last_4_digit')
                    ->required()
                    ->columnSpan(1),
                    // DatePicker::make('payment_date')
                    // ->required()
                    // ->columnSpan(2),
                    // TextInput::make('note')
                    // ->columnSpan(2),
                    FileUpload::make('attachments')
                    ->multiple()
                    ->columnSpan(3)
                ])
                ->button()
                ->visible(fn (Booking $record): bool => $record->status == 1 OR  $record->status == 4)
                ->action(function (array $data, Booking $record): void {
                    $record->bookingPayment()->create([
                        'vendor' => $data['vendor'],
                        'last_4_digit' => $data['last_4_digit'],
                        'attachments' => $data['attachments'],
                    ]);
                    $record->status = 2;
                    $record->save();
                })
            ])
            ->bulkActions([
                
            ])
            ->defaultSort('created_at', 'desc');

    }

    public static function getEloquentQuery(): Builder
    {
        return static::getModel()::query()->where('customer_id', auth()->id());
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
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}

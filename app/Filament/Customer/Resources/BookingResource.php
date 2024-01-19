<?php

namespace App\Filament\Customer\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Booking;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Customer\Resources\BookingResource\Pages;
use App\Filament\Customer\Resources\BookingResource\RelationManagers;

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
                TextColumn::make('customer.name'),
                TextColumn::make('sport.name'),
                TextColumn::make('booking_date')
                ->dateTime('Y-m-d'),
                TextColumn::make('booking_times'),
                ViewColumn::make('booking_times')->view('filament.tables.columns.booking_times'),
                TextColumn::make('total_amount'),                
                ViewColumn::make('status')->view('filament.tables.columns.booking_status'),
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
                    TextInput::make('transaction_id')
                    ->required()
                    ->columnSpan(1),
                    TextInput::make('vendor')
                    ->required()
                    ->columnSpan(1),
                    DatePicker::make('payment_date')
                    ->required()
                    ->columnSpan(2),
                    TextInput::make('note')
                    ->columnSpan(2),
                    FileUpload::make('attachments')
                    ->multiple()
                    ->columnSpan(2)
                ])
                ->button()
                ->visible(fn (Booking $record): bool => $record->status == 1)
                ->action(function (array $data, Booking $record): void {
                    $record->bookingPayment()->create([
                        'vendor' => $data['vendor'],
                        'transaction_id' => $data['transaction_id'],
                        'note' => $data['note'],
                        'payment_date' => $data['payment_date'],
                        'attachments' => $data['attachments'],
                    ]);
                    $record->status = 2;
                    $record->save();
                })
            ])
            ->bulkActions([
                
            ]);
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

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Sport;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SportResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SportResource\RelationManagers;

class SportResource extends Resource
{
    protected static ?string $model = Sport::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('turf_id')
                ->relationship('turf', 'name')
                ->searchable()
                ->preload()
                ->required()
                ->columnSpan(2)
                ->createOptionForm([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    Textarea::make('description'),
                    FileUpload::make('attachments')
                        ->multiple(),
                ]),
                TextInput::make('name')
                ->required()
                ->maxLength(255),
                TextInput::make('description')
                ->maxLength(255),
                Checkbox::make('is_featured')
                ->default(false)
                ->helperText('Featured sport will be shown in the home banner. If multiple selected only the first one will be shown!'),
                Checkbox::make('show_on_banner')
                ->default(false)
                ->helperText('By selecting this two sports will be shown in the section after the banner. If more than two selected only the two one will be shown!'),
                FileUpload::make('attachments')
                ->multiple()
                ->columnSpan(2)
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('description'),
                ImageColumn::make('attachments')
                ->circular()
                ->stacked()
                ->limitedRemainingText()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListSports::route('/'),
            'create' => Pages\CreateSport::route('/create'),
            'edit' => Pages\EditSport::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        return auth()->user()->hasPermission('sport');
    }
}

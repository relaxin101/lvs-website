<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CouleurstudentResource\Pages;
use App\Filament\Resources\CouleurstudentResource\RelationManagers;
use App\Models\Couleurstudent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CouleurstudentResource extends Resource
{
    protected static ?string $model = Couleurstudent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('vorname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nachname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('titel')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('couleurname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('strasse')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('plz')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('ort')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefon')
                    ->tel()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vorname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nachname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('titel')
                    ->searchable(),
                Tables\Columns\TextColumn::make('couleurname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('strasse')
                    ->searchable(),
                Tables\Columns\TextColumn::make('plz')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ort')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListCouleurstudents::route('/'),
            'create' => Pages\CreateCouleurstudent::route('/create'),
            'edit' => Pages\EditCouleurstudent::route('/{record}/edit'),
        ];
    }
}

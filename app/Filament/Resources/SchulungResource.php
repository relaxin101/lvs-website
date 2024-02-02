<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SchulungResource\Pages;
use App\Filament\Resources\SchulungResource\RelationManagers;
use App\Models\Schulung;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SchulungResource extends Resource
{
    protected static ?string $model = Schulung::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('jahr')
                    ->required()
                    ->default(fn() => Carbon::now()->year)
                    ->numeric(),
                Forms\Components\Select::make('schulungsleiter')
                    ->relationship('schulungsleiter', 'couleurname'),
                Forms\Components\TextInput::make('landessenior')
                    ->maxLength(255),
                Forms\Components\TextInput::make('landesphilistersenior')
                    ->maxLength(255),
                Forms\Components\TextInput::make('landesvorsitzender')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jahr')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('schulungsleiter.couleurname')
                    ->sortable(),
                Tables\Columns\TextColumn::make('landessenior')
                    ->searchable(),
                Tables\Columns\TextColumn::make('landesphilistersenior')
                    ->searchable(),
                Tables\Columns\TextColumn::make('landesvorsitzender')
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
            'index' => Pages\ListSchulungs::route('/'),
            'create' => Pages\CreateSchulung::route('/create'),
            'edit' => Pages\EditSchulung::route('/{record}/edit'),
        ];
    }
}

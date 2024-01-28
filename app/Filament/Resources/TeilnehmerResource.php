<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeilnehmerResource\Pages;
use App\Models\Teilnehmer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TeilnehmerResource extends Resource
{
    protected static ?string $model = Teilnehmer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Repeater::make('couleurstudent')
                    ->relationship('couleurstudent')
                    ->required()
                    ->minItems(1)
                    ->maxItems(1)
                    ->deletable(false)
                    ->schema([
                        Forms\Components\TextInput::make('vorname')
                            ->autofocus()
                            ->required()
                            ->max(255),
                        Forms\Components\TextInput::make('nachname')
                            ->required()
                            ->max(255),
                        Forms\Components\TextInput::make('couleurname')
                            ->required()
                            ->max(255),
                        Forms\Components\Select::make('verbindungen.kuerzel')
                            ->relationship('verbindungen', 'kuerzel')
                            ->preload()
                            ->multiple()
                            ->required(),
                        Forms\Components\TextInput::make('email'),
                        Forms\Components\TextInput::make('telefon'),
                        Forms\Components\TextInput::make('strasse'),
                        Forms\Components\TextInput::make('plz')->numeric(),
                        Forms\Components\TextInput::make('ort'),


                    ]),

                Forms\Components\Select::make('schulungen')->relationship('schulungen', 'jahr')
                    ->required()
                    ->numeric(),

                Forms\Components\Repeater::make('schulungen')
                    ->required()
                    ->minItems(1)
                    ->maxItems(1)
                    ->deletable(false)
                    ->schema([

                        Forms\Components\Select::make('schulungen.ogv_status')
                            ->options([ //todo define enum
                                '0' => '0',
                                '1' => '1',
                                '2' => '2',
                            ]),
                        Forms\Components\Select::make('schulungen.pdf_status')
                            ->options([ //todo define enum
                                '0' => '0',
                                '1' => '1',
                                '2' => '2',
                            ]),
                        Forms\Components\Select::make('schulungen.email_status')
                            ->options([ //todo define enum
                                '0' => '0',
                                '1' => '1',
                                '2' => '2',
                            ]),
                        Forms\Components\TextInput::make('schulungen.protokoll')
                            ->disabled()
                    ]),
                Forms\Components\DatePicker::make('reception'),
                Forms\Components\DatePicker::make('burschung'),
                Forms\Components\Select::make('essen')
                    ->default('1')
                ->options([ //todo define enum
                    '1' => '1'
                ]),
                Forms\Components\TextInput::make('notfallkontakt'),
                Forms\Components\TextInput::make('sonstiges')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('couleurstudent.vorname'),
                Tables\Columns\TextColumn::make('couleurstudent.nachname'),
                Tables\Columns\TextColumn::make('couleurstudent.couleurname'),
                Tables\Columns\TextColumn::make('couleurstudent.verbindungen.kuerzel'),
                Tables\Columns\TextColumn::make('schulungen.jahr'),
                Tables\Columns\TextColumn::make('schulungen.ogv_status'),
                Tables\Columns\TextColumn::make('schulungen.pdf_status'),
                Tables\Columns\TextColumn::make('schulungen.email_status'),
                Tables\Columns\TextColumn::make('schulungen.protokoll'),

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
            'index' => Pages\ListTeilnehmers::route('/'),
            'create' => Pages\CreateTeilnehmer::route('/create'),
            'edit' => Pages\EditTeilnehmer::route('/{record}/edit'),
        ];
    }
}

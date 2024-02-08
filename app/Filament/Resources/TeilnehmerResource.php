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
                Forms\Components\TextInput::make('couleurstudent.titel')
                    ->autofocus()
                    ->required()
                    ->maxLength(255)
                    ->dehydrated(fn(Forms\Get $get) => $get('alles_bearbeiten'))
                    ->disabled(fn(Forms\Get $get) => !$get('alles_bearbeiten')),

                Forms\Components\TextInput::make('couleurstudent.vorname')
                    ->autofocus()
                    ->required()
                    ->maxLength(255)
                    ->dehydrated(fn(Forms\Get $get) => $get('alles_bearbeiten'))
                    ->disabled(fn(Forms\Get $get) => !$get('alles_bearbeiten')),

                Forms\Components\TextInput::make('couleurstudent.nachname')
                    ->required()
                    ->maxLength(255)
                    ->dehydrated(fn(Forms\Get $get) => $get('alles_bearbeiten'))
                    ->disabled(fn(Forms\Get $get) => !$get('alles_bearbeiten')),

                Forms\Components\TextInput::make('couleurstudent.couleurname')
                    ->required()
                    ->maxLength(255)
                    ->dehydrated(fn(Forms\Get $get) => $get('alles_bearbeiten'))
                    ->disabled(fn(Forms\Get $get) => !$get('alles_bearbeiten')),
                Forms\Components\Select::make('couleurstudent.verbindungen')
                    ->relationship('couleurstudent.verbindungen', 'kuerzel')
                    ->label('Verbindungen')
                    ->preload()
                    ->multiple()
                    ->required(),

                Forms\Components\Repeater::make('anmeldungen')
                    ->relationship('anmeldungen')
                    ->required()
                    ->minItems(1)
                    ->maxItems(1)
                    ->deletable(false)
                    ->schema([
                        Forms\Components\Select::make('schulung_id')#
                        ->relationship('schulung', 'jahr')
                            ->required(),

                        Forms\Components\Select::make('ogv_status')
                            ->options([ //todo define enum
                                '0' => '0',
                                '1' => '1',
                                '2' => '2',
                            ]),
                        Forms\Components\Select::make('pdf_status')
                            ->options([ //todo define enum
                                '0' => '0',
                                '1' => '1',
                                '2' => '2',
                            ]),
                        Forms\Components\Select::make('email_status')
                            ->options([ //todo define enum
                                '0' => '0',
                                '1' => '1',
                                '2' => '2',
                            ]),
                        Forms\Components\Textarea::make('protokoll')
                    ]),
                Forms\Components\DatePicker::make('reception'),
                Forms\Components\DatePicker::make('burschung'),
                Forms\Components\Select::make('essen')
                    ->default('1')
                    ->options([
                        'Normal' => 'normal',
                        'Vegetarisch' => 'vegetarisch',
                        'Vegan' => 'vegan',
                        'Sonstiges/Allergien' => 'sonstiges'
                    ]),

                Forms\Components\TextInput::make('couleurstudent.email')
                    ->dehydrated(fn(Forms\Get $get) => $get('alles_bearbeiten'))
                    ->disabled(fn(Forms\Get $get) => !$get('alles_bearbeiten')),

                Forms\Components\TextInput::make('couleurstudent.telefon')
                    ->dehydrated(fn(Forms\Get $get) => $get('alles_bearbeiten'))
                    ->disabled(fn(Forms\Get $get) => !$get('alles_bearbeiten')),

                Forms\Components\TextInput::make('couleurstudent.strasse')
                    ->dehydrated(fn(Forms\Get $get) => $get('alles_bearbeiten'))
                    ->disabled(fn(Forms\Get $get) => !$get('alles_bearbeiten')),

                Forms\Components\TextInput::make('couleurstudent.plz')
                    ->dehydrated(fn(Forms\Get $get) => $get('alles_bearbeiten'))
                    ->numeric()->disabled(fn(Forms\Get $get) => !$get('alles_bearbeiten')),

                Forms\Components\TextInput::make('couleurstudent.ort')
                    ->dehydrated(fn(Forms\Get $get) => $get('alles_bearbeiten'))
                    ->disabled(fn(Forms\Get $get) => !$get('alles_bearbeiten')),

                Forms\Components\TextInput::make('notfallkontakt')
                    ->dehydrated(fn(Forms\Get $get) => $get('alles_bearbeiten'))
                    ->disabled(fn(Forms\Get $get) => !$get('alles_bearbeiten')),

                Forms\Components\TextInput::make('sonstiges')
                    ->dehydrated(fn(Forms\Get $get) => $get('alles_bearbeiten'))
                    ->disabled(fn(Forms\Get $get) => !$get('alles_bearbeiten')),

                Forms\Components\Checkbox::make('alles_bearbeiten')->dehydrated(False)
                    ->reactive()

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

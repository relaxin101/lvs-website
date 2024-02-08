<?php

namespace App\Filament\Resources\SchulungResource\RelationManagers;

use App\Models\enums\SchulungsFunktionen;
use App\Models\Mitarbeiter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Table;

class SchulungsleiterRelationManager extends RelationManager
{
    protected static string $relationship = 'mitarbeiter';
    protected static ?string $inverseRelationship = 'schulungen';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('couleurstudent.couleurname')
            ->columns([
                Tables\Columns\TextColumn::make('funktion'),
                Tables\Columns\TextColumn::make('couleurstudent.couleurname')->searchable()->label('Mitarbeiter')
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('funktion')
                    ->options(function () {
                        $funktionen = [];
                        foreach (SchulungsFunktionen::values() as $funktion) {
                            $funktionen[$funktion] = $funktion;
                        }
                        return $funktionen;
                    })
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->form(fn(AttachAction $action): array => [
                        $action->getRecordSelect()
                            ->options(Mitarbeiter::all()
                                ->load('couleurstudent')
                                ->pluck('couleurstudent.couleurname', 'id')
                            ),
                        Forms\Components\Select::make('funktion')
                            ->options(function () {
                                $funktionen = [];
                                foreach (SchulungsFunktionen::values() as $funktion) {
                                    $funktionen[$funktion] = $funktion;
                                }
                                return $funktionen;
                            }
                            )
                            ->required(),
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DetachAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('funktion')
                    ->options(function () {
                        $funktionen = [];
                        foreach (SchulungsFunktionen::values() as $funktion) {
                            $funktionen[$funktion] = $funktion;
                        }
                        return $funktionen;
                    }
                    )
                    ->required(),
            ]);
    }
}

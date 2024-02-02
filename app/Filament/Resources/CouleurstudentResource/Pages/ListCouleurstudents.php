<?php

namespace App\Filament\Resources\CouleurstudentResource\Pages;

use App\Filament\Resources\CouleurstudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCouleurstudents extends ListRecords
{
    protected static string $resource = CouleurstudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

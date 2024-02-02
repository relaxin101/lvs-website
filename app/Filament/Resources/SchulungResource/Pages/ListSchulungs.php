<?php

namespace App\Filament\Resources\SchulungResource\Pages;

use App\Filament\Resources\SchulungResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSchulungs extends ListRecords
{
    protected static string $resource = SchulungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\SchulungResource\Pages;

use App\Filament\Resources\SchulungResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSchulung extends EditRecord
{
    protected static string $resource = SchulungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

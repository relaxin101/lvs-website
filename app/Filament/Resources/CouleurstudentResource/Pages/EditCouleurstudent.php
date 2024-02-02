<?php

namespace App\Filament\Resources\CouleurstudentResource\Pages;

use App\Filament\Resources\CouleurstudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCouleurstudent extends EditRecord
{
    protected static string $resource = CouleurstudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

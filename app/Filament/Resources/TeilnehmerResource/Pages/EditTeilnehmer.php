<?php

namespace App\Filament\Resources\TeilnehmerResource\Pages;

use App\Filament\Resources\TeilnehmerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeilnehmer extends EditRecord
{
    protected static string $resource = TeilnehmerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Plantes\Pages;

use App\Filament\Resources\Plantes\PlanteResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPlante extends EditRecord
{
    protected static string $resource = PlanteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

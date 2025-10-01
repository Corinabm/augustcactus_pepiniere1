<?php

namespace App\Filament\Resources\PlantePhotos\Pages;

use App\Filament\Resources\PlantePhotos\PlantePhotoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPlantePhoto extends EditRecord
{
    protected static string $resource = PlantePhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

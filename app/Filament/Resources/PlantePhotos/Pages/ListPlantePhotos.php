<?php

namespace App\Filament\Resources\PlantePhotos\Pages;

use App\Filament\Resources\PlantePhotos\PlantePhotoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlantePhotos extends ListRecords
{
    protected static string $resource = PlantePhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

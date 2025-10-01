<?php

namespace App\Filament\Resources\Plantes\Pages;

use App\Filament\Resources\Plantes\PlanteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlantes extends ListRecords
{
    protected static string $resource = PlanteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

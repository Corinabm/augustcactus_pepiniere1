<?php

namespace App\Filament\Resources\PlantePhotos;

use App\Filament\Resources\PlantePhotos\Pages\CreatePlantePhoto;
use App\Filament\Resources\PlantePhotos\Pages\EditPlantePhoto;
use App\Filament\Resources\PlantePhotos\Pages\ListPlantePhotos;
use App\Filament\Resources\PlantePhotos\Schemas\PlantePhotoForm;
use App\Filament\Resources\PlantePhotos\Tables\PlantePhotosTable;
use App\Models\PlantePhoto;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlantePhotoResource extends Resource
{
    protected static ?string $model = PlantePhoto::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'photo_url';

    public static function form(Schema $schema): Schema
    {
        return PlantePhotoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlantePhotosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPlantePhotos::route('/'),
            'create' => CreatePlantePhoto::route('/create'),
            'edit' => EditPlantePhoto::route('/{record}/edit'),
        ];
    }
}

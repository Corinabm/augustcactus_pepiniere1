<?php

namespace App\Filament\Resources\Plantes;

use App\Filament\Resources\Plantes\Pages\CreatePlante;
use App\Filament\Resources\Plantes\Pages\EditPlante;
use App\Filament\Resources\Plantes\Pages\ListPlantes;
use App\Filament\Resources\Plantes\Schemas\PlanteForm;
use App\Filament\Resources\Plantes\Tables\PlantesTable;
use App\Models\Plante;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlanteResource extends Resource
{
    protected static ?string $model = Plante::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nom_commun';

    public static function form(Schema $schema): Schema
    {
        return PlanteForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlantesTable::configure($table);
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
            'index' => ListPlantes::route('/'),
            'create' => CreatePlante::route('/create'),
            'edit' => EditPlante::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\Plantes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PlanteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('categorie_id')
                    ->relationship('categorie', 'nom')
                    ->required()
                    ->searchable()
                    ->preload(),
                TextInput::make('nom_commun')
                    ->required(),
                TextInput::make('nom_scientifique')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('prix')
                    ->required()
                    ->numeric()
                    ->prefix('€'),
                TextInput::make('taille')
                    ->required(),
                TextInput::make('exposition')
                    ->required(),
                TextInput::make('arrosage')
                    ->required(),
                TextInput::make('stock')
                    ->required()
                    ->numeric()
                    ->default(0),
                FileUpload::make('photo_principale_url')
                    ->image()
                    ->directory('plantes')
                    ->maxSize(2048)
                    ->columnSpanFull(),
                Toggle::make('est_actif')
                    ->required()
                    ->default(true),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Plantes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
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
                TextInput::make('id')
                    ->label('ID')
                    ->disabled()
                    ->dehydrated(false)
                    ->visible(fn ($record) => $record !== null),
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
                Toggle::make('est_actif')
                    ->required()
                    ->default(true),
                Repeater::make('photos')
                    ->relationship()
                    ->schema([
                        FileUpload::make('photo_url')
                            ->label('Photo')
                            ->image()
                            ->directory('plantes/photos')
                            ->disk('public')
                            ->maxSize(2048)
                            ->required(),
                        Toggle::make('est_principale')
                            ->label('Photo principale')
                            ->default(false),
                        TextInput::make('ordre')
                            ->label('Ordre d\'affichage')
                            ->numeric()
                            ->default(1)
                            ->required(),
                    ])
                    ->columnSpanFull()
                    ->collapsible()
                    ->defaultItems(0)
                    ->label('Photos de la plante'),
            ]);
    }
}

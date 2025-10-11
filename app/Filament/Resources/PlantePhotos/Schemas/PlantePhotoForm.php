<?php

namespace App\Filament\Resources\PlantePhotos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PlantePhotoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plante_id')
                    ->relationship('plante', 'nom_commun')
                    ->required()
                    ->searchable()
                    ->preload(),
                FileUpload::make('photo_url')
                    ->image()
                    ->disk('public')
                    ->directory('plantes/photos')
                    ->required()
                    ->maxSize(2048)
                    ->columnSpanFull(),
                Toggle::make('est_principale')
                    ->default(false),
                TextInput::make('ordre')
                    ->numeric()
                    ->default(0)
                    ->minValue(0),
            ]);
    }
}

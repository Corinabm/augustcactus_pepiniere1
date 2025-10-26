<?php

namespace App\Filament\Resources\Annonces\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;

class AnnonceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informations générales')
                    ->schema([
                        TextInput::make('titre')
                            ->label('Titre')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Ex: Portes Ouvertes Printemps 2025'),

                        Textarea::make('message')
                            ->label('Message d\'accroche')
                            ->required()
                            ->rows(3)
                            ->placeholder('Ex: Prochaine porte ouverte')
                            ->helperText('Ce message apparaîtra dans la barre d\'annonce'),
                    ]),

                Section::make('Date et horaires')
                    ->schema([
                        DatePicker::make('date_porte_ouverte')
                            ->label('Date de la porte ouverte')
                            ->required()
                            ->native(false)
                            ->displayFormat('d/m/Y')
                            ->minDate(now()),

                        TimePicker::make('heure_debut')
                            ->label('Heure de début')
                            ->seconds(false)
                            ->native(false),

                        TimePicker::make('heure_fin')
                            ->label('Heure de fin')
                            ->seconds(false)
                            ->native(false),
                    ])->columns(3),

                Section::make('Statut')
                    ->schema([
                        Toggle::make('est_active')
                            ->label('Annonce active')
                            ->default(true)
                            ->helperText('Désactivez pour masquer cette annonce sans la supprimer'),
                    ]),
            ]);
    }
}

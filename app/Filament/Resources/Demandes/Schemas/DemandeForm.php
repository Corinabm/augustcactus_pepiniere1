<?php

namespace App\Filament\Resources\Demandes\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DemandeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('plante_id')
                    ->required()
                    ->numeric(),
                TextInput::make('nom_plante')
                    ->required(),
                TextInput::make('prix_unitaire')
                    ->required()
                    ->numeric(),
                TextInput::make('nom')
                    ->required(),
                TextInput::make('prenom')
                    ->required(),
                TextInput::make('telephone')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('horaires_indiques')
                    ->required(),
                DatePicker::make('date_recuperation')
                    ->required(),
                Select::make('mode_recuperation')
                    ->options(['sur_place' => 'Sur place', 'livraison' => 'Livraison'])
                    ->required(),
                Textarea::make('message')
                    ->columnSpanFull(),
                DatePicker::make('date_demande')
                    ->required(),
                TextInput::make('quantite')
                    ->required()
                    ->numeric(),
                Select::make('statut')
                    ->options([
            'en_attente' => 'En attente',
            'confirmee' => 'Confirmee',
            'annulee' => 'Annulee',
            'terminee' => 'Terminee',
        ])
                    ->default('en_attente')
                    ->required(),
                TextInput::make('montant_total')
                    ->required()
                    ->numeric(),
                Toggle::make('email_envoye')
                    ->required(),
                DateTimePicker::make('date_envoi_email'),
                Select::make('statut_email')
                    ->options(['en_attente' => 'En attente', 'envoye' => 'Envoye', 'echec' => 'Echec'])
                    ->default('en_attente')
                    ->required(),
            ]);
    }
}

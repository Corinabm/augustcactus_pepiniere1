<?php

namespace App\Filament\Resources\Demandes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DemandesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plante_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('nom_plante')
                    ->searchable(),
                TextColumn::make('prix_unitaire')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('nom')
                    ->searchable(),
                TextColumn::make('prenom')
                    ->searchable(),
                TextColumn::make('telephone')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('horaires_indiques')
                    ->searchable(),
                TextColumn::make('date_recuperation')
                    ->date()
                    ->sortable(),
                TextColumn::make('mode_recuperation'),
                TextColumn::make('date_demande')
                    ->date()
                    ->sortable(),
                TextColumn::make('quantite')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('statut'),
                TextColumn::make('montant_total')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('email_envoye')
                    ->boolean(),
                TextColumn::make('date_envoi_email')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('statut_email'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

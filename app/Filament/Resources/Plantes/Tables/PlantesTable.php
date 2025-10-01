<?php

namespace App\Filament\Resources\Plantes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PlantesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('categorie_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('nom_commun')
                    ->searchable(),
                TextColumn::make('nom_scientifique')
                    ->searchable(),
                TextColumn::make('prix')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('taille')
                    ->searchable(),
                TextColumn::make('exposition')
                    ->searchable(),
                TextColumn::make('arrosage')
                    ->searchable(),
                TextColumn::make('stock')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('est_actif')
                    ->boolean(),
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

<?php

namespace App\Filament\Resources\Distributors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;

class DistributorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('ar_name')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('logo')
                    ->image()
                    ->directory('distributors')
                    ->imageEditor()
                    ->visibility('public')
                    ->nullable(),

                Textarea::make('address')
                    ->columnSpanFull(),
                Textarea::make('ar_address')
                    ->columnSpanFull(),

                TextInput::make('latitude')
                    ->numeric()
                    ->step(0.0000001),

                TextInput::make('longitude')
                    ->numeric()
                    ->step(0.0000001),

                TextInput::make('google_maps_link')
                    ->url()
                    ->columnSpanFull(),

                // ── Phones Repeater ─────────────────────
                Repeater::make('phones')
                    ->label('Phones')
                    ->relationship('phones') // must match the relation in Distributor model
                    ->schema([
                        TextInput::make('phone')
                            ->required()
                            ->label('Phone Number')
                            ->tel(), // makes it a telephone input

                        TextInput::make('sort')
                            ->numeric()
                            ->label('Sort Order')
                            ->default(0),
                    ])
                    ->columns(2)
                    ->orderable('sort') // allows drag & drop sorting
                    ->createItemButtonLabel('Add Phone'),
            ]);
    }
}
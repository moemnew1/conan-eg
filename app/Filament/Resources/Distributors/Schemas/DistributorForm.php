<?php

namespace App\Filament\Resources\Distributors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

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
            ]);
    }
}

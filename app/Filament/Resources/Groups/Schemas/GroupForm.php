<?php

namespace App\Filament\Resources\Groups\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GroupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('ar_name')
                    ->required(),
                FileUpload::make('image')
                    ->directory('groups')
                    ->disk('public')
                    ->image(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('group_id')
                    ->relationship('group', 'name')
                    ->searchable()
                    ->required(),

                TextInput::make('name')
                    ->required(),
                TextInput::make('ar_name'),

                TextInput::make('link')
                    ->url(),

                Textarea::make('description')
                    ->columnSpanFull(),
                                            Textarea::make('ar_description')
                            ->columnSpanFull(),

                /*
                |--------------------------------------------------------------------------
                | Product Images
                |--------------------------------------------------------------------------
                */

                Repeater::make('images')
                    ->relationship()
                    ->label('Product Images')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->directory('products')
                            ->disk('public')
                            ->required(),
                    ])
                    ->reorderable()
                    ->orderColumn('sort_order')
                    ->defaultItems(0)
                    ->columnSpanFull()
                    ->grid(4),

                /*
                |--------------------------------------------------------------------------
                | Variants
                |--------------------------------------------------------------------------
                */

                Repeater::make('variants')
                    ->relationship()
                    ->label('Product Variants')
                    ->schema([

                        TextInput::make('code')
                            ->required(),

                        TextInput::make('link')
                            ->url(),

                        Textarea::make('description')
                            ->columnSpanFull(),
                        Textarea::make('ar_description')
                            ->columnSpanFull(),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

            ]);
    }
}
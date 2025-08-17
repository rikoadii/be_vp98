<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Checkbox;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name_projects')
                    ->required(),
                TextInput::make('location_projects')
                    ->required(),
                Textarea::make('description_projects')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->required()
                    ->label('Project Image')
                    ->disk('public')
                    ->directory('projects')
                    ->visibility('public')
                    ->maxSize(102400)
                    ->image(),
                // Toggle::make('isMain')
                //     ->required(),
                Checkbox::make('isMain')
                    ->label('Is Main Image')
                    ->default(false)
                    ->columnSpanFull(),
                Select::make('category_projects')
                    ->label('Category')
                    ->relationship('category', 'name_category')
                    ->searchable()
                    ->preload(),
            ]);
    }
}

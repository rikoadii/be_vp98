<?php

namespace App\Filament\Resources\Teams\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class TeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                FileUpload::make('profile')
                    ->required()
                    ->label('Profile Picture')
                    ->disk('public')
                    ->directory('team_profiles')
                    ->visibility('public')
                    ->maxSize(102400)
                    ->image(),
                TextInput::make('role')
                    ->required(),
            ]);
    }
}

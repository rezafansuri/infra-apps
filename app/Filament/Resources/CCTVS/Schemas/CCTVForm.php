<?php

namespace App\Filament\Resources\CCTVS\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CCTVForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('no')
                    ->required(),
                TextInput::make('nama')
                    ->required(),
                TextInput::make('lat')
                    ->required(),
                TextInput::make('lon')
                    ->required(),
                DatePicker::make('tanggal')
                    ->required(),
                TextInput::make('jenis')
                    ->required(),
            ]);
    }
}

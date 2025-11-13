<?php

namespace App\Filament\Resources\CCTVS\Pages;

use App\Filament\Resources\CCTVS\CCTVResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCCTVS extends ListRecords
{
    protected static string $resource = CCTVResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\CCTVS\Pages;

use App\Filament\Resources\CCTVS\CCTVResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCCTV extends EditRecord
{
    protected static string $resource = CCTVResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

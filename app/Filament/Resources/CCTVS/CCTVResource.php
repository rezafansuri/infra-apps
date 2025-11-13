<?php

namespace App\Filament\Resources\CCTVS;

use App\Filament\Resources\CCTVS\Pages\CreateCCTV;
use App\Filament\Resources\CCTVS\Pages\EditCCTV;
use App\Filament\Resources\CCTVS\Pages\ListCCTVS;
use App\Filament\Resources\CCTVS\Schemas\CCTVForm;
use App\Filament\Resources\CCTVS\Tables\CCTVSTable;
use App\Models\CCTV;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CCTVResource extends Resource
{
    protected static ?string $model = CCTV::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'CCTV';

    public static function form(Schema $schema): Schema
    {
        return CCTVForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CCTVSTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCCTVS::route('/'),
            'create' => CreateCCTV::route('/create'),
            'edit' => EditCCTV::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\StokKeluarResource\Pages;

use App\Filament\Resources\StokKeluarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStokKeluars extends ListRecords
{
    protected static string $resource = StokKeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

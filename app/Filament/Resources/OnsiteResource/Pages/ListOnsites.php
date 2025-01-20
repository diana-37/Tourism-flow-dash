<?php

namespace App\Filament\Resources\OnsiteResource\Pages;

use App\Filament\Resources\OnsiteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOnsites extends ListRecords
{
    protected static string $resource = OnsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

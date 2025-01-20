<?php

namespace App\Filament\Resources\OfficialResource\Pages;

use App\Filament\Resources\OfficialResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOfficial extends ViewRecord
{
    protected static string $resource = OfficialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

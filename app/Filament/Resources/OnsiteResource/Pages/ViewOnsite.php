<?php

namespace App\Filament\Resources\OnsiteResource\Pages;

use App\Filament\Resources\OnsiteResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOnsite extends ViewRecord
{
    protected static string $resource = OnsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

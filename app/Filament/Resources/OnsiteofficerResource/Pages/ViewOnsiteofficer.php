<?php

namespace App\Filament\Resources\OnsiteofficerResource\Pages;

use App\Filament\Resources\OnsiteofficerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOnsiteofficer extends ViewRecord
{
    protected static string $resource = OnsiteofficerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

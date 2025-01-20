<?php

namespace App\Filament\Resources\OnsiteResource\Pages;

use App\Filament\Resources\OnsiteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOnsite extends EditRecord
{
    protected static string $resource = OnsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\OnsiteofficerResource\Pages;

use App\Filament\Resources\OnsiteofficerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOnsiteofficer extends EditRecord
{
    protected static string $resource = OnsiteofficerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

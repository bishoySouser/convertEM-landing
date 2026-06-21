<?php

namespace App\Filament\Resources\LandingRequestResource\Pages;

use App\Filament\Resources\LandingRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLandingRequest extends EditRecord
{
    protected static string $resource = LandingRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\LandingRequestResource\Pages;

use App\Filament\Resources\LandingRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLandingRequest extends ViewRecord
{
    protected static string $resource = LandingRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

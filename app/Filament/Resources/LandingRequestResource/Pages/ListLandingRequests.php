<?php

namespace App\Filament\Resources\LandingRequestResource\Pages;

use App\Filament\Resources\LandingRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLandingRequests extends ListRecords
{
    protected static string $resource = LandingRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ExportAction::make()
                ->exporter(\App\Filament\Exports\LandingRequestExporter::class),
            Actions\CreateAction::make(),
        ];
    }
}

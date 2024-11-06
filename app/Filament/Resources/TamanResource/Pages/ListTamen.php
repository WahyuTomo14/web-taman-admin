<?php

namespace App\Filament\Resources\TamanResource\Pages;

use App\Filament\Resources\TamanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTamen extends ListRecords
{
    protected static string $resource = TamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\TamanResource\Pages;

use App\Filament\Resources\TamanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTaman extends EditRecord
{
    protected static string $resource = TamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\AgendasResource\Pages;

use App\Filament\Resources\AgendasResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAgendas extends CreateRecord
{
    protected static string $resource = AgendasResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
    $data['last_edited_by_id'] = auth()->id();

    return $data;
    }

    protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['user_id'] = auth()->id();

    return $data;
}
}
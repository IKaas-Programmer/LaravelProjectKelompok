<?php

namespace App\Filament\Resources\PageCommentsResource\Pages;

use App\Filament\Resources\PageCommentsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageComments extends EditRecord
{
    protected static string $resource = PageCommentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
{
    $data['user_id'] = auth()->id();

    return $data;
}
}
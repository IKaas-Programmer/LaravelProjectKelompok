<?php

namespace App\Filament\Resources\ArticlesCommentsResource\Pages;

use App\Filament\Resources\ArticlesCommentsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArticlesComments extends CreateRecord
{
    protected static string $resource = ArticlesCommentsResource::class;

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
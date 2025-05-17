<?php

namespace App\Filament\Resources\CommentsResource\Pages;

use App\Filament\Resources\CommentsResource;
use App\Models\articles;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateComments extends CreateRecord
{
    protected static string $resource = CommentsResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['user_id'] = auth()->id();

    $data['commentable_type'] = auth()->id();
    $data['commentable_id'] = auth()->id(); // ID artikel target

    return $data;
}
    
}
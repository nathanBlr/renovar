<?php

namespace App\Filament\Resources\NoticiaResource\Pages;

use App\Filament\Resources\NoticiaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNoticia extends CreateRecord
{
    protected static string $resource = NoticiaResource::class;
    protected function getRedirectUrl(): string
{
    return $this->previousUrl ?? $this->getResource()::getUrl('index');
}
}

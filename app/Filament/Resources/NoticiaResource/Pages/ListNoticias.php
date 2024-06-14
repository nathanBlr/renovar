<?php

namespace App\Filament\Resources\NoticiaResource\Pages;

use App\Filament\Resources\NoticiaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Colors\Color;

class ListNoticias extends ListRecords
{
    protected static string $resource = NoticiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->color(Color::Slate)->label('Criar Nova Noticia')->icon('heroicon-o-arrow-right'),
            //Actions\ExportAction::make()
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Exports\NoticiaExport;
use App\Filament\Resources\NoticiaResource\Pages;
use App\Models\Noticia;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Support\Colors\Color;

class NoticiaResource extends Resource
{
    protected static ?string $model = Noticia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                TextInput::make('short_text')
                    ->maxLength(255)
                    ->nullable(),
                Textarea::make('text')
                    ->rows(10)
                    ->cols(20)
                    ->nullable(),
                FileUpload::make('image_path')
                    ->image()
                    ->directory('noticias')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_path')
                    ->label('Foto'),
                TextColumn::make('title')
                    ->label('Titulo'),
                TextColumn::make('slug'),
                TextColumn::make('created_at')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label(''),
                Tables\Actions\ViewAction::make()->label(''),
                Tables\Actions\DeleteAction::make()->label(''),
                Tables\Actions\Action::make('export')
                    ->label('')
                    ->color(Color::Green)
                    ->action(function () {
                        return Excel::download(new NoticiaExport(), 'noticia.csv');
                    })
                    ->icon('heroicon-o-arrow-down-tray'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNoticias::route('/'),
            'create' => Pages\CreateNoticia::route('/create'),
            'edit' => Pages\EditNoticia::route('/{record}/edit'),
        ];
    }
}

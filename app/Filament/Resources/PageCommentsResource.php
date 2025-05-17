<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageCommentsResource\Pages;
use App\Filament\Resources\PageCommentsResource\RelationManagers;
use App\Models\pagecomments;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageCommentsResource extends Resource
{
    protected static ?string $model = pagecomments::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('comment')
                    ->required()
                    ->placeholder('No Comment'),
                Forms\Components\Select::make('page_id')
                    ->relationship('page', 'title')
                    ->required()
                    ->placeholder('No Page ID')
                    ->searchable()
                    ->preload()
                    ->label('Page Title'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('page.title')
                    ->label('Page Title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('comment')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->action(function (pagecomments $record) {
                        $record->delete();
                    }),
                Tables\Actions\Action::make('View Page')
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
            'index' => Pages\ListPageComments::route('/'),
            'create' => Pages\CreatePageComments::route('/create'),
            'edit' => Pages\EditPageComments::route('/{record}/edit'),
        ];
    }
}
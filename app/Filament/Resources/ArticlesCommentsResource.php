<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticlesCommentsResource\Pages;
use App\Filament\Resources\ArticlesCommentsResource\RelationManagers;
use App\Models\articlescomments;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticlesCommentsResource extends Resource
{
    protected static ?string $model = articlescomments::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('article_id')
                    ->relationship('article', 'title')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->placeholder('Pilih Article'),
                Forms\Components\TextInput::make('comment')
                    ->required()
                    ->placeholder('No Comment'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('article.title')
                    ->label('Article Title')
                    ->sortable()
                    ->searchable()
                    ->description(fn (articlescomments $record): string => $record->article->description ?? 'No Article')
                    ,
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
                    ->label('Delete')
                    ->action(function (articlescomments $record) {
                        $record->delete();
                    })
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
            'index' => Pages\ListArticlesComments::route('/'),
            'create' => Pages\CreateArticlesComments::route('/create'),
            'edit' => Pages\EditArticlesComments::route('/{record}/edit'),
        ];
    }
}
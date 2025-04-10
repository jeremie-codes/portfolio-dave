<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoResource\Pages;
use App\Filament\Resources\VideoResource\RelationManagers;
use App\Models\Video;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Video')
                ->description('Ajouter une video dans votre votre site')
                ->schema([
                    Forms\Components\Radio::make('type')
                        ->label('Type de vidéo')
                        ->options([
                            'lien' => 'Lien',
                            'fichier' => 'Fichier'
                        ])
                        ->reactive()
                        ->required(),
                    Forms\Components\TextInput::make('url')
                        ->label('URL de la Vidéo')
                        ->required()
                        ->visible(fn ($get) => $get('type') === 'lien')
                        ->url()
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('thumbnail')
                        ->label('Fichier Video')
                        ->image()
                        ->visible(fn ($get) => $get('type') === 'fichier')
                        ->directory('thumbnails')
                        ->preserveFilenames()
                        ->enableOpen()
                        ->enableDownload()
                        ->mimeTypeMap([
                            'image/jpeg' => 'jpg',
                            'image/png' => 'png',
                            'video/mp4' => 'mp4',
                            'video/mpeg' => 'mpeg',
                        ])
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('url'),
                Tables\Columns\TextColumn::make('thumbnail')
                    ->label('Fichier')
                    ->url(fn ($record) => $record->url ? $record->url: asset('storage/'. $record->thumbnail))
                    ->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListVideos::route('/'),
            'create' => Pages\CreateVideo::route('/create'),
            'edit' => Pages\EditVideo::route('/{record}/edit'),
        ];
    }
}

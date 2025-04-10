<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LinkResource\Pages;
use App\Filament\Resources\LinkResource\RelationManagers;
use App\Models\Link;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LinkResource extends Resource
{
    protected static ?string $model = Link::class;
    protected static ?string $navigationGroup = 'Paramètres';

    protected static ?string $navigationIcon = 'heroicon-o-link';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')
                ->schema([
                    Select::make('type')
                        ->placeholder('Choisir')
                        ->options([
                            'phone' => 'Téléphone',
                            'address' => 'Adresse',
                            'email' => 'Email',
                            'whatsapp' => 'Whatsapp',
                            'instagram' => 'Instagram',
                            'facebook' => 'Facebook',
                            'twitter' => 'Twitter',
                        ])
                        ->required(),
                ]),

                Section::make('')
                ->schema([
                    TextInput::make('data')->label('information')
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('data')->label('information'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Créé le'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->label('Mis à jour le'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Modifier'),
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
            'index' => Pages\ListLinks::route('/'),
            // 'create' => Pages\CreateLink::route('/create'),
            'edit' => Pages\EditLink::route('/{record}/edit'),
        ];
    }
}

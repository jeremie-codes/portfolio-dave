<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LinkResource\Pages;
use App\Filament\Resources\LinkResource\RelationManagers;
use App\Models\Link;
use Filament\Forms;
use Filament\Forms\Components\Section;
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
                Section::make('Téléphone')
                ->schema([
                    TextInput::make('phone')->label('Téléphone')
                        ->placeholder('24398....34')
                        ->prefix('+')
                        ->numeric()
                        ->required(),
                    TextInput::make('phone_2')->label('Téléphone 2(facultatif)')
                        ->placeholder('24398....34')
                        ->prefix('+')
                        ->numeric(),
                    TextInput::make('phone_3')->label('Téléphone 3(facultatif)')
                    ->placeholder('24398....34')
                    ->prefix('+')
                    ->numeric(),
                ])->columnSpan(['lg' => 1]),
                Section::make('Adresse Localisation')
                ->schema([
                    TextInput::make('adresse')->label('Adresse (facultatif)'),
                    TextInput::make('adresse_2')->label('Adresse 2(facultatif)'),
                    TextInput::make('adresse_3')->label('Adresse 3(facultatif)'),
                ])->columnSpan(['lg' => 1]),
                Section::make('E-mail')
                ->schema([
                    TextInput::make('email')->label('Email (facultatif)'),
                    TextInput::make('email_2')->label('Email 2(facultatif)'),
                ])->columnSpan(['lg' => 1]),
                Section::make('Réseau sociaux')
                ->schema([
                    TextInput::make('whatsapp')->label('N° Whatsapp (facultatif)')
                        ->placeholder('24398....34')
                        ->prefix('+')
                        ->numeric(),
                    TextInput::make('instagram')->label('Lien Instagram (facultatif)'),
                    TextInput::make('facebook')->label('Lien Facebook (facultatif)'),
                    TextInput::make('linkedin')->label(' LienLinkedIn (facultatif)'),
                ])->columnSpan(['lg' => 1]),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('phone')->label('Téléphone'),
                Tables\Columns\TextColumn::make('adresse')->label('Adresse')->limit(20),
                Tables\Columns\TextColumn::make('email')->label('Email')->limit(20),
                Tables\Columns\TextColumn::make('whatsapp')->label('Whatsapp'),
                Tables\Columns\TextColumn::make('instagram')->label('Instagram'),
                Tables\Columns\TextColumn::make('facebook')->label('Facebook')->limit(20),
                Tables\Columns\TextColumn::make('linkedin')->label('LinkedIn')->limit(20),
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

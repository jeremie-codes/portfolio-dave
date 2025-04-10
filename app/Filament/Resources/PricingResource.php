<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PricingResource\Pages;
use App\Filament\Resources\PricingResource\RelationManagers;
use App\Models\Pricing;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PricingResource extends Resource
{
    protected static ?string $model = Pricing::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Tarification')
                    ->description('Ajouter un tarif dans votre votre site')
                    ->schema([
                        Forms\Components\Select::make('title')
                            ->label('Titre')
                            ->options([
                                'Local' => 'Local',
                                'Internationnal' => 'Internationnal',
                                'Audit logistique' => 'Audit logistique'
                            ])
                            ->placeholder('Choisir')
                            ->required(),

                        Forms\Components\TextInput::make('price')
                            ->label('Prix minimun')
                            ->required()
                            ->numeric()
                            ->minValue(0)
                            ->suffix('$')
                            ->maxValue(1000000),

                        Forms\Components\TextInput::make('duration')
                            ->label('Durée')
                            ->required(),

                        Forms\Components\Select::make('description')
                            ->label('Description(avantage)')
                            ->multiple()
                            ->required()
                            ->options([
                                'Transparence totale' => 'Transparence totale',
                                'Optimisation des coûts de groupage' => 'Optimisation des coûts de groupage',
                                'Sécurité de transpot' => 'Sécurité de transpot',
                                'Suivi en temps réel' => 'Suivi en temps réel',
                                'Diagnostic complet du logistique' => 'Diagnostic complet du chaîne logistique',
                                'Propositions durables & éco-responsables' => 'Propositions durables & éco-responsables',
                                'Réduction des coûts' => 'Réduction des coûts',
                                'Optimisation des flux et des délais' => 'Optimisation des flux et des délais',
                                'Conseils d\'expert neutres' => 'Conseils d\'expert neutres',
                            ]),
                    ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->sortable(),
                    Tables\Columns\TextColumn::make('price')->label("Prix min."),
                Tables\Columns\TextColumn::make("duration")->label('Durée'),
                Tables\Columns\TextColumn::make("description")->limit(40),
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
            'index' => Pages\ListPricings::route('/'),
            'create' => Pages\CreatePricing::route('/create'),
            'edit' => Pages\EditPricing::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\MessageResource;
use App\Models\Message;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LastMessage extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 2;

    protected function getTableHeading(): string
    {
        return 'Messages récents';
    }
    public function table(Table $table): Table
    {
        return $table
            ->query(MessageResource::getEloquentQuery())
            ->defaultPaginationPageOption(5) //
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make("sujet")->limit(20)
                    ->searchable(),
                Tables\Columns\TextColumn::make("message")->limit(40),
                Tables\Columns\TextColumn::make('created_at')->label("Date"),
        ])
        ->actions([
            Tables\Actions\Action::make('Voir')
                ->url(fn (Message $record): string => MessageResource::getUrl('view', ['record' => $record->id])),
        ]);
    }
}

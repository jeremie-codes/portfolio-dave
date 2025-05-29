<?php

namespace App\Filament\Widgets;

use App\Models\Service;
use App\Models\Message;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Visit;

class VisitorCount extends BaseWidget
{
    protected function getStats(): array
    {
        $visitorCount = Visit::count();
        $messageCount = Message::count();
        $serviceActiveCount = Service::count();

        return [
            Stat::make('Visiteurs', $visitorCount)
                ->description('Total des visiteurs')
                ->descriptionIcon('heroicon-o-eye')
                ->color('primary'),
            Stat::make('Messages', $messageCount)
                ->description('Total des messages')
                ->descriptionIcon('heroicon-o-rectangle-stack')
                ->color('primary'),
            Stat::make('Services', $serviceActiveCount)
                ->description('Total des Articles')
                ->descriptionIcon('heroicon-o-clipboard-document-list')
                ->color('primary'),
        ];
    }
}

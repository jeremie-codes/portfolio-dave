<?php

namespace App\Filament\Widgets;

use App\Models\Service;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserCount extends BaseWidget
{
    protected function getStats(): array
    {
        $userCount = User::count();
        $serviceCount = Service::count();
        $serviceActiveCount = Service::where('est_publie', false)->count();

        return [
            Stat::make('Administeurs', $userCount)
                ->description('Total des utilisateurs')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('primary'),
            Stat::make('Services', $serviceCount)
                ->description('Total des services ajoutés')
                ->descriptionIcon('heroicon-o-clipboard-document-list')
                ->color('primary'),
            Stat::make('Services', $serviceActiveCount)
                ->description('Total des services désactivés')
                ->descriptionIcon('heroicon-o-clipboard-document-list')
                ->color('primary'),
        ];
    }
}

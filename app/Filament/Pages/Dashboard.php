<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard';

    protected static ?string $navigationLabel = 'Beranda';
    
    protected static ?string $title = 'Beranda';

    // Tambahkan properti widgets untuk widget yang ingin dipakai
    protected function getWidgets(): array
    {
        return [
            \App\Filament\Widgets\StatsDashboard::class,
            \App\Filament\Widgets\BlogPostsChart::class,
        ];
    }
}

<?php

namespace App\Filament\Widgets;

use App\Models\Barang;
use App\Models\User;
use App\Models\Kontak;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected function getStats(): array
    {
        $countBarangs = Barang::count();
        $countuser = User::count();
        $countkontak = Kontak::count();

        return [
            Stat::make('Jumlah Barang', $countBarangs),
            Stat::make('Jumlah User', $countuser),
            Stat::make('Average time on page', '3:12'),
            Stat::make('Pesan Kontak', $countkontak),
        ];
    }
}

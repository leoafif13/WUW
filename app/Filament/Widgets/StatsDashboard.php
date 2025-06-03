<?php

namespace App\Filament\Widgets;

use App\Models\Barang;
use App\Models\User;
use App\Models\Kontak;
use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected function getStats(): array
    {
        $countBarangs = Barang::count();
        $countuser = User::where('role', 'customer')->count();
        $countkontak = Kontak::count();
        $countorder = Order::where('status', 'pending')->count();

        return [
            Stat::make('Jumlah Barang', $countBarangs),
            Stat::make('Jumlah User', $countuser),
            Stat::make('Jumlah Orderan', $countorder),
            Stat::make('Pesan Kontak', $countkontak),
        ];
    }
}

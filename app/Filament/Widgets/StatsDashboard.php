<?php

namespace App\Filament\Widgets;

use App\Models\Barang;
use App\Models\User;
use App\Models\Kontak;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Review;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected function getStats(): array
    {
        $countBarangs = Barang::count();
        $countuser = User::where('role', 'customer')->count();
        $countkontak = Kontak::count();
        $countorder = Order::where('status', 'selesai')->count();
        $countpayment = Payment::where('status', 'dibayar')->count();
        $countreview = Review::count();
        $countGagal = Order::where('status', 'batal')->count();
        $countBelumBayar = Payment::where('status', 'diproses')->count();

        // Total pembayaran saat ini
        $totalPembayaran = Payment::where('status', 'dibayar')->sum('total');

        // Total pembayaran bulan lalu (untuk grafik naik/turun)
        $totalPembayaranLalu = Payment::where('status', 'dibayar')
            ->whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->sum('total');

        // Hitung persentase perubahan
        $persentase = 0;
        if ($totalPembayaranLalu > 0) {
            $persentase = (($totalPembayaran - $totalPembayaranLalu) / $totalPembayaranLalu) * 100;
        }

        return [
            Stat::make('Jumlah Barang', $countBarangs),
            Stat::make('Jumlah User', $countuser),
            Stat::make('Jumlah Orderan', $countorder),
            Stat::make('Pesan Kontak', $countkontak),
            Stat::make('Jumlah Pembayaran', $countpayment),
            Stat::make('Jumlah Review', $countreview),
            Stat::make('Order Gagal', $countGagal),
            Stat::make('Belum Dibayar', $countBelumBayar),
            Stat::make('Total Pendapatan', 'Rp ' . number_format($totalPembayaran, 0, ',', '.'))
                ->description(($persentase >= 0 ? '+' : '') . number_format($persentase, 1) . '% dari bulan lalu')
                ->descriptionIcon($persentase >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($persentase >= 0 ? 'success' : 'danger'),
        ];
    }
}

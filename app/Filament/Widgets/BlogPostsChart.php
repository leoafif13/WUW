<?php

namespace App\Filament\Widgets;

use App\Models\Payment;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Barang Disewa per Bulan';

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getData(): array
    {
        $year = now()->year;

        $data = [];
        for ($month = 1; $month <= 12; $month++) {
            $startOfMonth = Carbon::create($year, $month, 1)->startOfDay();
            $endOfMonth = Carbon::create($year, $month, 1)->endOfMonth()->endOfDay();

            $count = Payment::where('status', 'dibayar') // filter status selesai
                ->where(function ($query) use ($startOfMonth, $endOfMonth) {
                    $query->whereBetween('tanggal_mulai', [$startOfMonth, $endOfMonth])
                        ->orWhereBetween('tanggal_selesai', [$startOfMonth, $endOfMonth])
                        ->orWhere(function ($q) use ($startOfMonth, $endOfMonth) {
                            $q->where('tanggal_mulai', '<', $startOfMonth)
                                ->where('tanggal_selesai', '>', $endOfMonth);
                        });
                })->count();

            $data[$month] = $count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Barang Disewa per Bulan (Status dibayar)',
                    'data' => array_values($data),
                    'backgroundColor' => 'rgba(75, 192, 192, 0.7)',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        ];
    }

}

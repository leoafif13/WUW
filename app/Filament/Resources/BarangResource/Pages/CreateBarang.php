<?php

namespace App\Filament\Resources\BarangResource\Pages;

use App\Filament\Resources\BarangResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBarang extends CreateRecord
{
    protected static string $resource = BarangResource::class;

    public function getTitle(): string
    {
        return 'Nambah Barang';
    }

    protected function getFormActions(): array
    {
    return [
        Actions\Action::make('create')
            ->label('Buat')
            ->action(fn() => $this->create()),

        Actions\Action::make('create_another')
            ->label('Buat dan Buat Lainnya')
            ->action(function () {
                $this->create();
                $this->fillForm(); // Reset form
            }),

        Actions\Action::make('cancel')
            ->label('Kembali')
            ->url($this->getResource()::getUrl('index'))
            ->color('gray')
            ->outlined(),
    ];
    }
}

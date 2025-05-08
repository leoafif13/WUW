<?php

namespace App\Filament\Resources\UsersResource\Pages;

use App\Filament\Resources\UsersResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUsers extends CreateRecord
{
    protected static string $resource = UsersResource::class;

    public function getTitle(): string
    {
        return 'Nambah User';
    }

    protected function getFormActions(): array
    {
        return [
            // Tombol Buat (Create)
            Actions\Action::make('create')
                ->label('Buat')
                ->action(fn() => $this->submitForm()),

            // Tombol Buat dan Buat Lainnya
            Actions\Action::make('create_another')
                ->label('Buat dan Buat Lainnya')
                ->action(fn() => $this->submitForm())
                ->after(function () {
                    $this->reset();  // Reset form untuk membuat barang baru
                }),

            // Tombol Kembali
            Actions\Action::make('cancel')
                ->label('Kembali')
                ->url($this->getResource()::getUrl('index'))
                ->color('gray')
                ->outlined(),
        ];
    }
}

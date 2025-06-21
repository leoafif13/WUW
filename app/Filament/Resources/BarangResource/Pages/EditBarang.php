<?php

namespace App\Filament\Resources\BarangResource\Pages;

use App\Filament\Resources\BarangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditBarang extends EditRecord
{
    protected static string $resource = BarangResource::class;

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
        ->success()
        ->title('Berhasil Diubah')
        ->duration(2000)
        ->body('Data Barang berhasil diubah');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus'),
        ];
    }

    protected function getFormActions(): array
    {
        return [
            Actions\Action::make('save')
                ->label('Simpan Perubahan')
                ->submit('save'),

            Actions\Action::make('cancel')
                ->label('Kembali')
                ->url(static::getResource()::getUrl('index'))
                ->color('gray')
                ->outlined(),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentResource\Pages;
use App\Models\Payment;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use pxlrbt\FilamentExcel\Columns\Column as ExcelColumn;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static ?string $activeNavigationIcon = 'heroicon-o-banknotes';
    
    protected static ?string $navigationGroup = 'Manajemen Barang';

    protected static ?string $label = 'Pembayaran';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('user_id')
                ->label('Nama Customer')
                ->relationship('user', 'name')
                ->searchable()
                ->required(),

            Forms\Components\TextInput::make('nama_barang')
                ->label('Nama Barang')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('ukuran')
                ->label('Ukuran')
                ->required()
                ->maxLength(50),

            Forms\Components\DatePicker::make('tanggal_mulai')
                ->label('Tanggal Mulai')
                ->required(),

            Forms\Components\DatePicker::make('tanggal_selesai')
                ->label('Tanggal Selesai')
                ->required(),

            Forms\Components\TextInput::make('qty')
                ->label('Jumlah (Qty)')
                ->numeric()
                ->required(),

            Forms\Components\Select::make('metode')
                ->options([
                    'cod' => 'Cash on Delivery (COD)',
                    'qris' => 'QRIS',
                ])
                ->label('Metode Pembayaran')
                ->required(),

            Forms\Components\Select::make('pengiriman')
                ->options([
                    'antar' => 'Antar ke Rumah',
                    'jemput' => 'Jemput ke Toko',
                ])
                ->label('Opsi Pengiriman')
                ->required(),

            Forms\Components\Textarea::make('alamat')
                ->label('Alamat')
                ->maxLength(255)
                ->rows(3)
                ->nullable()
                ->columnSpan('full'),

            Forms\Components\TextInput::make('total')
                ->label('Total Harga')
                ->numeric()
                ->prefix('Rp')
                ->required(),

            Forms\Components\Select::make('status')
                ->options([
                    'pending' => 'Pending',
                    'dibayar' => 'Dibayar',
                    'diproses' => 'Diproses',
                    'selesai' => 'Selesai',
                    'batal' => 'Batal',
                ])
                ->required()
                ->label('Status'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc') 
            ->columns([
                TextColumn::make('row_number')
                    ->label('No')
                    ->state(function ($record, $livewire) {
                        $currentPage = $livewire->page ?? 1;
                        $perPage = $livewire->tableRecordsPerPage ?? 10;
                        $index = $livewire->getTableRecords()->search(fn ($item) => $item->id === $record->id);
                        return ($currentPage - 1) * $perPage + $index + 1;
                    })
                    ->sortable(false),

                TextColumn::make('user.name')
                    ->label('Pengguna')
                    ->searchable(),

                TextColumn::make('metode')->searchable(),

                TextColumn::make('pengiriman')->searchable(),

                TextColumn::make('total')
                    ->label('Total Harga')
                    ->money('IDR', true),

                TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'selesai',
                        'danger' => 'batal',
                    ]),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i'),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y H:i'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                ExportBulkAction::make()
                    ->label('Export Excel')
                    ->exports([
                        ExcelExport::make('Pembayaran')
                            ->fromTable()
                            ->withFilename(fn () => 'Export_Pembayaran_' . now()->format('Ymd_His'))
                            ->withColumns([
                                ExcelColumn::make('user.name')->heading('Nama Customer')->formatStateUsing(fn ($record) => $record->user->name),
                                ExcelColumn::make('nama_barang')->heading('Nama Barang'),
                                ExcelColumn::make('ukuran')->heading('Ukuran'),
                                ExcelColumn::make('tanggal_mulai')->heading('Tanggal Mulai'),
                                ExcelColumn::make('tanggal_selesai')->heading('Tanggal Selesai'),
                                ExcelColumn::make('qty')->heading('Jumlah'),
                                ExcelColumn::make('metode')->heading('Metode Pembayaran'),
                                ExcelColumn::make('pengiriman')->heading('Pengiriman'),
                                ExcelColumn::make('alamat')->heading('Alamat'),
                                ExcelColumn::make('total')->heading('Total Harga'),
                                ExcelColumn::make('status')->heading('Status'),
                                ExcelColumn::make('created_at')->heading('Tanggal Dibuat'),
                                ExcelColumn::make('updated_at')->heading('Tanggal Diperbarui'),
                            ]),
                    ]),
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPayments::route('/'),
            'create' => Pages\CreatePayment::route('/create'),
            'edit' => Pages\EditPayment::route('/{record}/edit'),
        ];
    }
}

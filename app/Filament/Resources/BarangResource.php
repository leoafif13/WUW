<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangResource\Pages;
use App\Models\Barang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;

class BarangResource extends Resource
{
    protected static ?string $model = Barang::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kategori')
                    ->label('Kategori')
                    ->required()
                    ->options([
                        'Baju Nikahan' => 'Baju Nikahan',
                        'Baju Wisuda' => 'Baju Wisuda',
                    ]),
                
                Select::make('type')
                    ->required()
                    ->label('Tipe Pakaian')
                    ->placeholder('Pilih tipe pakaian')
                    ->options([
                        'Atasan' => 'Atasan',
                        'Bawahan' => 'Bawahan',
                    ]),
                
                TextInput::make('nama_barang'),

                TextInput::make('harga')
                    ->required()
                    ->label('harga')
                    ->placeholder('Masukkan Harga Baju')
                    ->numeric()
                    ->prefix('Rp')
                    ->minValue(0)
                    ->maxValue(1000000),

                TextInput::make('stok'),

                FileUpload::make('foto')
                    ->label('foto')
                    ->disk('public')
                    ->directory('barangs') 
                    ->preserveFilenames()
                    ->image()
                    ->visibility('public')
                    ->maxSize(2048)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/jpg']),

                TextInput::make('ukuran'),
                TextInput::make('warna'),

                MarkdownEditor::make('deskripsi')
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
                TextColumn::make('kategori'),

                TextColumn::make('type')
                    ->label('Jenis'),

                TextColumn::make('nama_barang'),

                TextColumn::make('harga')
                    ->label('Harga')
                    ->money('IDR', true),
                TextColumn::make('stok'),

                ImageColumn::make('foto')
                    ->disk('public')
                    ->width(100)
                    ->label('Foto')
                    ->visibility('public')
                    ->url(fn($record) => $record->foto ? asset('storage/barangs/' . basename($record->foto)) : asset('images/default.jpg')),
                TextColumn::make('ukuran'),
                TextColumn::make('warna'),
                TextColumn::make('deskripsi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBarangs::route('/'),
            'create' => Pages\CreateBarang::route('/create'),
            'edit' => Pages\EditBarang::route('/{record}/edit'),
        ];
    }
}

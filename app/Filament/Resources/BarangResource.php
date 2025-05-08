<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangResource\Pages;
use App\Filament\Resources\BarangResource\RelationManagers;
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

class BarangResource extends Resource
{
    protected static ?string $model = Barang::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kategori'),
                TextInput::make('nama_barang'),
                TextInput::make('stok'),
                FileUpload::make('foto')
                    ->disk('public')
                    ->preserveFilenames()
                    ->image()
                    ->visibility('public'),
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
                TextColumn::make('nama_barang'),
                TextColumn::make('stok'),
                ImageColumn::make('foto')
                    ->disk('public')
                    ->url(fn($record) => $record->foto ? asset('storage/' . $record->foto) : null) 
                    ->width(100),
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

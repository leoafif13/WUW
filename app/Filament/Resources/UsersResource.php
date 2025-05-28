<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersResource\Pages;

use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;


class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'System Management';

    protected static ?string $label = 'Customer';

    public static function getNavigationBadge(): ?string
    {
        $count = User::where('role', 'customer')->count();

        if ($count > 99) {
            return '99+';
        }

        return (string) $count;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('alamat'),
                TextInput::make('telepon'),
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
                TextColumn::make('name')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('alamat')->searchable(),
                TextColumn::make('telepon')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUsers::route('/create'),
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('role', 'customer');
    }
}

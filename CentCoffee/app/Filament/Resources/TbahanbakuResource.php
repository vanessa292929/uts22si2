<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TbahanbakuResource\Pages;
use App\Filament\Resources\TransactionDetailResource\RelationManagers;
use App\Models\tbahanbaku;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TbahanbakuResource extends Resource
{
    protected static ?string $model = tbahanbaku::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_bahan_baku')
                    ->label('Kode Bahan Baku')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('nama_bahan_baku')
                    ->label('Nama Bahan Baku')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('stok_bahan_baku')
                    ->label('Stok Bahan Baku')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('satuan_bahan_baku')
                    ->label('Satuan Bahan Baku')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('tanggal_kadaluarsa_bahan_baku')
                    ->label('Tanggal Kadaluarsa Bahan Baku')
                    ->required()
                    ->date(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_bahan_baku')->sortable()->searchable(),
                TextColumn::make('nama_bahan_baku')->sortable()->searchable(),
                TextColumn::make('stok_bahan_baku')->sortable()->searchable(),
                TextColumn::make('satuan_bahan_baku')->sortable()->searchable(),
                TextColumn::make('tanggal_kadaluarsa_bahan_baku')->sortable()->searchable(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTbahanbaku::route('/'),
            'create' => Pages\CreateTbahanbaku::route('/create'),
            'edit' => Pages\EditTbahanbaku::route('/{record}/edit'),
        ];
    }
}

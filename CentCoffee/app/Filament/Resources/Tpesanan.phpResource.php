<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesananResource\Pages;
use App\Models\Pesanan;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class PesananResource extends Resource
{
    protected static ?string $model = Pesanan::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kode_pesanan')
                    ->required(),
                TextInput::make('tanggal_pesanan')
                    ->required()
                    ->date(),
                TextInput::make('waktu_pesanan')
                    ->required()
                    ->time(),
                TextInput::make('pembeli_pesanan')
                    ->required()
                    ->maxLength(50),
                TextInput::make('catatan_pesanan')
                    ->nullable(),
                Select::make('status_pesanan')
                    ->options([
                        'C' => 'Completed',
                        'P' => 'Pending',
                        'T' => 'Taken',
                        'D' => 'Delivered',
                    ])
                    ->required(),
                TextInput::make('kode_pegawai')
                    ->required()
                    ->maxLength(15),
                TextInput::make('kode_perangkat')
                    ->required()
                    ->maxLength(15),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_pesanan')->sortable()->searchable(),
                TextColumn::make('tanggal_pesanan')->sortable()->searchable(),
                TextColumn::make('waktu_pesanan')->sortable()->searchable(),
                TextColumn::make('pembeli_pesanan')->sortable()->searchable(),
                TextColumn::make('status_pesanan')->sortable()->searchable(),
                TextColumn::make('kode_pegawai')->sortable()->searchable(),
            ])
            ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPesanan::route('/'),
            'create' => Pages\CreatePesanan::route('/create'),
            'edit' => Pages\EditPesanan::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TpesananResource\Pages;
use App\Models\tpesanan;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class TpesananResource extends Resource
{
    protected static ?string $model = tpesanan::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Pesanan';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Pesanan';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_pesanan')
                    ->required(),
                    Forms\Components\DatePicker::make('tanggal_pesanan')
                    ->required()
                    ->displayFormat('d/m/Y'),
                    Forms\Components\TimePicker::make('waktu_pesanan')
                    ->required()
                    ->displayFormat('h:i A'),
                    Forms\Components\TextInput::make('pembeli_pesanan')
                    ->required()
                    ->maxLength(50),
                    Forms\Components\TextInput::make('catatan_pesanan')
                    ->nullable(),
                    Forms\Components\TextInput::make('harga_pesanan')
                    ->required()
                    ->maxLength(50),
                    Forms\Components\TextInput::make('tunai_pesanan')
                    ->required()
                    ->maxLength(50),
                    Forms\Components\Select::make('status_pesanan')
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
                Tables\Columns\TextColumn::make('kode_pesanan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tanggal_pesanan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('waktu_pesanan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('pembeli_pesanan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('catatan_pesanan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status_pesanan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_pegawai')->sortable()->searchable(),
            ])
            ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTpesanan::route('/'),
            'create' => Pages\CreateTpesanan::route('/create'),
            'edit' => Pages\EditTpesanan::route('/{record}/edit'),
        ];
    }
}

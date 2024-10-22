<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TpengadaanbahanbakuResource\Pages;
use App\Models\PengadaanBahanBaku;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class TpengadaanbahanbakuResource extends Resource
{
    protected static ?string $model = PengadaanBahanBaku::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('kode_pengadaan_bahan_baku')
                ->required()
                ->label('Kode Pengadaan'),
            TextInput::make('subjek_pengadaan_bahan_baku')
                ->required()
                ->label('Subjek'),
            Select::make('status_pengadaan_bahan_baku')
                ->required()
                ->options([
                    'Pending' => 'Pending',
                    'Selesai' => 'Selesai',
                ])
                ->label('Status'),
            TextInput::make('kode_prioritas')
                ->required()
                ->label('Kode Prioritas'),
            TextInput::make('kode_pegawai')
                ->required()
                ->label('Kode Pegawai'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('kode_pengadaan_bahan_baku')->sortable()->searchable(),
            TextColumn::make('subjek_pengadaan_bahan_baku')->sortable()->searchable(),
            TextColumn::make('status_pengadaan_bahan_baku')->sortable()->searchable(),
            TextColumn::make('kode_prioritas')->sortable()->searchable(),
            TextColumn::make('kode_pegawai')->sortable()->searchable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTpengadaanbahanbaku::route('/'),
            'create' => Pages\CreateTpengadaanbahanbaku::route('/create'),
            'edit' => Pages\EditTpengadaanbahanbaku::route('/{record}/edit'),
        ];
    }
}

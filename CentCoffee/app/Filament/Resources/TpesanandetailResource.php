<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TpesanandetailResource\Pages;
use App\Models\tpesananDetail;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class TpesanandetailResource extends Resource
{
    protected static ?string $model = tpesananDetail::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kode_pesanan_detil')
                    ->required(),
                TextInput::make('jumlah_pesanan_detil')
                    ->required()
                    ->numeric(),
                Select::make('status_pesanan_detil')
                    ->options([
                        'P' => 'Pending',
                        'D' => 'Delivered',
                    ])
                    ->required(),
                TextInput::make('kode_pesanan')
                    ->required(),
                TextInput::make('kode_menu')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_pesanan_detil')->sortable()->searchable(),
                TextColumn::make('jumlah_pesanan_detil')->sortable()->searchable(),
                TextColumn::make('status_pesanan_detil')->sortable()->searchable(),
                TextColumn::make('kode_pesanan')->sortable()->searchable(),
                TextColumn::make('kode_menu')->sortable()->searchable(),
            ])
            ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTpesananDetail::route('/'),
            'create' => Pages\CreateTpesananDetail::route('/create'),
            'edit' => Pages\EditTpesananDetail::route('/{record}/edit'),
        ];
    }
}

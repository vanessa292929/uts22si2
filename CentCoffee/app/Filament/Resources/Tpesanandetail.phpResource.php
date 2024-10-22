<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesananDetailResource\Pages;
use App\Models\PesananDetail;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class PesananDetailResource extends Resource
{
    protected static ?string $model = PesananDetail::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
            'index' => Pages\ListPesananDetail::route('/'),
            'create' => Pages\CreatePesananDetail::route('/create'),
            'edit' => Pages\EditPesananDetail::route('/{record}/edit'),
        ];
    }
}

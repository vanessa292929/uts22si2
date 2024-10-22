<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ThalamenResource\Pages;
use App\Models\Halaman;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;

class ThalamenResource extends Resource
{
    protected static ?string $model = Halaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_halaman')
                    ->label('Kode Halaman')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('nama_halaman')
                    ->label('Nama Halaman')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('ikon_halaman')
                    ->label('Ikon Halaman')
                    ->required()
                    ->maxLength(25),
                Forms\Components\TextInput::make('urutan_halaman')
                    ->label('Urutan Halaman')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_halaman')->sortable()->searchable(),
                TextColumn::make('nama_halaman')->sortable()->searchable(),
                TextColumn::make('ikon_halaman')->sortable()->searchable(),
                TextColumn::make('urutan_halaman')->sortable()->searchable(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListThalamen::route('/'),
            'create' => Pages\CreateThalamen::route('/create'),
            'edit' => Pages\EditThalamen::route('/{record}/edit'),
        ];
    }
}

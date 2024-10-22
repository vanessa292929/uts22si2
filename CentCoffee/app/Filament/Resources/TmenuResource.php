<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TmenuResource\Pages;
use App\Models\Menu;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;

class TmenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_menu')
                    ->label('Kode Menu')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('nama_menu')
                    ->label('Nama Menu')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('jenis_menu')
                    ->label('Jenis Menu')
                    ->required(),
                Forms\Components\TextInput::make('harga_menu')
                    ->label('Harga Menu')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('deskripsi_menu')
                    ->label('Deskripsi Menu')
                    ->required(),
                Forms\Components\TextInput::make('kode_pegawai')
                    ->label('Kode Pegawai')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_menu')->sortable()->searchable(),
                TextColumn::make('nama_menu')->sortable()->searchable(),
                TextColumn::make('jenis_menu')->sortable()->searchable(),
                TextColumn::make('harga_menu')->sortable()->searchable(),
                TextColumn::make('deskripsi_menu')->sortable()->searchable(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTmenu::route('/'),
            'create' => Pages\CreateTmenu::route('/create'),
            'edit' => Pages\EditTmenu::route('/{record}/edit'),
        ];
    }
}

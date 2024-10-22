<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ThalamenResource\Pages;
use App\Models\Thalaman;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ThalamanResource extends Resource
{
    protected static ?string $model = Thalaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPluralModelLabel(): string
    {
        return 'Halaman'; 
    }

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
            'index' => ThalamanResource\Pages\ListThalaman::route('/'),
            'create' => ThalamanResource\Pages\CreateThalaman::route('/create'),
            'edit' => ThalamanResource\Pages\EditThalaman::route('/{record}/edit'),
        ];
    }
}

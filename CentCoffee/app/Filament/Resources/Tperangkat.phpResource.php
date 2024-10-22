<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TperangkatResource\Pages;
use App\Models\Perangkat;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class TperangkatResource extends Resource
{
    protected static ?string $model = Perangkat::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('kode_perangkat')
                ->required()
                ->label('Kode Perangkat'),
            TextInput::make('nama_perangkat')
                ->required()
                ->label('Nama Perangkat'),
            TextInput::make('jumlah_kursi_perangkat')
                ->required()
                ->numeric()
                ->label('Jumlah Kursi'),
            TextInput::make('kata_sandi_perangkat')
                ->required()
                ->password()
                ->label('Kata Sandi'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('kode_perangkat')->sortable()->searchable(),
            TextColumn::make('nama_perangkat')->sortable()->searchable(),
            TextColumn::make('jumlah_kursi_perangkat')->sortable()->searchable(),
            TextColumn::make('status_perangkat')->sortable()->searchable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTperangkat::route('/'),
            'create' => Pages\CreateTperangkat::route('/create'),
            'edit' => Pages\EditTperangkat::route('/{record}/edit'),
        ];
    }
}

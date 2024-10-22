<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TkuesionerResource\Pages;
use App\Models\Kuesioner;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class TkuesionerResource extends Resource
{
    protected static ?string $model = Kuesioner::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('kode_kuesioner')
                ->required()
                ->label('Kode Kuesioner'),
            TextInput::make('judul_kuesioner')
                ->required()
                ->label('Judul Kuesioner'),
            TextInput::make('isi_kuesioner')
                ->required()
                ->label('Isi Kuesioner'),
            TextInput::make('kode_pegawai')
                ->required()
                ->label('Kode Pegawai'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('kode_kuesioner')->sortable()->searchable(),
            TextColumn::make('judul_kuesioner')->sortable()->searchable(),
            TextColumn::make('isi_kuesioner')->sortable()->searchable(),
            TextColumn::make('kode_pegawai')->sortable()->searchable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTkuesioner::route('/'),
            'create' => Pages\CreateTkuesioner::route('/create'),
            'edit' => Pages\EditTkuesioner::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TkuesionerResource\Pages;
use App\Filament\Resources\TkuesionerResource\RelationManagers;
use App\Models\tkuesioner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\DatePicker;

class TkuesionerResource extends Resource
{
    protected static ?string $model = tkuesioner::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPluralModelLabel(): string
    {
        return 'Kuesioner'; 
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_kuisoner')
                ->required()
                ->label('Kode Kuesioner'),

                Forms\Components\TextInput::make('judul_kuisioner')
                ->required()
                ->label('Judul Kuesioner'),

                Forms\Components\TextInput::make('isi_kuisioner')
                ->required()
                ->label('Isi Kuesioner'),
            
           Forms\Components\DatePicker::make('tanggal_kuisioner')
                ->required()
                ->label('Tanggal Kuesioner')
                ->displayFormat('d/m/Y'),

                Forms\Components\TimePicker::make('waktu_kuisioner')
                ->required()
                ->label('Waktu Kuesioner')
                ->displayFormat('h:i A'),

                Forms\Components\TextInput::make('status_kuisioner')
                ->required()
                ->label('Status Kuesioner'),

                Forms\Components\TextInput::make('kode_pegawai')
                ->required()
                ->label('Kode Pegawai'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kode_kuesioner')->label('Kode Kuesioner')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('judul_kuesioner')->label('Judul Kuesioner')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('isi_kuesioner')->label('Isi Kuesioner')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('tanggal_kuisioner')->label('Tanggal Kuesioner')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('waktu_kuisioner')->label('Waktu Kuesioner')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('status_kuisioner')->label('Status Kuesioner')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('kode_pegawai')->label('Kode_pegawai')->sortable()->searchable(),
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

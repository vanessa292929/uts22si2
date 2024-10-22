<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TpegawaiResource\Pages;
use App\Models\Pegawai;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class TpegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kode_pegawai')
                    ->required()
                    ->maxLength(15),
                TextInput::make('kata_sandi')
                    ->required()
                    ->maxLength(100),
                TextInput::make('nama_pegawai')
                    ->required()
                    ->maxLength(50),
                Select::make('jenis_kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->required(),
                TextInput::make('kode_otoritas')
                    ->required()
                    ->maxLength(15),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_pegawai')->sortable()->searchable(),
                TextColumn::make('nama_pegawai')->sortable()->searchable(),
                TextColumn::make('jenis_kelamin')->sortable()->searchable(),
                TextColumn::make('kode_otoritas')->sortable()->searchable(),
            ])
            ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTpegawai::route('/'),
            'create' => Pages\CreateTpegawai::route('/create'),
            'edit' => Pages\EditTpegawai::route('/{record}/edit'),
        ];
    }
}

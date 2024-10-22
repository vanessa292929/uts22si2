<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TkuesionerperangkatResource\Pages;
use App\Models\KuesionerPerangkat;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class TkuesionerperangkatResource extends Resource
{
    protected static ?string $model = KuesionerPerangkat::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('kode_kuesioner_perangkat')
                ->required()
                ->label('Kode Perangkat'),
            TextInput::make('pesan_kuesioner_perangkat')
                ->required()
                ->label('Pesan Kuesioner'),
            TextInput::make('kode_perangkat')
                ->required()
                ->label('Kode Perangkat'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('kode_kuesioner_perangkat')->sortable()->searchable(),
            TextColumn::make('pesan_kuesioner_perangkat')->sortable()->searchable(),
            TextColumn::make('kode_perangkat')->sortable()->searchable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTkuesionerperangkat::route('/'),
            'create' => Pages\CreateTkuesionerperangkat::route('/create'),
            'edit' => Pages\EditTkuesionerperangkat::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TprioritasResource\Pages;
use App\Models\tprioritas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class TprioritasResource extends Resource
{
    protected static ?string $model = tprioritas::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Prioritas';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Prioritas';
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('kode_prioritas')
                ->required()
                ->label('Kode Prioritas'),
            TextInput::make('nama_prioritas')
                ->required()
                ->label('Nama Prioritas'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('kode_prioritas')->sortable()->searchable(),
            TextColumn::make('nama_prioritas')->sortable()->searchable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTprioritas::route('/'),
            'create' => Pages\CreateTprioritas::route('/create'),
            'edit' => Pages\EditTprioritas::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TprioritasResource\Pages;
use App\Models\Prioritas;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class TprioritasResource extends Resource
{
    protected static ?string $model = Prioritas::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';

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

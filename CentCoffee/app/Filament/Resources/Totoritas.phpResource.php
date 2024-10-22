<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TotoritasResource\Pages;
use App\Models\Otoritas;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class TotoritasResource extends Resource
{
    protected static ?string $model = Otoritas::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('kode_otoritas')
                ->required()
                ->label('Kode Otoritas'),
            TextInput::make('nama_otoritas')
                ->required()
                ->label('Nama Otoritas'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('kode_otoritas')->sortable()->searchable(),
            TextColumn::make('nama_otoritas')->sortable()->searchable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTotoritas::route('/'),
            'create' => Pages\CreateTotoritas::route('/create'),
            'edit' => Pages\EditTotoritas::route('/{record}/edit'),
        ];
    }
}

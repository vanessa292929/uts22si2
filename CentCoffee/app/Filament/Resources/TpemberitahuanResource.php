<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TpemberitahuanResource\Pages;
use App\Models\tpemberitahuan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class TpemberitahuanResource extends Resource
{
    protected static ?string $model = tpemberitahuan::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('kode_pemberitahuan')
                ->required()
                ->label('Kode Pemberitahuan'),
            TextInput::make('isi_pemberitahuan')
                ->required()
                ->label('Isi Pemberitahuan'),
            TextInput::make('kode_pengingat')
                ->required()
                ->label('Kode Pengingat'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('kode_pemberitahuan')->sortable()->searchable(),
            TextColumn::make('isi_pemberitahuan')->sortable()->searchable(),
            TextColumn::make('kode_pengingat')->sortable()->searchable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTpemberitahuan::route('/'),
            'create' => Pages\CreateTpemberitahuan::route('/create'),
            'edit' => Pages\EditTpemberitahuan::route('/{record}/edit'),
        ];
    }
}

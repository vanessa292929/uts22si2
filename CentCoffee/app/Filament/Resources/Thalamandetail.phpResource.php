<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ThalamandetailResource\Pages;
use App\Models\HalamanDetail;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;

class ThalamandetailResource extends Resource
{
    protected static ?string $model = HalamanDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_halaman_detail')
                    ->label('Kode Halaman Detail')
                    ->required(),
                Forms\Components\TextInput::make('kode_otoritas')
                    ->label('Kode Otoritas')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('kode_halaman')
                    ->label('Kode Halaman')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('status_halaman_detil')
                    ->label('Status Halaman Detil')
                    ->required()
                    ->boolean(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_halaman_detail')->sortable()->searchable(),
                TextColumn::make('kode_otoritas')->sortable()->searchable(),
                TextColumn::make('kode_halaman')->sortable()->searchable(),
                TextColumn::make('status_halaman_detil')->sortable()->searchable(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListThalamandetail::route('/'),
            'create' => Pages\CreateThalamandetail::route('/create'),
            'edit' => Pages\EditThalamandetail::route('/{record}/edit'),
        ];
    }
}

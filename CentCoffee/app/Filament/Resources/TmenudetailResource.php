<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TmenudetailResource\Pages;
use App\Models\MenuDetail;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class TmenudetailResource extends Resource
{
    protected static ?string $model = MenuDetail::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kode_menu_detail')
                    ->required(),
                TextInput::make('jumlah_bahan_baku_detail')
                    ->required()
                    ->numeric(),
                TextInput::make('kode_menu')
                    ->required(),
                TextInput::make('kode_bahan_baku')
                    ->required()
                    ->maxLength(15),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_menu_detail')->sortable()->searchable(),
                TextColumn::make('jumlah_bahan_baku_detail')->sortable()->searchable(),
                TextColumn::make('kode_menu')->sortable()->searchable(),
                TextColumn::make('kode_bahan_baku')->sortable()->searchable(),
            ])
            ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTmenudetail::route('/'),
            'create' => Pages\CreateTmenudetail::route('/create'),
            'edit' => Pages\EditTmenudetail::route('/{record}/edit'),
        ];
    }
}

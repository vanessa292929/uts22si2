<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TkuesionerdetailResource\Pages;
use App\Models\tkuesionerDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class TkuesionerdetailResource extends Resource
{
    protected static ?string $model = tkuesionerDetail::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    
    public static function getPluralModelLabel(): string
    {
        return 'Kuesioner Detail'; 
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('kode_kuesioner_detil')
                ->required()
                ->label('Kode Kuesioner Detail'),
            TextInput::make('kode_kuesioner')
                ->required()
                ->label('Kode Kuesioner'),
            TextInput::make('poin_kuesioner')
                ->required()
                ->label('Poin Kuesioner'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('kode_kuesioner_detil')->sortable()->searchable(),
            TextColumn::make('kode_kuesioner')->sortable()->searchable(),
            TextColumn::make('poin_kuesioner')->sortable()->searchable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTkuesionerdetail::route('/'),
            'create' => Pages\CreateTkuesionerdetail::route('/create'),
            'edit' => Pages\EditTkuesionerdetail::route('/{record}/edit'),
        ];
    }
}

<?php
// DONE
namespace App\Filament\Resources;

use App\Filament\Resources\TpesanandetailResource\Pages;
use App\Models\tpesananDetail;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class TpesanandetailResource extends Resource
{
    protected static ?string $model = tpesananDetail::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Pesanan Detail';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Pesanan Detail';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_pesanan_detil')
                    ->label('Kode Pesanan Detil')
                    ->required()
                    ->placeholder('Kode Pesanan Detil'),

                Forms\Components\TextInput::make('kode_menu')
                    ->label('Kode Menu')
                    ->required()
                    ->placeholder('Kode Menu'),

                Forms\Components\TextInput::make('kode_pesanan')
                    ->label('Kode Pesanan')
                    ->required()
                    ->placeholder('Kode Pesanan'),

                Forms\Components\TextInput::make('jumlah_pesanan_detail')
                    ->label('Jumlah Pesanan Detail')
                    ->required()
                    ->placeholder('Kode Pesanan'),

                Forms\Components\Select::make('status_pesanan_detil')
                    ->label('Status Pesanan Detail')
                    ->options([
                        'P' => 'Pending',
                        'D' => 'Delivered',
                    ])
                    ->required(),
                
                
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([ 
                TextColumn::make('kode_pesanan_detil')
                    ->label('Kode Pesanan Detil')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('kode_pesanan')
                    ->label('Kode Pesanan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('kode_menu')
                    ->label('Kode Menu')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jumlah_pesanan_detil')
                    ->label('Jumlah Pesanan Detil')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('status_pesanan_detil')
                    ->label('Status Pesanan Detil')
                    ->sortable()
                    ->searchable(),
      
            ])
            ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTpesananDetail::route('/'),
            'create' => Pages\CreateTpesananDetail::route('/create'),
            'edit' => Pages\EditTpesananDetail::route('/{record}/edit'),
        ];
    }
}

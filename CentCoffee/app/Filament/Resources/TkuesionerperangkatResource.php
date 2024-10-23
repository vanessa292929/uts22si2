<?php
//DONE
namespace App\Filament\Resources;

use App\Filament\Resources\TkuesionerperangkatResource\Pages;
use App\Filament\Resources\TkuesionerperangkatResource\RelationManagers;
use App\Models\tkuesionerperangkat;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;


class TkuesionerperangkatResource extends Resource
{
    protected static ?string $model = tkuesionerperangkat::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    

    public static function getPluralModelLabel(): string
    {
        return 'Kuesioner Perangkat'; 
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_kuisioner_perangkat')
                ->required()
                ->label('Kode Kuisioner Perangkat'),

            Forms\Components\TextInput::make('pembeli_kuisioner_perangkat')
                ->required()
                ->label('Pembeli Kuisioner Peranngkat'),

            Forms\Components\TextInput::make('kode_perangkat')
                ->required()
                ->label('Kode Perangkat'),

            Forms\Components\TextInput::make('pesan_kuisioner_perangkat')
                ->required()
                ->label('Pesan Kuisioner Perangkat'),
            
            Forms\Components\DateTimePicker::make('tanggal_kuisioner_perangkat')
                ->required()
                ->displayFormat('Y-m-d')
                ->label('Tanggal Kuisioner Perangkat'),
            
            Forms\Components\DateTimePicker::make('waktu_kuisioner_perangkat')
                ->required()
                ->seconds(false)
                ->displayFormat('H:i')
                ->label('Waktu Kuisioner Perangkat'),
            
            Forms\Components\Toggle::make('status_kuesioner_perangkat')
                ->label('Active')
                ->onIcon('heroicon-s-check')
                ->offIcon('heroicon-s-x')
                ->required()

            
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kode_kuisioner_perangkat')
                    ->searchable()
                    ->label('Kode kuisioner perangkat'),
            
            Tables\Columns\TextColumn::make('pembeli_kuisioner_perangkat')
                    ->searchable()
                    ->label('Pembeli Kuisioner Perangkat'),

            Tables\Columns\TextColumn::make('kode_perangkat')
                    ->searchable()
                    ->label('Kode Perangkat'),
            
            Tables\Columns\TextColumn::make('pesan_kuisioner_perangkat')
                    ->searchable()
                    ->label('Pesan Kuisioner Perangkat'),

            Tables\Columns\TextColumn::make('tanggal_kuisioner_perangkat')
                    ->searchable()
                    ->label('Tanggal Kuisioner Perangkat'),

            Tables\Columns\TextColumn::make('waktu_kuisioner_perangkat')
                    ->searchable()
                    ->label('Waktu Kuisioner Perangkat'),

            Tables\Columns\TextColumn::make('status_kuisioner_perangkat')
                    ->searchable()
                    ->label('Status Kuisioner Perangkat'),

            Tables\Columns\IconColumn::make('status_kuesioner_perangkat')
                    ->boolean()

            
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

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Taman;
use Filament\Forms\Form;
use App\Models\Kelurahan;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TamanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TamanResource\RelationManagers;

class TamanResource extends Resource
{
    protected static ?string $model = Taman::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    protected static ?string $navigationGroup = 'Manajemen Taman';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(64)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(256),
                Forms\Components\Select::make('kelurahans_id')
                    ->relationship('kelurahan', 'name')
                    ->label('Kelurahan')
                    ->searchable()
                    ->options(Kelurahan::limit(5)->pluck('name', 'id'))
                    ->getSearchResultsUsing(function (string $search) {
                        return Kelurahan::where('name', 'like', "%{$search}%")
                            ->limit(5)
                            ->pluck('name', 'id')
                            ->toArray();
                    })
                    ->getOptionLabelUsing(function ($value) {
                        return Kelurahan::find($value)?->name;
                    })
                    ->required(),
                Forms\Components\TextInput::make('no_kib')
                    ->required()
                    ->label('No. KIB')
                    ->maxLength(255),
                Forms\Components\TextInput::make('luas')
                    ->required(),
                Forms\Components\Textarea::make('keterangan')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelurahan.name')
                    ->label('Kelurahan'),
                Tables\Columns\TextColumn::make('kecamatan_name')
                    ->label('kecamatan'),
                Tables\Columns\TextColumn::make('no_kib')
                    ->label('No. KIB'),
                Tables\Columns\TextColumn::make('luas_formatted')
                    ->sortable()
                    ->label('Luas')
                    ->numeric(),
                Tables\Columns\TextColumn::make('keterangan')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                TextColumn::make('createdBy.name')
                    ->label('Created By'),
                TextColumn::make('updatedBy.name')
                    ->label("Updated by"),
                TextColumn::make('deletedBy.name')
                    ->label("Deleted by"),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTamen::route('/'),
            'create' => Pages\CreateTaman::route('/create'),
            'edit' => Pages\EditTaman::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

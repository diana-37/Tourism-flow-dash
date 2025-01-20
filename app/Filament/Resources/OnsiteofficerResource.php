<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OnsiteofficerResource\Pages;
use App\Filament\Resources\OnsiteofficerResource\RelationManagers;
use App\Models\Onsiteofficer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OnsiteofficerResource extends Resource
{
    protected static ?string $model = Onsiteofficer::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Users';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Section::make('user name')
                ->description('')
                ->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
                ]),
            Forms\Components\Section::make('user address')
                ->description('')
                ->schema([
            Forms\Components\TextInput::make('email')
                ->required()
                ->email()
                ->maxLength(255),
            Forms\Components\TextInput::make('phone')
                ->tel()
                ->required()
                ->maxLength(255),
                ])->columns(2),
            Forms\Components\Section::make('Other Info')
                ->description('')
                ->schema([
                    Forms\Components\Select::make('gender')
                ->label('Gender')
                 ->options([
                'male' => 'Male',
                'female' => 'Female',
                'other' => 'Other'])
                ->native(false)
                ->required(),
            Forms\Components\TextInput::make('destination')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
                 ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('destination')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListOnsiteofficers::route('/'),
            'create' => Pages\CreateOnsiteofficer::route('/create'),
            'view' => Pages\ViewOnsiteofficer::route('/{record}'),
            'edit' => Pages\EditOnsiteofficer::route('/{record}/edit'),
        ];
    }
}

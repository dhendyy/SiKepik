<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationGroup = 'Admin';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->maxLength(15),
                Forms\Components\FileUpload::make('image_url')
                    ->label('Profile Image')
                    ->directory('users')
                    ->image()
                    ->maxSize(2048),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required(fn($livewire) => $livewire instanceof \Filament\Resources\Pages\CreateRecord)
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn($state) => bcrypt($state)),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('No')->sortable(),
                ImageColumn::make('image_url')->label('Gambar')
                    ->circular()
                    ->size(50),
                TextColumn::make('name')->label('Nama')->sortable(),
                TextColumn::make('email')->label('Email')->sortable(),
                TextColumn::make('phone')->label('Nomor Telepon')->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}

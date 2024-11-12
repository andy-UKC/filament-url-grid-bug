<?php

namespace App\Filament\Resources;


use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Models\User;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Grid::make([
                    'lg' => 2,
                ])
                    ->schema([
                        TextColumn::make('id'),
                        Grid::make([
                            'lg' => 4,
                        ])
                            ->schema([
                                TextColumn::make('name')
                                    //todo either comment this out
                                    ->url(fn($record) => 'https://google.com'),
                                TextColumn::make('email'),
                                TextColumn::make('email_verified_at'),
                                TextColumn::make('created_at'),
                            ]),
                    ]),
            ]);

    }

    public static function getPages(): array
    {
        return [
            'index' => ListUsers::route('/'),

            //todo or comment this out
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }

}

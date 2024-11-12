<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\ListRecords;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}


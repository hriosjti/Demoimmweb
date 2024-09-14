<?php

namespace App\Filament\Resources\MahasiswaResource\Pages;

use Filament\Actions;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\MahasiswaResource;

class ListMahasiswas extends ListRecords
{
    protected static string $resource = MahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),

        ];
    }
}

<?php

namespace App\Filament\Resources\BeritaResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\BeritaResource;
use App\Models\berita;
use Filament\Resources\Pages\EditRecord;

class EditBerita extends EditRecord
{
    protected static string $resource = BeritaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(berita $record) {
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}

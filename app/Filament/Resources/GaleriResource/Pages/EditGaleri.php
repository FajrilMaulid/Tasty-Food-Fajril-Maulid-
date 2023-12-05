<?php

namespace App\Filament\Resources\GaleriResource\Pages;

use App\Models\galeri;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\GaleriResource;

class EditGaleri extends EditRecord
{
    protected static string $resource = GaleriResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(galeri $record) {
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}

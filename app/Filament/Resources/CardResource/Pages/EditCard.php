<?php

namespace App\Filament\Resources\CardResource\Pages;

use App\Models\card;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\CardResource;
use Filament\Resources\Pages\EditRecord;

class EditCard extends EditRecord
{
    protected static string $resource = CardResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(card $record) {
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}

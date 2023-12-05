<?php

namespace App\Filament\Resources\BlogResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\BlogResource;
use App\Models\blog;
use Filament\Resources\Pages\EditRecord;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(blog $record) {
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}

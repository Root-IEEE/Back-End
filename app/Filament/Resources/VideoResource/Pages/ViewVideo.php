<?php

namespace App\Filament\Resources\VideoResource\Pages;

use App\Filament\Resources\VideoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewVideo extends ViewRecord
{
    protected static string $resource = VideoResource::class;

    protected static string $view = 'filament.pages.view-video';

//    protected function getActions(): array
//    {
//        return [
//            Actions\EditAction::make(),
//        ];
//    }
}

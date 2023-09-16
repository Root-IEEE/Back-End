<?php

namespace App\Filament\Resources\ExamResource\Pages;

use App\Filament\Resources\ExamResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExam extends CreateRecord
{
    protected static string $resource = ExamResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->user()->id;

        return $data;
    }
}

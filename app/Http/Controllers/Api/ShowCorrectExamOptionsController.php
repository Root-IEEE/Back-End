<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExamResource;
use App\Http\Resources\OptionResource;
use App\Models\Exam;
use App\Models\Option;
use App\Models\User;
use Illuminate\Http\Request;

class ShowCorrectExamOptionsController extends Controller
{
    public function __invoke(Exam $exam, User $user)
    {
        $userOptions = $user->options()->where('exam_id', $exam->id)->get();

       return ExamResource::make($exam)->additional([
           'user_options' => OptionResource::collection($userOptions)
       ]);
    }
}

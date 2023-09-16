<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubmitResultRequest;
use App\Http\Resources\ResultResource;
use App\Models\Exam;
use App\Models\Result;
use App\Models\User;


class SubmitResultController extends Controller
{
    public function __invoke(SubmitResultRequest $request)
    {
        $exam = Exam::find($request->input('exam_id'));
        $user = User::find($request->input('user_id'));
        $questions= $exam->questions;
        $counter = 0;

        foreach ($request->input('questions') as $question){
            $question_id = $question['question_id'];
            $option_id = $question['option_id'];

            $matching_question = $questions->where('id', $question_id)->first();
            $matching_option= $matching_question->options()->where('id', $option_id)->first();
            if($matching_option->status == 1){
                $counter++ ;
            }
            $user->options()->syncWithPivotValues([$matching_option->id], [
               'exam_id' => $exam->id,
               'question_id' => $question_id,
            ], false);
        }
        $total_score=$counter;
        $max_score= $exam->questions()->count();
         $result = Result::create([
            'user_id' => $request->input('user_id'),
            'exam_id' => $request->input('exam_id'),
            'max_score' => $max_score,
            'total_score' => $total_score,
        ]);

        return new ResultResource($result);








    }
}

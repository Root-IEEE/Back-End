<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubmitResultRequest extends FormRequest
{

    public function rules()
    {
        return [
            'user_id' => ['required', 'integer', Rule::exists('users', 'id')],
            'exam_id' => ['required', 'integer', Rule::exists('exams', 'id')],
            'questions' => ['required', 'array', 'min:1'],
            'questions.*.question_id' => ['required', 'integer', Rule::exists('questions', 'id')],
            'questions.*.option_id' => ['required', 'integer', Rule::exists('options', 'id')],
        ];
    }
}

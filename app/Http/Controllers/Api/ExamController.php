<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ExamResource;
use App\Models\Exam;
use App\Http\Controllers\Controller;


class ExamController extends Controller
{
  public function index()
  {
      $exams = Exam::all();
      return ExamResource::collection($exams);

  }


  public function show($id)
  {
      $exam = Exam::with('questions')->find($id);
      if (!$exam) {
          return response()->json(['message' => 'Exam not found'], 404);
      }
      $examResource = new ExamResource($exam);
      $response = [
          'exam' => $examResource,
      ];

      return response()->json($response);
  }


}



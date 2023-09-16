<?php


use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ExamController;
use App\Http\Controllers\Api\ExamResultsController;
use App\Http\Controllers\Api\StudentDetailsController;
use App\Http\Controllers\Api\StudentProfileController;
use App\Http\Controllers\Api\SubmitResultController;
use App\Http\Controllers\Api\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);

Route::group (['middleware' => ['auth:sanctum']], function(){
    Route::get('/videos', [VideoController::class,'index']);
    Route::get('/videos/{id}', [VideoController::class,'show']);
    Route::get('/exams', [ExamController::class,'index']);
    Route::get('/exams/{id}', [ExamController::class,'show']);
    Route::post('/results', SubmitResultController::class);
    Route::post('/student-details', [StudentDetailsController::class, 'store'])->middleware('student');
    Route::get('/student-profile', [StudentProfileController::class, 'index']);
});

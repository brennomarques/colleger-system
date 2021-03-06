<?php
use App\Http\Controllers\Api\{PlanController, StudentController, TeacherController,CourseController, LessonController};
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('/curso', CourseController::class)->only(['index', 'show'])->middleware('auth.basic');
Route::resource('/aula', LessonController::class)->only(['index', 'show'])->middleware('auth.basic');
Route::resource('/professor', TeacherController::class)->only(['index', 'show'])->middleware('auth.basic');
Route::resource('/aluno', StudentController::class)->only(['index', 'show'])->middleware('auth.basic');
Route::resource('/plano', PlanController::class)->only(['index', 'show'])->middleware('auth.basic');

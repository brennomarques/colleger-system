<?php

use App\Http\Controllers\{AuthController, Feedback, PlanController, StudentController, TeacherController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('dashboard', 'dashboard/dashboard')->middleware('validatePermission')->name('dashboard');;
// Route::get('/dashboard', [DashboardController::class, 'generalSearch'])->name('dashboard');
Route::redirect('/', 'dashboard', 301);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/acesso', [Feedback::class, 'accessPermission'])->name('accessPermission');

Route::middleware('validatePermission')->group(function() {
    Route::get('/professor', [TeacherController::class, 'list'])->name('listTeacher');
    Route::get('/professor/criar', [TeacherController::class, 'newTeacher'])->name('newTeacher');
    Route::post('/professor', [TeacherController::class, 'createTeacher'])->name('createTeacher');
    Route::get('/professor/editar/{id}', [TeacherController::class, 'editTeacher'])->name('editTeacher');
    Route::put('/professor/{id}', [TeacherController::class, 'updateTeacher'])->name('updateTeacher');
    Route::get('/professor/{id}', [TeacherController::class, 'searchTeacher'])->name('searchTeacher');
    Route::delete('/professor/{id}', [TeacherController::class, 'deleteTeacher'])->name('deleteTeacher');

    Route::get('/aluno', [StudentController::class, 'list'])->name('listStudent');
    Route::get('/aluno/criar', [StudentController::class, 'newStudent'])->name('newStudent');
    Route::post('/aluno', [StudentController::class, 'createStudent'])->name('createStudent');
    Route::get('/aluno/editar/{id}', [StudentController::class, 'editStudent'])->name('editStudent');
    Route::put('/aluno/{id}', [StudentController::class, 'updateStudent'])->name('updateStudent');
    Route::get('/aluno/{id}', [StudentController::class, 'searchStudent'])->name('searchStudent');
    Route::delete('/aluno/{id}', [StudentController::class, 'deleteStudent'])->name('deleteStudent');

    Route::get('/plano', [PlanController::class, 'listPlan'])->name('listPlan');
    Route::get('/plano/criar', [PlanController::class, 'newPlan'])->name('newPlan');
    Route::get('/plano/{id}', [PlanController::class, 'searchPlan'])->name('searchPlan');
    Route::post('/plano', [PlanController::class, 'createPlan'])->name('createPlan');
    Route::put('/plano/{id}', [PlanController::class, 'updatePlan'])->name('updatePlan');
    Route::get('/plano/editar/{id}', [PlanController::class, 'editPlan'])->name('editPlan');
    Route::delete('/plano/{id}', [PlanController::class, 'deletePlan'])->name('deletePlan');

});



<?php

use App\Http\Controllers\{AuthController, Feedback, TeacherController};
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

});


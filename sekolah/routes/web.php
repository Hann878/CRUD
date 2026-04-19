<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
Route::get('/student/check', [StudentController::class, 'checkObjectId']);
Route::get('/student/insert', [StudentController::class, 'insert']);
Route::get('/student/massAssignment', [StudentController::class, 'massAssignment']);
Route::get('/student/massAssigment/subject', [StudentController::class, 'massAssigment']);

Route::get('/student/update/{studentId?}', [App\Http\Controllers\StudentController::class, 'update']);
Route::get('/student/massUpdate/{studentId?}', [App\Http\Controllers\StudentController::class, 'massUpdate']);
Route::get('/student/delete/{studentId?}', [App\Http\Controllers\StudentController::class, 'delete']);
Route::get('/student/massdelete/{studentId?}', [App\Http\Controllers\StudentController::class, 'massdelete']);
Route::get('/student/all', [App\Http\Controllers\StudentController::class, 'all']);

Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');



Route::get('/subjects', [App\Http\Controllers\SubjectController::class, 'index'])->name('subjects.index');
Route::get('/subjects/create', [App\Http\Controllers\SubjectController::class, 'create'])->name('subjects.create');
Route::post('/subjects/store', [App\Http\Controllers\SubjectController::class, 'store'])->name('subjects.store');
Route::get('/subjects/{id}/edit', [App\Http\Controllers\SubjectController::class, 'edit'])->name('subjects.edit');
Route::put('/subjects/{id}', [App\Http\Controllers\SubjectController::class, 'update'])->name('subjects.update');
Route::delete('/subjects/destroy/{id}', [App\Http\Controllers\SubjectController::class, 'destroy'])->name('subjects.destroy');



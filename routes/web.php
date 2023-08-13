<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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




Route::get('/',[HomeController::class,'index']); 

Route::prefix('/student')->group (function(){
    Route::get('/',[StudentController::class,'index'])->name('student');  
    Route::get('/list',[StudentController::class,'list'])->name('student.list'); 
    Route::get('/{id}/show',[StudentController::class,'show'])->name('student.show'); //edit modal show
    Route::post('/save',[StudentController::class,'save'])->name('student.save'); 
    Route::get('/{id}/done',[StudentController::class,'done'])->name('student.done'); 
    Route::delete('/{id}/delete', [StudentController::class, 'delete'])->name('student.delete');
    Route::get('/{id}/update',[StudentController::class,'update'])->name('student.update'); 
    Route::post('/students/upload-image', [StudentController::class,'uploadImage'])->name('student.uploadImage');


});

require __DIR__.'/auth.php';



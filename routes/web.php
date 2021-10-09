<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\StudentClassController;
use App\Http\Controllers\Backend\Setup\StudentYearController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

// Admin controllers
Route::get('/admin/logout',[AdminController::class,'Logout'])->name('admin.logout');



// User management routes
// Group routes
Route::prefix('users')->group(function(){
    Route::get('/view',[UserController::class,'UserView'])->name('user.view');
    Route::get('/add',[UserController::class,'UserAdd'])->name('user.add');
    Route::post('/store',[UserController::class,'UserStore'])->name('users.store');
    Route::get('/edit/{id}',[UserController::class,'UserEdit'])->name('users.edit');
    Route::post('/update/{id}',[UserController::class,'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class,'UserDelete'])->name('users.delete');
});

// User profile and passwords

Route::prefix('profiles')->group(function(){
    Route::get('/view',[ProfileController::class,'ProfileView'])->name('profile.view');
    Route::get('/edit',[ProfileController::class,'ProfileEdit'])->name('profile.edit');
    Route::post('/store',[ProfileController::class,'ProfileStore'])->name('profile.store');
    Route::get('/password/view',[ProfileController::class,'PassView'])->name('password.view');
    Route::post('/password/update',[ProfileController::class,'PassUpdate'])->name('password.update');


});



// Setup management
// Student classes routes
Route::prefix('setups')->group(function(){
    Route::get('/student/class/view',[StudentClassController::class,'ViewStudent'])->name('student.class.view');
    Route::get('/student/class/add',[StudentClassController::class,'AddStudentClass'])->name('student.class.add');
    Route::post('/student/class/store',[StudentClassController::class,'StoreStudentClass'])->name('store.student.class');
    Route::get('/student/class/edit/{id}',[StudentClassController::class,'EditStudentClass'])->name('student.class.edit');
    Route::get('/student/class/delete/{id}',[StudentClassController::class,'DeleteStudentClass'])->name('student.class.delete');
    Route::post('/student/class/update/{id}',[StudentClassController::class,'UpdateStudentClass'])->name('update.student.class');

});



// Student year routes
Route::get('/student/year/view', [StudentYearController::class,'ViewYear'])->name('student.year.view');
Route::get('/student/year/add', [StudentYearController::class,'AddYear'])->name('student.year.add');
Route::post('/student/year/store',[StudentYearController::class,'StoreStudentYear'])->name('store.student.year');
Route::get('/student/year/edit/{id}', [StudentYearController::class,'EditYear'])->name('student.year.edit');
Route::post('/student/year/update/{id}',[StudentYearController::class,'UpdateStudentYear'])->name('update.student.year');

Route::get('/student/year/delete/{id}', [StudentYearController::class,'DeleteYear'])->name('student.year.delete');







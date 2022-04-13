<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

Route::get('/addstudent',[adminController::class,'addStudent'])->name('admin.addStudent');
Route::post('/addstudent/store',[adminController::class,'storeData'])->name('admin.addStudent.store');
Route::get('/addstudent/show',[adminController::class,'showUser'])->name('admin.addStudent.show');
Route::get('/addstudent/destroy/{id}',[adminController::class,'destroy'])->name('admin.addStudent.destroy');
Route::get('/addstudent/edit/{id}',[adminController::class,'edit'])->name('admin.addStudent.edit');
Route::post('/addstudent/update/{id}',[adminController::class,'update'])->name('admin.addStudent.update');


//suspended Users
Route::get('/suspend/{id}',[adminController::class,'suspend'])->name('admin.suspend');
Route::get('/suspended/member',[adminController::class,'suspended'])->name('admin.suspended.member');

// divded according to their role

Route::get('admin/teacher',[adminController::class,'teacherRole'])->name('admin.teacherRole');
Route::get('admin/principal',[adminController::class,'principalRole'])->name('admin.principalRole');
Route::get('admin/student',[adminController::class,'studentRole'])->name('admin.studentRole');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Studentcontroller;
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
    return view('home');
});
// Route::get('/',[studentcontroller::class,'index'] );
Route::get('/student',[studentcontroller::class,'form'] );
Route::get('/student/view',[studentcontroller::class,'view'] )->name('view');
Route::post('/student',[studentcontroller::class,'table'] );
Route::get('/student/delete/{id}',[studentcontroller::class,'delete'])->name('delete_data');
Route::get('/student/edit/{id}',[studentcontroller::class,'edit'])->name('edit_data');
Route::post('/student/update/{id}',[studentcontroller::class,'update'])->name('update_data');

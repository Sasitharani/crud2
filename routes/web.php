<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create somethng great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/view',[EmployeesController::class, 'view'])->name('view');
Route::get('/add',[EmployeesController::class, 'addToDb'])->name('adds');
Route::post('/add',[EmployeesController::class, 'addToDb'])->name('adds');
Route::get('/add',[EmployeesController::class, 'add'])->name('edit');
Route::get('/add/{id}',[EmployeesController::class, 'destroy'])->name('delete');
Route::post('/employee/update/{id}', [EmployeesController::class, 'update'])->name('update');



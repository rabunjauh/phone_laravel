<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ExtensionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

Route::get('/assign/', [AssignController::class, 'index'])->middleware('auth');
Route::get('/extension', [ExtensionController::class, 'index'])->middleware('auth');
Route::get('/employee', [EmployeeController::class, 'index'])->middleware('auth');
// Route::get('/department', [DepartmentController::class, 'index'])->middleware('auth');
Route::get('/position', [PositionController::class, 'index'])->middleware('auth');
Route::get('/office', [OfficeController::class, 'index'])->middleware('auth');
Route::get('/group', [GroupController::class, 'index'])->middleware('auth');
Route::get('/user', [UserController::class, 'index'])->middleware('auth');
Route::get('/addUser', [UserController::class, 'create'])->middleware('auth');
Route::post('/addUser', [UserController::class, 'store'])->middleware('auth');
// Route::get('/', [LoginController::class, 'index'])->middleware('guest')->name('home');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Route::resource('/assign', AssignController::class)->middleware('auth');
Route::middleware('guest')->group(function() {
  // note name hrs di setting di App\Http\Middleware\Authenticate\retur route('home')
  Route::get('/', [AssignController::class, 'index'])->name('home');
});
Route::resource('/department', DepartmentController::class)->except('show')->middleware('auth');
Route::resource('/employee', EmployeeController::class)->except('show')->middleware('auth');


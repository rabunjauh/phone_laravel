<?php

use App\Http\Controllers\AssignController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;

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

Route::get('/', function () {
  $data = [
    [
      "name" => "Name 1",
      "position" => "Postion",
      "extension" => "123"
    ],
    [
    "name" => "Name 1",
    "position" => "Postion",
    "extension" => "123"
  ],
];
	return view('extension', [
    "title" => "Extension",
    "phone_extensions" => $data

  ]);
});

Route::get('/user', function() {
  return view('user');
});

Route::get('/department', [DepartmentController::class, 'index']);

Route::get('/assign', [AssignController::class, 'index']);

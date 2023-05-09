<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserLoginController;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Class_;

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
    return view('welcome');
});

Route::resource('users', 'EmployeeController');

Route::get('user/{id}',function (int $id){
    return $id;
})->where('id', '[0-9]');

Route::post('login', [AuthController::class, 'customLogin']); 
Route::post('register', [AuthController::class,'register']);




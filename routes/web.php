<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth.user'], function () {

    Route::get('/', function () {
        return view('employee');
    });
    Route::post('employee-add', [EmployeeController::class, 'employee_add']);
    Route::get('employee-view', [EmployeeController::class, 'employee_view']);
    Route::get('employee-delete', [EmployeeController::class, 'employee_delete']);
    Route::post('employee-edit', [EmployeeController::class, 'employee_edit']);
    Route::get('employee-list', [EmployeeController::class, 'employee_list']);
});


Route::get('/login', [AuthController::class, 'viewLogin']);
Route::post('/login-emp', [AuthController::class, 'Authlogin']);

Route::post('/register-emp', [AuthController::class, 'Authregister']);
Route::get('/register', [AuthController::class, 'viewRegister']);

Route::get('lang/home', [AuthController::class, 'index']);
Route::get('lang/change', [AuthController::class, 'change'])->name('changeLang');



<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/myDashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function() {
    Route::get('/login',[App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Auth\AdminLoginController::class,'login'])->name('admin.login.submit');
    Route::get('logout/',  [App\Http\Controllers\Auth\AdminLoginController::class,'logout'])->name('admin.logout');
    Route::get('/', [App\Http\Controllers\Auth\AdminController::class,'index'])->name('admin.dashboard');
}) ;

const PAGINATION_COUNT = 3;
Route::get('/main',[App\Http\Controllers\EmployeesController::class, 'getMain'])->name('main');
Route::get('/main2',[App\Http\Controllers\EmployeesController::class, 'getMain2'])->name('main2');

Route::post('/search',[App\Http\Controllers\EmployeesController::class, 'search'])->name('employee.search');
Route::post('/search2',[App\Http\Controllers\EmployeesController::class, 'search2'])->name('employee.search2');

Route::group(['prefix'=> 'employee'],function () {
    Route::get('/add',[App\Http\Controllers\EmployeesController::class, 'add'])->name('employee.add');
    Route::post('/store',[App\Http\Controllers\EmployeesController::class, 'store'])->name('employee.store');
    Route::get('/show',[App\Http\Controllers\EmployeesController::class, 'showAllEmployees'])->name('employee.show');
    Route::get('/edit/{employee_id}',[App\Http\Controllers\EmployeesController::class, 'editEmployee'])->name('employee.edit');
    Route::post('/update/{employee_id}',[App\Http\Controllers\EmployeesController::class, 'updateEmployee'])->name('employee.update');
    Route::get('/delete/{employee_id}',[App\Http\Controllers\EmployeesController::class, 'deleteEmployee'])->name('employee.delete');

});

Route::get('/show-departments',[App\Http\Controllers\EmployeesController::class, 'showDepartments'])->name('department.show');
Route::get('show-employees/{employee_id}',[App\Http\Controllers\EmployeesController::class,'showEmployees'])->name('department.employees');

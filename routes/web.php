<?php
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
Route::resource('users', UserController::class)->middleware(['auth', 'verified']);

Route::get('/employee', [EmployeeController::class, 'index'])->middleware(['auth', 'verified'])->name("employee");
Route::get('/employee/create', [EmployeeController::class, 'create'])->middleware(['auth', 'verified'])->name("create.employee");
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->middleware(['auth', 'verified'])->name("edit.employee");
Route::get('/employee/{id}', [EmployeeController::class, 'show'])->middleware(['auth', 'verified'])->name("detail.employee");

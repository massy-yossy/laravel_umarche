<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\ComponentTestController;

=======
>>>>>>> f49a3dafe2178f18ef1cbe3892e504046dca75a6

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
})->middleware(['auth'])->name('dashboard');

<<<<<<< HEAD
Route::get('/component-test1', [ComponentTestController::class, 'show1']);
Route::get('/component-test2', [ComponentTestController::class, 'show2']);

=======
>>>>>>> f49a3dafe2178f18ef1cbe3892e504046dca75a6
require __DIR__.'/auth.php';

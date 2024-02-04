<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyblogController as MyController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MyController::class, 'index'])->name('index');

Route::get('/create', [MyController::class, 'create'])->name('create');

Route::get('/aboutus', [MyController::class, 'aboutus'])->name('aboutus');

Route::get('/contactus', [MyController::class, 'contactus'])->name('contactus');

Route::post('/index', [MyController::class, 'store'])->name('store');

<?php

use App\Http\Controllers\MahasiswaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [MahasiswaController::class, 'index'])->name('index');
Route::get('/create', [MahasiswaController::class, 'create'])->name('create');
Route::post('/created', [MahasiswaController::class, 'created'])->name('created');
Route::get('/{nim}/edit', [MahasiswaController::class, 'edit'])->name('edit');
Route::post('/edit', [MahasiswaController::class, 'update'])->name('update');
Route::get('/{nim}/delete', [MahasiswaController::class, 'delete'])->name('delete');
Route::get('/aboutme',[MahasiswaController::class, 'aboutme'])->name('aboutme');

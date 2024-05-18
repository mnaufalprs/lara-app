<?php

use App\Models\Data_wbtest;
use App\Models\Data_livetest;
use App\Http\Livewire\ChartLivetest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChartRtsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InputWbtestController;
use App\Http\Controllers\DataLivetestController;
use App\Http\Controllers\DataLoadtestController;
use App\Http\Controllers\DataWbtestController;
use App\Http\Controllers\InputLivetestController;
use App\Http\Controllers\InputLoadtestController;

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

// Route::get('/', [LoginController::class, 'index']);

// Route::get('/dashboard', [Data_wbtestControler::class, 'index'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/myProfile', function () {
    return view('myProfile', [
        "title" => "Profile",
        "name" => "Muhammad Naufal Prasetio",
        "work" => "Mahasiswa",
        "email" => "muhammad.naufal.tkom21@polban.ac.id",
        "image" => "Naufal.jpg"
    ]);
})->middleware('auth');

// Route::get('/webTest', function () {
//     return view('webTest', [
//         "title" => "Web Testing"
//     ]);
// })->middleware('auth');
Route::get('/webTest', [InputWbtestController::class, 'index'])->middleware('auth');
Route::post('/webTest', [InputWbtestController::class, 'create']);

Route::get('/webAnalytic', [DataWbtestController::class, 'index'])->name('webAnalytic.index')->middleware('auth');
// Route::resource('/webAnalytic', DataWbtestController::class)->middleware('auth');
Route::delete('/webAnalytic/{webAnalytic}', [DataWbtestController::class, 'destroy'])->name('webAnalytic.destroy')->middleware('auth');
// Route::post('/webAnalytic', [Data_wbtestControler::class, 'create']);

// Route::get('/pingTest', function () {
//     return view('pingTest', [
//         "title" => "Pingtest Testing"
//     ]);
// })->middleware('auth');
Route::get('/loadTest', [InputLoadtestController::class, 'index'])->middleware('auth');
Route::post('/loadTest', [InputLoadtestController::class, 'create']);

Route::get('/loadAnalytic', [DataLoadtestController::class, 'index'])->middleware('auth');
// Route::post('/loadAnalytic', [DataLoadtestController::class, 'destroy']);
Route::delete('/loadAnalytic', [DataLoadtestController::class, 'destroy'])->name('loadAnalytic.destroy');
// Route::resource('/loadAnalytic', DataLoadtestController::class)->middleware('auth');

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/realtimeAnalytic', [DataLivetestController::class, 'index'])->middleware('auth');
// Route::get('/realtimeAnalytic', ChartLivetest::class)->middleware('auth');

Route::get('/realtimeTest', [InputLivetestController::class, 'index'])->middleware('auth');
Route::post('/realtimeTest', [InputLivetestController::class, 'create']);


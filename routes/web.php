<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\FilesController;

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

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/', [PlayersController::class, 'index']);
    Route::post('/addplayer', [PlayersController::class, 'addplayer'])->name('addplayer');
    Route::get('/addplayer', [PlayersController::class, 'addplayer'])->name('addplayer');
    Route::get('/editplayer/{players}', [PlayersController::class, 'editplayer'])->name('editplayer');
    Route::post('/editplayer/{players}', [PlayersController::class, 'editplayer'])->name('editplayer');
    Route::get('/destroy/{players}', [PlayersController::class, 'destroy'])->name('destroy');
    Route::get('/stats/{player_id?}', [StatsController::class, 'index']);
    Route::post('/addstats/{player_id?}', [StatsController::class, 'addstats'])->name('addstats');
    Route::get('/addstats/{player_id?}', [StatsController::class, 'addstats'])->name('addstats');
    Route::get('/editstats/{stats?}', [StatsController::class, 'editstats'])->name('editstats');
    Route::post('/editstats/{stats?}', [StatsController::class, 'editstats'])->name('editstats');
    Route::get('/destroy/{stats?}', [StatsController::class, 'destroy'])->name('destroy');
    Route::get('/download', [FilesController::class, 'download'])->name('files.download');
    Route::post('/upload', [FilesController::class, 'upload'])->name('files.upload');
    Route::get('/upload', [FilesController::class, 'upload'])->name('files.upload');
});

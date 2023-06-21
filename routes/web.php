<?php

use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Admin\PlayerController;
use App\Http\Controllers\Admin\StandingController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\GameController as GameFrontController;
use App\Http\Controllers\PlayerController as PlayerFrontController;
use App\Http\Controllers\StandingController as StandingFrontController;

use Illuminate\Support\Facades\App;
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
    return redirect()->route('games');
});

Route::get('games', [GameFrontController::class, 'index'])->name('games');
Route::get('players', [PlayerFrontController::class, 'index'])->name('players');
Route::get('standings', [StandingFrontController::class, 'index'])->name('standings');

Route::group(['middleware' => ['auth','isAdmin'],'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('permissions', PermissionController::class);
    Route::delete('permissions_mass_destroy', [PermissionController::class, 'massDestroy'])->name('permissions.mass_destroy');
    Route::resource('roles', RoleController::class);
    Route::delete('roles_mass_destroy', [RoleController::class, 'massDestroy'])->name('roles.mass_destroy');
    Route::resource('users', UserController::class);
    Route::delete('users_mass_destroy', [UserController::class, 'massDestroy'])->name('users.mass_destroy');

    // team
    Route::resource('teams', TeamController::class);
    Route::delete('teams_mass_destroy', [TeamController::class, 'massDestroy'])->name('teams.mass_destroy');

    // team
    Route::resource('players', PlayerController::class);
    Route::delete('players_mass_destroy', [PlayerController::class, 'massDestroy'])->name('players.mass_destroy');
    
    // team
    Route::resource('games', GameController::class);
    Route::delete('games_mass_destroy', [GameController::class, 'massDestroy'])->name('games.mass_destroy');
});

Auth::routes(['register' => false]);


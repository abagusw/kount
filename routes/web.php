<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoalsController;
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

Route::name('login')->get('/login', [LoginController::class, 'index']);
Route::name('logout')->get('/logout', [LoginController::class, 'logout']);
Route::name('dologin')->post('/login/dologin', [LoginController::class, 'doLogin']);

// Route::group(['middleware' => ['auth', 'acl:web']], function () {
    //home
    Route::get('/', [HomeController::class, 'index'])->name('dash.home');

    //goals
    Route::get('/goals', [GoalsController::class, 'index'])->name('dash.goals');
    Route::post('/goal/add', [GoalsController::class, 'save'])->name('goal.add');
    Route::post('/goal/update', [GoalsController::class, 'update'])->name('goal.update');
// });
Route::get('/projects', function () {
    return view('projects.index');
})->name('dash.projects');

Route::get('/projects/detail', function () {
    return view('projects.detail');
})->name('dash.projects.detail');

Route::get('/leave', function () {
    return view('leave.index');
})->name('dash.leave');

Route::get('/teams', function () {
    return view('teams.index');
})->name('dash.teams');

Route::get('/payslip', function () {
    return view('payslip.index');
})->name('dash.payslip');

Route::get('/payslip/content', function () {
    return view('payslip.content');
})->name('dash.payslip.content');

Route::get('/settings', function () {
    return view('settings.index');
})->name('dash.settings');

Route::get('/notifications', function () {
    return view('notifications.index');
})->name('dash.notifications');

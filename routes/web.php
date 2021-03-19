<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\MovieController;

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
    return view('index');
});

Route::get('/login-user', function () {
    return view('login-user');
});

Route::get('/register', function () {
    return view('register');
});




Route::get('/', [MovieController::class, 'movieCarousel']);

Route::get('/movie-info', function () {
    return view('movie-info');
});

//Storage to the DB
Route::post('/save', [mainController::class, 'save'])->name('save');
//Check in the DB
Route::post('/check', [mainController::class, 'check'])->name('check');

//General session breaker..
Route::get('logout', [mainController::class, 'logout'])->name('logout');

//AuthCheck controller..
Route::group(['middleware' => ['authCheck']], function () {

    //Here should we add all files to force the user to be logged in.
    //Remeber to update authCheck middleware (only the pages located here)!!
    Route::get('/login',    [mainController::class, 'login'])->name('login');
    Route::get('/register', [mainController::class, 'register'])->name('register');

    //User Panel
    Route::get('/user',     [mainController::class, 'profile']);
    Route::get('/user/settings',    [mainController::class, 'settings']);
    Route::get('/user/mywatchs',    [mainController::class, 'mywatchs']);
    Route::get('/user/myratings',   [mainController::class, 'myratings']);
    Route::get('/user/mymovies',    [mainController::class, 'mymovies']);
    //More user pages to add...

});

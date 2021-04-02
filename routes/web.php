<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

use App\Http\Controllers\mainController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\UserController;
use App\http\Controllers\GenreController;
use App\http\Controllers\RatingController;
use App\http\Controllers\ReviewController;

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

Route::get('/movies', function () {
    return view('movies');
});

// ------ search -----
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/searchfail', [SearchController::class, 'search'])->name('searchfail');

// ------ search result of search -----
Route::get('/result', function () {
    return view('result');
});

Route::get('/', [MovieController::class, 'movieCarousel']);

//Movies information
Route::get('/movie/{id}', [MovieController::class, 'getInfo'])->name('movie');
Route::post('/movie/{id}', [mainController::class, 'store']);
//Each Genre Information

Route::get('/genre/{id}', [GenreController::class, 'genre']);
Route::get('/genre-list', [GenreController::class, 'genreList']);

Route::get('/register', function () {
    return view('register');
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
    Route::get('/login', function() {
        return view('login');
    })->name('login');

    Route::get('/register', function() {
        return view('register');
    })->name('register');

    // Watchlist
    Route::get('/watchlist', [WatchlistController::class, 'show']);
    Route::post('/watchlist/{id}', [WatchlistController::class, 'store']);
    Route::delete('/watchlist/{id}', [WatchlistController::class, 'destroy']);

    // Rating
    Route::post('/{id}/rating', [RatingController::class, 'store'])->name('rating');

    // Review
    Route::post('review/{id}', [ReviewController::class, 'store']);
});

Route::get('/', function () {
    return view('imdb');
});

<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> parent of 150967e (undo merge 23/2)
=======
>>>>>>> parent of 82420ac (undid merge from 22/2)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/movies', [MovieController::class, 'index']);

Route::get('movie', 'MovieController@movies')->name('movies');

Route::post('movie', 'MovieController@movieMovie')->name('movies.movie');

Route::get('movie/{id}', 'MovieController@show')->name('movies.show');

Auth::routes();



<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
Route::get('/', function () {
    return view('imdb');
});
>>>>>>> parent of 4b91d67 (Route added to navigation)
>>>>>>> parent of 150967e (undo merge 23/2)
=======
>>>>>>> parent of 82420ac (undid merge from 22/2)

<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('movie', 'MovieCrudController');
    Route::crud('watchlist', 'WatchlistCrudController');
    Route::crud('watchlistitem', 'WatchlistitemCrudController');
    Route::crud('genre', 'GenreCrudController');
    Route::crud('genreitem', 'GenreitemCrudController');
    Route::crud('review', 'ReviewCrudController');
    Route::crud('rating', 'RatingCrudController');
}); // this should be the absolute last line of this file
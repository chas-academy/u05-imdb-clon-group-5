<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show() {
        $movies = User::all()->watchlist()-get();
        dd($movies);
    }
}

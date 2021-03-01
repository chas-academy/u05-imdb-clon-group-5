<!DOCTYPE html>
<html lang="en">
    	<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Register</title>
            {{-- <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">         --}}
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <h4>Register - Custom</h4>
                        <form action="{{ route('save') }}" method="post">

                        @if (Session::get('success'))
                            <div class="alert alert-success">
                            {{ Session::get('success') }}

                        @endif

                        @if (Session::get('fail'))
                            <div class="alert alert-success">
                            {{ Session::get('fail') }}

                        @endif

                        @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Your Name">
                            </div>
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Your Email">
                            </div>
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="password" class="form-control" name="password" placeholder="******">
                            </div>
                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                            <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                            <br>
                            <a href="{{ route('login') }}">I already have an account, log In</a>
                        </form>
                    </div>
                </div>
            </div>
        </body>

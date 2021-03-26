<!DOCTYPE html>
<html lang="en">
    	<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Profile</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            {{-- <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">         --}}
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-3">
                        <h4>User - Profile</h4>
                        <table class="table table-hover">
                            <thead>
                                <th>Name:</th>
                                <th>Email:</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $LoggedUserInfo['name'] }}</td>
                                    <td>{{ $LoggedUserInfo['email'] }}</td>
                                    <td><a href="{{ route('logout') }}">Log Out</a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </body>
</html>

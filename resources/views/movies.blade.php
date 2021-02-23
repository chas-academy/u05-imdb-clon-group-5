@extends('layouts.app')



@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="panel-heading">Movie</div>



                <div class="panel-body">



                    <table class="table table-bordered">

                        <tr>

                            <th>Id</th>

                            <th>Title</th>

                            <th width="400px">Star</th>

                            <th width="100px">View</th>

                        </tr>

                        @if($movies->count())

                            @foreach($movies as $movie)

                            <tr>

                                <td>{{ $movie->id }}</td>

                                <td>{{ $movie->title }}</td>

                                <td>

                                    <input id="input-1" title="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $movie->rating }}" data-size="xs" >

                                </td>

                                <td>

                                    <a href="{{ route('movies.show',$movie->id) }}" class="btn btn-primary btn-sm">View</a>

                                </td>

                            </tr>

                            @endforeach

                        @endif

                    </table>



                </div>

            </div>

        </div>

    </div>

</div>



<script type="text/javascript">

    $("#input-id").rating();

</script>

@endsection
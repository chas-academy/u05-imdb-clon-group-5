@extends('layouts.app')



@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-default">



                <div class="panel-body">

                    <form action="{{ route('movies.movie') }}" method="POST">

                        {{ csrf_field() }}

                    <div class="card">

                        <div class="container-fliud">

                            <div class="wrapper row">

                                <div class="preview col-md-6">

                                    

                                    <div class="preview-pic tab-content">

                                      <div class="tab-pane active" id="pic-1"><img src="https://m.media-amazon.com/images/M/MV5BNTVkODdiMjAtNmQ5Yy00OThhLTg4MDItYTZlYTFmN2E0M2M1XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg" /></div>

                                    </div>



                                </div>

                                <div class="details col-md-6">

                                    <h3 class="movie-title">Boss Level</h3>

                                    <div class="rating">


                                        <span class="review-no">22 reviews</span>

                                        <br/>

                                        <button class="btn btn-success">Submit Review</button>

                                    </div>

                                    <p><strong>Director:</strong> Joe Carnahan
                                    <p><strong>Writer:</strong> Chris Borey
                                    <p><strong>Genre:</strong> Action
                                    <p class="movie-description"><strong>Description:</strong> Stuck in a time loop, doomed to repeat the same day over and over again while being hunted by dozens of deadly assassins, a man struggles to find a way out of his strange predicament.</p>

                                    

                                    <p class="vote"><strong>91%</strong> of viewers enjoyed this movie! <strong>(87 votes)</strong></p>

                                 

                                    <div class="action">

                                        <button class="add-to-watchlist btn btn-default" type="button">Add To Watchlist</button>

                                        <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    </form>



                </div>

            </div>

        </div>

    </div>

</div>



<script type="text/javascript">

    $("#input-id").rating();

</script>

@endsection
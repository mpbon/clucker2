@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 side-nav">
            <nav class="nav flex-column left-bar">
                </br>
                </br>
                </br>
                <a class="nav-link active" href="#top"><img class="small-icon roost" src="{{url('/images/main-logo.png')}}" alt="Clucker logo"/>Top</a>
                <a class="nav-link active" href="#!"><img class="small-icon" src="{{url('/images/coop.png')}}" alt="Chicken coop"/>&nbsp &nbsp Home</a>
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img class="small-icon" src="{{url('/images/roast.png')}}" alt="Chicken coop"/>&nbsp &nbsp {{ __('Logout') }}</a>
            </nav>
        </div>
    </div>
</div>

<div id="top" class="container-fluid">
    <div class="row justify-content-center">
        <div class="row justify-content-center align-items-center tweet-area-total">
            <div class="col-md justify-content-center align-items-center">
                <div class="top-of-feed">
                    <h1>Home</h1>
                </div>

                <div class="tweet-area">
                <form action="/tweets" method="post">
                    @csrf
                    <input class='form-control' placeholder="Chicken-scratch here" type='text' name="tweet" size="45">
                    <button type="submit" class="btn btn-primary cluck-it-btn ">Cluck it!</button>
                </form>
                </div>

            <div class="tweet-feed">
                <div class="row justify-content-center align-items-center tweet-feed">
                <img class="main-logo" src="{{url('/images/chicken-feed.png')}}" alt="Chicken eating"/><h2>Your chicken feed:</h2>
                </div>
            </br>


                @foreach($tweets as $tweet)
                <div class="username">
                    <p>{{$tweet->user_id}} clucked:</p>
                </div>

                   {{$tweet->tweet}}</br>
                   <a href="/delete-tweet/{{ $tweet->id }}"><img class="small-icon" src="{{url('/images/chop.png')}}" alt="Chicken head being chopped off"/></a><br>
                   {{ date('g:i A, F d, Y', strtotime($tweet->created_at)) }}
                   <br>
                   <a href="/user/{user_id}/follow">Follow</a> | <a href="/{user_Id}/unfollow">Unfollow</a>

                   <br>
                   <br>

                       <form action="/comments" method="post" class="input-group input-group-sm">
                           @csrf
                           <input type="hidden" name="tweet_id" value="{{ $tweet->id }}">
                           <input class="form-control" placeholder="Comment here" type='text' name="comment"><br>
                           <div class="input-group-append">
                           <button type="submit" class="btn btn-primary">Cluck</button>
                        </div>
                       </form>
                   </br>
                        @foreach($tweet->comment as $comment)
                            <p class="comment">{{$comment->user_id}} commented: </br><span>&nbsp &nbsp &nbsp &nbsp{{ $comment->comment }}</span></br>
                                {{ date('g:i A, F d, Y', strtotime($comment->created_at)) }}
                            </br>
                                <a href="/delete-comment/{{ $comment->id }}"><img class="small-icon" src="{{url('/images/chop.png')}}" alt="Chicken head being chopped off"/></a> |
                                <a href="/update-comment/{{ $comment->id }}">Edit</a>

                            </p>
                        @endforeach



                  @endforeach

            </div>

            <div id="user-list">

            </div>


        </div>

    </div>




    </div>

</div>

@section('scripts')
<script type="text/javascript" src="/js/followers-populate.js"></script>

@endsection

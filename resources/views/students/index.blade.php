@extends('main.layoutWithSideBar')
@section('title')
    Students | Home
@stop

@section('content')

    @include('flash::message')

    <div class="row">

        @if(Auth::user()->status == 3)

            <div class="forwardBox">
                <i class="fa fa-arrow-circle-o-right"></i>
                <a href="/students/{{$registeredStudent->id}}"> Student Account </a>
            </div>

        @endif

        <div class="col-md-12 col-sm-12">


            <hr>

            <div class="tabs-left">
                <ul class="nav nav-tabs">

                    <li class="active">
                        <a href="#All" data-toggle="tab">
                            <i class="fa fa-bars"></i>
                            All Posts</a>
                    </li>

                    <li>
                        <a href="#f" data-toggle="tab">
                            <i class="fa fa-thumbs-o-up"></i>
                            Favourites </a>
                    </li>


                </ul>

                <div class="tab-content">

                    <div class="tab-pane active" id="All">
                        <p> Hang on {{$registeredStudent->firstName}}, some sweet articles, posts, and guides are on their way
                            -- all to make your university/college application-process easier. Stay tuned!
                        </p>
                    </div>

                    <div class="tab-pane" id="f">
                        <h3>Favourites</h3>
                        <hr>
                        You have no favourites yet.
                    </div>


                </div><!-- /tab-content -->
            </div><!-- /tabs left -->
        </div><!-- /col -->

    </div>



@endsection
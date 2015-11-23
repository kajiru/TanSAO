@extends('main.layoutWithSideBar')
@section('title')
    University Visits
@stop()

@section('content')

    <h2> <ol class="breadcrumb">
            <li><a href="#">Visits</a></li>
            <li class="active">University</li>
        </ol>
    </h2>

    {{--@foreach($visits as $visit)--}}
        {{--<div class="well well-sm">--}}
            {{--<embed src="/images/visits/2015/{{$visit->bannerName}}" height="1000px" width="100%">--}}
        {{--</div>--}}
        {{--<hr>--}}
    {{--@endforeach--}}

    <div class="well well-sm">
    <embed src="/images/visits/2015/havard_mit.pdf" height="1000px" width="100%">
    </div>
    <hr>

    <div class="well well-sm">
        <embed src="/images/visits/2015/uk_universities.pdf" height="1000px" width="100%">
    </div>

@endsection
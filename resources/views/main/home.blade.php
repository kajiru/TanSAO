@extends('main.layout')

@section('title')
    Welcome | TanSAO
@stop

@section('css')
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
@stop

@section('content')
        @include('flash::message')
        @include('main._homeContent')
@endsection

@section('scripts')

    <!-- the jScrollPane script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/home-plugins.js"></script>

    <!-- Content Carousel-->
    <script >
        $('#ca-container').contentcarousel();
    </script>

@endsection




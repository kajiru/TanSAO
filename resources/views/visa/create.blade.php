@extends('main.layout')
@section('title')
    Visa | Start Visa App.
@stop


@section('content')

    <h2 class="page-header"> Visa Application </h2>

    <p class="lead">
        TanSAO assists students and non-students in applying for different types of Visas.
        Please submit the following details and our office will contact
        you as soon as possible.
    </p>

    @if($errors->any())

        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    @include('visa._applicationForm')

@endsection





@extends('admin.layout')
@section('title')
    Student - Registration
@stop

@section('content')
    <h2>New Student Registration</h2>
    <hr>
   @include('students._studentRegistrationForm')
@endsection
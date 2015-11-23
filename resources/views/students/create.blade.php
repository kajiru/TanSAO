@extends('main.layout')
@section('title')
    Student - Registration
@stop

@section('content')
    {{--<p class="lead text-center bg-danger"> We are currently Modifying the Registration System. Please Visit back soon.</p>--}}
 {{--<h2>Register as a TanSAO Student</h2>--}}
     <p>
         This is your first step registering as a TanSAO student.
         As a registered student, you will easily keep track of
         your application process and get the latest updates
         from TanSAO first.
        </p>

 @include('students._studentRegistrationForm')

@endsection
@extends('emails._header')

@section('content')

    <p class="lead text-left">
       Hello, you have a new Visa Applicant.
    </p>
    <p>
    <dl class="dl-horizontal">
        <dt>Name:</dt> <dd>{{$name}}</dd>
        <dt>Phone Number:</dt> <dd>{{$phoneNumber}}</dd>
        <dt>Email Address:</dt> <dd>{{$email}}</dd>
        <dt>Expected Date of Travel:</dt> <dd>{{$travelDate}}</dd>
        <dt>Description:</dt> <dd>{{$description}}</dd>
    </dl>
    </p>
    <hr>

    <p class="small">This submission was done online through
        <a href="http://tansao.info/visa/create">TanSAO's Visa Application Page</a>. <br>
        You can see a full list of Applicants <a href="http://tansao.info/visa">here</a>
    </p>

@endsection
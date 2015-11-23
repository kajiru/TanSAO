@extends('emails._header')

@section('content')

<p class="lead text-left">
    Click on the Link to Reset your Password:
    {{ url('password/reset/'.$token) }}
</p>

@endsection
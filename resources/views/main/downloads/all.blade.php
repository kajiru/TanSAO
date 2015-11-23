@extends('main.layoutWithSideBar')
@section('title')
     Downloads | TanSAO
@stop

@section('content')

    <h2>
        <ol class="breadcrumb">
            <li class="active">Downloads</li>
        </ol>
    </h2>

    @include('admin._downloadableFiles')


@endsection
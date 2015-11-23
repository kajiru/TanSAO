@extends('main.layout')

@section('title')
     {{$student->firstName}} {{$student->familyName}}
@stop
@section('content')


    <div class="row">


        <div class="col-md-12 col-sm-12">

            @include('flash::message')

            <div class="backBox">
                <span class="fa fa-home"></span>
                <a href="/students"> Home </a>
            </div>

            <ul class="list-inline">
                <h1><small>
                        {{$student->familyName}}, {{$student->firstName}} {{$student->secondName}}

                           @if($student->registrationStatus == 1 || $student->registrationStatus == 2)
                                {{--Verified Students--}}
                                <a href="#" title="Verified Student" data-toggle="tooltip"> <i class="fa fa-check-circle-o"></i> </a>
                            @else
                                <a href="#" title="Pending Verification" data-toggle="tooltip"> <i class="fa fa-flag"></i> </a>
                                @if(Auth::user()->status == 0)<a href="#" title="Verify {{ $student->firstName}}" data-toggle="tooltip">Verify</a>@endif
                            @endif


                </small></h1>

                @if(Auth::user()->status == 0)
                    &#124;
                    <li class="text-right"><a href="/admin/students">  All Students</a></li>
                @endif

            </ul>
            <hr>


            <div class="tabs-left">
                <ul class="nav nav-tabs">

                    <li class="active">
                        <a href="#All" data-toggle="tab">
                            <span class="fa fa-user"></span>
                              Profile</a>
                    </li>

                    <li>
                        <a href="#p" data-toggle="tab">
                            <span class="fa fa-line-chart"></span>
                             Academics</a>
                    </li>

                    <li>
                        <a href="#u" data-toggle="tab">
                            <span class="fa fa-info-circle"></span>
                              Update Info </a>
                    </li>
                    <li>
                        <a href="#n" data-toggle="tab">
                            <span class="fa fa-bell-o"></span>
                            Notifications <span class="badge">0</span></a>
                    </li>


                </ul>

                <div class="tab-content">

                    <div class="tab-pane active" id="All">

                        <h3> Student Profile
                        </h3>
                        <hr>

                       @include('students._studentProfile')

                        @if(Auth::user()->status == 0)
                            {!! Form::open(["class"=>"form-inline", "method"=>"DELETE", "action" =>["StudentsController@destroy", $student->id]  ])!!}
                            {!! Form::submit("Deactivate ". $student->firstName."'s Account", ["class" => "btn btn-danger"]) !!}
                            {!! Form::close() !!}
                        @endif



                    </div>

                    <div class="tab-pane" id="p">
                        <h3>Academic Progress</h3>
                        <hr>
                       @include('students._studentProgress')
                    </div>

                    <div class="tab-pane" id="u">
                        <h3>Update Profile</h3>
                        <hr>
                        @include('students._studentUpdateForm')

                        <div class="collapse" id="addTestAccount">
                            Form...
                        </div>
                    </div>

                    <div class="tab-pane" id="n">
                        <h3>Notifications</h3>
                        <hr>
                        <p>No new notifications.
                        </p>

                    </div>

                </div><!-- /tab-content -->
            </div><!-- /tabs left -->
        </div><!-- /col -->


    </div>


@endsection

@section('scripts')
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

@endsection
@extends('admin.layout')

@section('title')
    Admin | Students
@stop

@section('content')

    @include('flash::message')


    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-graduation-cap"></i> Our Students</div>
                <div class="panel-body">

                    <div class="tabs-left">
                        <ul class="nav nav-tabs">

                            <li class="active">
                                <a href="#All" data-toggle="tab">
                                    <i class="fa fa-list-alt"></i>
                                    Students</a>
                            </li>

                            <li>
                                <a href="#scores" data-toggle="tab">
                                    <i class="fa fa-paperclip"></i>
                                    Test Scores </a>
                            </li>

                            <li>
                                <a href="#reg" data-toggle="tab">
                                    <i class="fa fa-pencil-square-o"></i>
                                    Register </a>
                            </li>

                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane active" id="All">
                                <h3>Students</h3>
                                <hr>
                                @include('admin.students._studentsList')
                            </div>

                            <div class="tab-pane" id="scores">
                                <h3>ACT Scores</h3>
                                <hr>
                                @include('admin.students._ACTScores')
                            </div>

                            <div class="tab-pane" id="reg">
                                <h3>Register A New TanSAO Student</h3>
                                <hr>
                                @include('students._studentRegistrationForm')
                            </div>

                        </div><!-- /tab-content -->
                    </div><!-- /tabs left -->
                </div>
            </div>


        </div><!-- /col -->


    </div>


@endsection

@section('scripts')

    <script type="text/javascript">

        //Enable Popover in Admin Page.
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>

@endsection
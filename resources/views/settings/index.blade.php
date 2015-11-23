@extends('main.layout')
@section('title')
    TanSAO - Account Settings
@stop

@section('content')

    <div class="row">


        <div class="col-md-12 col-sm-12">

            @include('flash::message')

            <div class="backBox">
                <h3>
                    <i class="fa fa-home"></i>
                    <a href="/home">Home</a>
                </h3>
            </div>
            <hr>


            <div class="tabs-left">
                <ul class="nav nav-tabs">


                    <li class="active">
                        <a href="#account" data-toggle="tab">
                            <i class="fa fa-user"></i>
                            My Account
                        </a>
                    </li>

                    <li>
                        <a href="#add" data-toggle="tab">
                            <i class="fa fa-lock"></i>
                            Others </a>
                    </li>




                </ul>

                <div class="tab-content">

                    <div class="tab-pane active" id="account">
                        <h4>User Account Details</h4>
                        <hr>
                        @include('settings._userProfile')


                    </div>

                    <div class="tab-pane" id="add">
                        <h3>Others</h3>
                        <hr>
                        <p>Currently Locked</p>
                    </div>



                </div><!-- /tab-content -->
            </div><!-- /tabs left -->
        </div><!-- /col -->




    </div>

@endsection()
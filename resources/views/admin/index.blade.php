@extends('admin.layout')

@section('title')
     Administration | TanSAO
@stop

@section('content')

    <div class="row">
        @include('flash::message')

        <div class="col-md-6">
            @include('admin._manageStaff')
        </div><!-- /col -->

        <div class="col-md-6">
            @include('admin._manageTestDates')
        </div>

    </div>

    {{--<div class="row">--}}
        {{--<div class="col-md-6">--}}
            {{--@include('admin._addSiteContent')--}}
        {{--</div>--}}

        {{--<div class="col-md-6">--}}
            {{--@include('admin._siteDocuments')--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
        {{--@include('admin.gDrive.AWS')--}}
    {{--</div>--}}


@endsection

@section('scripts')
  <script type="text/javascript">
  </script>
@endsection
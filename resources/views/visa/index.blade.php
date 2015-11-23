@extends('admin.layout')
@section('title')
    Visa Applicants | TanSAO
@stop

@section('content')

@include('flash::message')

    <div class ="row">

    <div class ="col-xs-12">
        <h2 class="page-header">Visa Applicants</h2>
        <table class="table table-hover table-bordered table-responsive">
            <thead>
            <tr>
                <th>Name</th>
                <th>Expected Date of Travel</th>
                <th>Email</th>
                <th>PhoneNumber</th>
                <th>Description</th>
                <th>Manage</th>

            </tr>
            </thead>

            <tbody>

            @foreach($applicants as $applicant)

                <tr>
                    <td>{{$applicant->name}}</td>
                    <td>{{$applicant->travelDate}}</td>
                    <td>{{$applicant->email}}</td>
                    <td>{{$applicant->phoneNumber}}</td>
                    <td>{{$applicant->description}}</td>
                    <td>

                       {!! Form::open(["class"=>"form-inline", "method"=>"DELETE", "action" =>["VisaController@destroy", $applicant->id]  ])!!}
                          {!! Form::submit("Remove", ["class" => "btn btn-danger"]) !!}
                       {!! Form::close() !!}

                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
        <a href="/visa/create" class="btn btn-primary">Add A Visa Applicant</a>
    </div>

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





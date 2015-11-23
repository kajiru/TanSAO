
<dl class="dl-horizontal">
    <dt>Full Name:</dt>
    <dd>{{$student->firstName}} {{$student->secondName}} {{$student->familyName}}</dd>

    <dt>Date of Birth:</dt>
    <dd>{{$student->dateOfBirth}}</dd>

    <dt>Phone Number:</dt>
    <dd>{{$student->phoneNumber}}</dd>

    <dt>Email:</dt>
    <dd>{{$student->user->email}}</dd>

    <dt>Address:</dt>
    <dd>{{$student->address}}</dd>

    <br>

    <dt>Citizenship:</dt>
    <dd>{{$student->citizenship}}</dd>

    <dt>Country Of Residence:</dt>
    <dd>{{$student->countryOfResidence}}</dd>

    <dt>First Language:</dt>
    <dd>{{$student->firstLanguage}}</dd>

    <dt>Passport Number:</dt>
    <dd>{{$student->passportNumber}}</dd>

    <br>

    <dt>High School Name:</dt>
    <dd>{{$student->highSchoolName}}</dd>

    <dt>Year Of Graduation:</dt>
    <dd>{{$student->yearOfGraduation}}</dd>

    <br>

    @if( $student->testAccounts->isEmpty() )

            <dt>Test Accounts: </dt>
            <dd>None</dd>

    @else
        @foreach($student->testAccounts as $tA)

            <dt>  </dt>
            <dd> --------------------- </dd>
            <dt>Test Name: </dt>
            <dd>{{$tA->testName}}</dd>

            <dt>UserName: </dt>
            <dd>{{$tA->username}}</dd>

            <dt>Password: </dt>
            <dd>{{$tA->password}}</dd>

            <dt>Testing Date: </dt>
            <dd>{{$tA->testingDate}}
                {!! Form::open(["class"=>"form-inline", "method"=>"DELETE", "action" =>["TestAccountsController@destroy", $tA->id]  ])!!}
                {!! Form::hidden('student_id', $student->id) !!}
                {!! Form::submit('Delete' , ["class" => "btn-xs btn-danger"]) !!}
                {!! Form::close() !!}
            </dd>
            <dt></dt>
            <dd></dd>

            <dt>  </dt>
            <dd> --------------------- </dd>

        @endforeach
    @endif


    <dt></dt>
    <dd>
        <button class="btn btn-primary" data-toggle="collapse" href="#addTestAccount" aria-expanded="false" aria-controls="">
            <i class="fa fa-plus"></i> Add Test Account
        </button>
    </dd>

</dl>




<div id="addTestAccount" class="collapse">


{!! Form::open(['class'=>'form-horizontal', 'method'=>'POST', 'action' =>'TestAccountsController@store' ])!!}

     {!! Form::hidden('student_id', $student->id) !!}

    <div class="form-group has-warning">
        {!! Form::label('testName','Testing Name',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-3">
            {!! Form::text('testName',null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>

    <div class="form-group has-warning">
        {!! Form::label('username','User Name',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-3">
            {!! Form::text('username',null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group has-warning">
        {!! Form::label('password','Password',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-3">
            {!! Form::text('password',null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group has-warning">
        {!! Form::label('testingDate','Testing Date',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-3">
            {!! Form::input('date', 'testingDate',null, ['class' => 'form-control','placeholder'=>'mm/dd/yyy', 'required']) !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-6 col-sm-offset-3">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

{!! Form::close() !!}

</div>

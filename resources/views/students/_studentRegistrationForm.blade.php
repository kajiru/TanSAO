{!! Form::open(['class'=>'form-horizontal','url'=>'/students', 'method'=>'POST'])!!}

    <div class="form-group has-warning">
        {!! Form::label('firstName','First Name',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('firstName',null, ['class' => 'form-control', 'autofocus', 'required']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('secondName','Second Name',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('secondName',null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group has-warning">
        {!! Form::label('familyName','Family Name',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('familyName',null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>

    <div class="form-group has-warning">
        {!! Form::label('dateOfBirth','Date of Birth',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::input('date', 'dateOfBirth',null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('phoneNumber','Phone Number',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('phoneNumber',null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group has-warning">
        {!! Form::label('email','Email-Address',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('email',null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('passportNumber','Passport Number',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('passportNumber',null, ['class' => 'form-control', 'placeholder'=>'Optional']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('address','Address',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('address',null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('countryOfResidence','Country of Residence',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('countryOfResidence',null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('citizenship','Citizenship',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('citizenship',null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('firstLanguage','First Language',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('firstLanguage',null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('highSchoolName','High School Name',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('highSchoolName',null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('yearOfGraduation','Year of Graduation',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('yearOfGraduation',null, ['class' => 'form-control']) !!}
        </div>
    </div>


<!-- Testing Account Info -->
@if(Auth::check())

    @if(Auth::user()->status == 0)
            <hr>
            <h3>Testing Account:</h3>

            <div class="form-group">
                {!! Form::label('testName','Test',['class' => 'col-sm-3 control-label'])!!}
                <div class="col-sm-6">
                    {!! Form::select('testName', ['ACT' => 'ACT', 'SAT' => 'SAT', 'SAT 2' =>'SAT 2', 'TOEFL' => 'TOEFL'],null,['class' => 'form-control'])!!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('username','Username',['class' => 'col-sm-3 control-label'])!!}
                <div class="col-sm-6">
                    {!! Form::text('username',null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
            {!! Form::label('password','Password',['class' => 'col-sm-3 control-label'])!!}
            <div class="col-sm-6">
                {!! Form::text('password',null, ['class' => 'form-control']) !!}
            </div>
        </div>

            <div class="form-group">
            {!! Form::label('testingDate','Date of Testing',['class' => 'col-sm-3 control-label'])!!}
            <div class="col-sm-6">
                {!! Form::input('date', 'testingDate',null, ['class' => 'form-control']) !!}
            </div>
        </div>
    @endif

@endif


    <div class="form-group">
        <div class="col-sm-6 col-sm-offset-4">
            {!! Form::submit('Submit Details', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

{!! Form::close() !!}

@if($errors->any())

    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>

@endif

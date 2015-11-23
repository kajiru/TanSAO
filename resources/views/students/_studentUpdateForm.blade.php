{!! Form::model($student, ['class'=>'form-horizontal', 'method'=>'PATCH', 'action' => ['StudentsController@update', $student->id ] ])!!}

<div class="form-group">
    {!! Form::label('firstName','First Name',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
        {!! Form::text('firstName',null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('secondName','Second Name',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
        {!! Form::text('secondName',null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('familyName','Family Name',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
        {!! Form::text('familyName',null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('dateOfBirth','Date of Birth',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
        {!! Form::input('date', 'dateOfBirth',null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('phoneNumber','Phone Number',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-6">
        {!! Form::text('phoneNumber',null, ['class' => 'form-control']) !!}
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



<div class="form-group">
    <div class="col-sm-6 col-sm-offset-3">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

{!! Form::close() !!}
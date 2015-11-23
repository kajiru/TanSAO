

{!! Form::open(['class'=>'form-horizontal', 'action' =>'TestDatesController@store' ])!!}

<div class="form-group has-warning">
    {!! Form::label('testName','Test Name',['class' => 'col-sm-4 control-label'])!!}
    <div class="col-sm-6">
        {!! Form::select('testName', ['ACT' => 'ACT', 'SAT' => 'SAT', 'SAT 2' =>'SAT 2', 'TOEFL' => 'TOEFL'],null,  ['class' => 'form-control'])!!}
    </div>
</div>


<div class="form-group has-warning">
    {!! Form::label('testDay','Day of Testing',['class' => 'col-sm-4 control-label'])!!}
    <div class="col-sm-6">
        {!! Form::input('date', 'testDay',null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('registrationDeadline','Registration Deadline',['class' => 'col-sm-4 control-label'])!!}
    <div class="col-sm-6">
        {!! Form::input('date', 'registrationDeadline',null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group has-warning">
    {!! Form::label('testCenter','Testing Center',['class' => 'col-sm-4 control-label'])!!}
    <div class="col-sm-6">
        {!! Form::text('testCenter',null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('testCost','Cost',['class' => 'col-sm-4 control-label'])!!}
    <div class="col-sm-6">
        {!! Form::text('testCost',null, ['class' => 'form-control']) !!}
    </div>
</div>



<div class="form-group">
    <div class="col-sm-6 col-sm-offset-4">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

{!! Form::close() !!}





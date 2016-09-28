


{!! Form::open(['class'=>'form-horizontal', 'action' =>'TestDatesController@store', 'files'=>'true' ])!!}

<div class="form-group has-warning">
    {!! Form::label('tDates','Upload File',['class' => 'col-sm-4 control-label'])!!}
    <div class="col-sm-6">
        {!!Form::file('tDates', null, ['class'=>'form-control', 'required'])!!}
    </div>

</div>

<div class="form-group has-warning">
    {!! Form::label('startDate','From',['class' => 'col-sm-4 control-label'])!!}
    <div class="col-sm-6">
        {!! Form::input('date', 'startDate',null, ['class' => 'form-control', 'required', 'placeholder'=>'MM/DD/YYYY']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('endDate','To',['class' => 'col-sm-4 control-label'])!!}
    <div class="col-sm-6">
        {!! Form::input('date', 'endDate',null, ['class' => 'form-control', 'required', 'placeholder'=>'MM/DD/YYYY']) !!}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-6 col-sm-offset-4">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

{!! Form::close() !!}





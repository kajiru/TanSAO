
{!!Form::open(['class'=>'form-horizontal', 'action' =>'VisaController@store' ]) !!}

    <div class="form-group has-warning">
        {!! Form::label('name','Full Name',['class' => 'col-sm-4 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('name', null, ['class' => 'form-control', ' autofocus', 'required'])!!}
        </div>
    </div>

    <div class="form-group has-warning">
        {!! Form::label('travelDate','Expected Day Of Travel',['class' => 'col-sm-4 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::input('date', 'travelDate', null, ['class' => 'form-control','placeholder' =>'mm/dd/yyyy', 'required']) !!}
        </div>
    </div>

    <div class="form-group has-warning">
        {!! Form::label('email','Email-Address',['class' => 'col-sm-4 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('email',null, ['class' => 'form-control', 'placeholder'=>'example@mail.com', 'required' ]) !!}
        </div>
    </div>

    <div class="form-group has-warning">
        {!! Form::label('phoneNumber','Phone Number',['class' => 'col-sm-4 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('phoneNumber',null, ['class' => 'form-control', 'placeholder'=>'+255 xxx xxx xxx', 'required']) !!}
        </div>
    </div>

<div class="form-group has-warning">
    {!! Form::label('description','Description',['class' => 'col-sm-4 control-label'])!!}
    <div class="col-sm-6">
        {!! Form::textArea('description',null, ['class' => 'form-control', 'placeholder'=>'Please provide a short description including the type of Visa you want. ']) !!}
    </div>
</div>

    <div class="form-group">
        <div class="col-sm-6 col-sm-offset-4">
            {!! Form::submit('Send', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

{!!Form::close()!!}
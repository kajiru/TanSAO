
{!! Form::model($user, ['class'=>'form-horizontal', 'method'=>'PATCH', 'action' => ['UserController@update', $user->id ] ])!!}

<div class="form-group">
    {!! Form::label('name','User Name',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-9">
        {!! Form::text('name',null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('email','Email',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-9">
        {!! Form::text('email',null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-9 col-sm-offset-3">

      <a href="{{url('/settings/resetPassword',[$user->email])}}">Reset Password</a>

    </div>

</div>

<div class="form-group">
    <div class="col-sm-9 col-md-offset-3">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
</div>




{!!Form::close()!!}
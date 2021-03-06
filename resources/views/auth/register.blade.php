@extends('main.layout')
@section('title')
    TanSAO | Register
@stop

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

                    {!! Form::open(['class' =>'form-horizontal'])!!}

                        <div class="form-group">
                        {!! Form::label('name','Name',['class' => 'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                        {!! Form::text('name',null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('email','E-mail Address',['class' => 'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!! Form::text('email', '',['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('password','Password',['class' => 'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!! Form::password('password',['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('password_confirmation','Confirm Password',['class' => 'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}


				</div>
			</div>
		</div>
	</div>
</div>
@endsection

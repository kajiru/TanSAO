{!! Form::open(['class'=>'form-horizontal', 'method'=>'POST', 'action' =>'AdminController@manageUploads', 'files'=>'true' ])!!}

    <div class="form-group has-warning">
        {!! Form::label('fileName','File Name',['class' => 'col-sm-3 control-label'])!!}
        <div class="col-sm-6">
            {!! Form::text('fileName',null, ['class' => 'form-control', 'required', 'Placeholder'=>'New Students Questionnaire']) !!}
        </div>
    </div>

    <div class="form-group has-warning">
        <div class="col-sm-6 col-sm-offset-3">
            {!!Form::file('file', null, ['class'=>'form-control'])!!}
        </div>

    </div>

    <div class="form-group">
        <div class="col-sm-6 col-sm-offset-3">
            {!! Form::submit('Upload Document', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

    {!! Form::close() !!}

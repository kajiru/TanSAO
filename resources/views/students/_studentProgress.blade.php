
@if(!$student->ACTScores->isEmpty() )
    <table class="table table-hover table-bordered table-responsive">

        <thead>
        <tr>
            <th>Date</th>
            <th>English</th>
            <th>Math</th>
            <th>Reading</th>
            <th>Science</th>
            <th>Composite</th>
            <th>Writing</th>
        </tr>
        </thead>

        <tbody>

        @foreach($student->ACTScores as $s)
            <tr @if($s->type == 0)class="alert-warning"@endif>
                <td>{{$s->testDate}}</td>
                <td>{{$s->scoreE}}</td>
                <td>{{$s->scoreM}}</td>
                <td>{{$s->scoreR}}</td>
                <td>{{$s->scoreS}}</td>
                <td>{{$s->score}}</td>
                <td>{{$s->scoreW}}</td>
            </tr>
        @endforeach

        </tbody>

    </table>
 @else
    No Reported Scores!
@endif

<button class="btn btn-primary" data-toggle="collapse" href="#addACTScore" aria-expanded="false" aria-controls="">
    <i class="fa fa-plus"></i> Add ACT Score
</button>

<div class="collapse" id="addACTScore">

    {!! Form::open(['class'=>'','url'=>'/ACTScore'])!!}
    <br>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::input('date', 'testDate',null, ['class' => 'form-control','placeholder'=>'Date']) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::select('type', ['0' => 'Official Score', '1' => 'Practice Score'] ,null,['class' => 'form-control'])!!}
        </div>
    </div>

    <br>
    <div class="row">
            <div class="col-xs-2 has-warning">
                {!! Form::text('scoreE',null, ['class' => 'form-control','placeholder'=>'English', 'required']) !!}
            </div>

            <div class="col-xs-2 has-warning">
                {!! Form::text('scoreM',null, ['class' => 'form-control','placeholder'=>'Math', 'required']) !!}
            </div>

            <div class="col-xs-2 has-warning">
                {!! Form::text('scoreR',null, ['class' => 'form-control','placeholder'=>'Reading', 'required']) !!}
            </div>

            <div class="col-xs-2 has-warning">
                {!! Form::text('scoreS',null, ['class' => 'form-control','placeholder'=>'Science', 'required']) !!}
            </div>

            <div class="col-xs-2 has-warning">
                {!! Form::text('score',null, ['class' => 'form-control','placeholder'=>'Composite', 'required']) !!}
            </div>

            <div class="col-xs-2">
                {!! Form::text('scoreW',null, ['class' => 'form-control','placeholder'=>'Writing']) !!}
            </div>
    </div>

    <br>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::submit('Save Scores', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>



    {!! Form::close() !!}

</div>




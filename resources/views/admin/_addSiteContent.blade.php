<div class="panel panel-warning" id="admin-main-panel">
    <div class="panel-heading"> <h3><i class="fa fa-magic"></i> Manage Site Content</h3></div>
    <div class="panel-body">

        <div class="tabs-left">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#visits" data-toggle="tab">Visits </a>
                </li>

                <li>
                    <a href="#achievements" data-toggle="tab">Achievements </a>
                </li>

            </ul>

            <div class="tab-content">

                <div class="tab-pane active" id="visits">
                    <h3>University Visits</h3>
                    <hr>

                    <p>
                        The visits published here will be publicly visible at the <a href="/visits/university">University Visits Page</a>.
                    </p>

                    <a class="btn btn-primary" data-toggle="collapse" href="#publishVisit" aria-expanded="false" aria-controls="">
                        <i class="fa fa-paperclip"></i> Publish A University Visit
                    </a>


                    <div class="collapse" id="publishVisit">
                        <br>

                            <p>Note:</p>
                        <ol class="alert-info">
                            <li> Banner should be a pdf file. </li>
                            <li> Use preferred naming conventions; E.g. For a banner about a UK University Fair, the file name of the banner to be uploaded should look something like: "Uk_universities.pdf" (Do not leave space between words)</li>
                            <li> Banners will Appear in descending order.</li>
                            <li> Make sure you have the RIGHT banner before uploading-- changing it won't be easy.</li>
                        </ol>

                        <br>
                        <div class="well">
                            {!! Form::open(['class'=>'form-horizontal', 'method'=>'POST', 'action' =>'AdminController@addVisit', 'files'=>'true' ])!!}

                            <div class="form-group has-warning">
                                {!! Form::label('title','Title',['class' => 'col-sm-3 control-label'])!!}
                                <div class="col-sm-9">
                                    {!! Form::text('title',null, ['class' => 'form-control', 'required', 'Placeholder'=>'Uk University Visit']) !!}
                                </div>
                            </div>

                            <div class="form-group has-warning">
                                {!! Form::label('visitDate','Date of Visit',['class' => 'col-sm-3 control-label'])!!}
                                <div class="col-sm-6">
                                    {!! Form::input('date', 'visitDate',null, ['class' => 'form-control', 'required']) !!}
                                </div>
                            </div>


                            <div class="form-group has-warning">
                                {!! Form::label('banner','Banner',['class' => 'col-sm-3 control-label'])!!}
                                <div class="col-sm-6">
                                    {!!Form::file('banner', null, ['class'=>'form-control'])!!}
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-3">
                                    {!! Form::submit('Publish', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>


                </div>

                <div class="tab-pane" id="achievements">
                    <h3>Student Achievements</h3>
                    <hr>

                    <a class="btn btn-primary" data-toggle="collapse" href="#publishAchievement" aria-expanded="false" aria-controls="">
                        <i class="fa fa-trophy"></i> Publish A Student Achievement
                    </a>

                    <div class="collapse" id="publishAchievement">
                        <br>
                        <div class="well">
                            <p class="alert-danger">Under maintenance. Use Facebook Page to Publish Achievements. </p>

                            {!! Form::open(['class'=>'form-horizontal', 'method'=>'POST', 'action' =>'AdminController@addAchievement', 'files'=>'true' ])!!}

                            <div class="form-group has-warning">
                                {!! Form::label('name','Name',['class' => 'col-sm-3 control-label'])!!}
                                <div class="col-sm-9">
                                    {!! Form::text('name',null, ['class' => 'form-control', 'required', 'Placeholder'=>'Full Name']) !!}
                                </div>
                            </div>

                            <div class="form-group has-warning">
                                {!! Form::label('prevSchool','School',['class' => 'col-sm-3 control-label'])!!}
                                <div class="col-sm-9">
                                    {!! Form::text('prevSchool',null, ['class' => 'form-control', 'required', 'Placeholder'=>'Previous School/Institution']) !!}
                                </div>
                            </div>

                            <div class="form-group has-warning">
                                {!! Form::label('university','University',['class' => 'col-sm-3 control-label'])!!}
                                <div class="col-sm-9">
                                    {!! Form::text('university',null, ['class' => 'form-control', 'required', 'Placeholder'=>'Name of University Accepted']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('description','Description',['class' => 'col-sm-3 control-label'])!!}
                                <div class="col-sm-9">
                                    {!! Form::textArea('description',null, ['class' => 'form-control', 'Placeholder'=>'A brief description of the student and type of acceptance', 'rows'=>'5']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('studentRemarks','Remarks',['class' => 'col-sm-3 control-label'])!!}
                                <div class="col-sm-9">
                                    {!! Form::textArea('studentRemarks',null, ['class' => 'form-control', 'Placeholder'=>'What the student has to say about his/her experience', 'rows'=>'5']) !!}
                                </div>
                            </div>

                            <div class="form-group has-warning">
                                {!! Form::label('Photo','Photo',['class' => 'col-sm-3 control-label'])!!}
                                <div class="col-sm-6">
                                    {!!Form::file('photo', null, ['class'=>'form-control'])!!}
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-3">
                                    {!! Form::submit('Publish', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}

                        </div>

                    </div>
                </div>

            </div><!-- /tab-content -->

        </div><!-- /tabs left -->

    </div>
</div>

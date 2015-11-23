
<!--Delete TestDate Modal -->
<div class="modal fade" id="addTestDate" tabindex="-1" role="dialog" aria-labelledby="addTestDate" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Test Date</h4>
            </div>
            <div class="modal-body">
                @include('testDates.create')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


    <table class="table table-hover table-bordered table-responsive">
        <thead>
            <tr>
                <th>Test</th>
                <th>Center</th>
                <th>Testing Date</th>
                <th>Reg. Deadline</th>
                <th>Manage</th>
            </tr>
        </thead>

        <tbody>

            @foreach($testDates as $tD)
                <tr>
                    <td> <a href="/tests/{{$tD->testName}}"> {{$tD->testName}}</a></td>
                    <td>{{$tD->testCenter}}</td>
                    <td>{{$tD->testDay}}</td>
                    <td>{{$tD->registrationDeadline}}</td>

                    <td>
                        {!! Form::open(["class"=>"form-inline", "method"=>"DELETE", "action" =>["TestDatesController@destroy", $tD->id]  ])!!}
                        {!! Form::submit("Delete", ["class" => "btn btn-danger"]) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

<hr>

    <a class="btn btn-primary" data-toggle="modal" data-target="#addTestDate">
       <i class="fa fa-plus"></i> Add Test Date
    </a>






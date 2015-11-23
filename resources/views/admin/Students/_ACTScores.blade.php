<table class="table table-hover table-bordered table-responsive">
    <thead>
    <tr>
        <th>Student's Name</th>
        <th>Composite</th>
        <th>English</th>
        <th>Math</th>
        <th>Reading</th>
        <th>Science</th>
        <th>Writing</th>
        <th>Date Taken</th>
    </tr>
    </thead>

    <tbody>

    @foreach($students as $student)
        @if(!$student->actScores->isEmpty())
            @foreach($student->actScores as $score)

                @if($score['type'] == 0)
                    <tr @if(($score['score'] > 30) || ($score['score'] ==30) ) class = "success" @endif>
                        <td> <a href="/students/{{$student->id}}"> {{$student->firstName}}  {{$student->familyName}}</a></td>
                        <td>{{$score['score']}}</td>
                        <td>{{$score['scoreE']}}</td>
                        <td>{{$score['scoreM']}}</td>
                        <td>{{$score['scoreR']}}</td>
                        <td>{{$score['scoreS']}}</td>
                        <td>{{$score['scoreW']}}</td>
                        <td>{{$score['testDate']}}</td>
                    </tr>
                @endif

            @endforeach

        @endif
    @endforeach

    </tbody>
</table>



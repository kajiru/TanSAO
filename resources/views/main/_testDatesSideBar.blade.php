
    <div class="list-group">

        <p class="list-group-item"><strong>ACT</strong></p>

        @foreach($aDates as $a)
            <a href="#" class="list-group-item">
            Test at <strong>{{$a->testCenter}}</strong> <br>
            Date: <strong>{{$a->testDay}}</strong> <br>
            <em> Reg. Deadline <b>{{$a->registrationDeadline}}</b></em></a>
        @endforeach

        <p class="list-group-item"><strong>SAT</strong></p>
        @foreach($sDates as $s)
            <a href="#" class="list-group-item">
                Test at <strong>{{$s->testCenter}}</strong> <br>
                Date: <strong>{{$s->testDay}}</strong> <br>
                <em> Reg. Deadline: <b>{{$s->registrationDeadline}}</b></em></a>
        @endforeach

        <p class="list-group-item"><strong>SAT Subject Tests</strong></p>
        @foreach($s2Dates as $s2)
            <a href="#" class="list-group-item">
                Test at <strong>{{$s2->testCenter}}</strong> <br>
                Date: <strong>{{$s2->testDay}}</strong> <br>
                <em> Reg. Deadline: <b>{{$s2->registrationDeadline}}</b></em></a>
        @endforeach

        <p class="list-group-item"><strong>TOEFL iBT</strong></p>
        @foreach($tDates as $t)
            <a href="#" class="list-group-item">
                Test at <strong>{{$t->testCenter}}</strong> <br>
                Date: <strong>{{$t->testDay}}</strong> <br>
                <em> Reg. Deadline: <b>{{$t->registrationDeadline}}</b></em></a>
        @endforeach

    </div>

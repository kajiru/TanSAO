@extends('main.layoutWithSideBar')
@section('title')
    Test : ACT
@stop

@section('content')

    <h2> <ol class="breadcrumb">
            <li><a href="/tests/all">Tests</a></li>
            <li class="active">ACT</li>
        </ol>
    </h2>

    
    <div>
    	<h3>What is the ACT?</h3>
    	<blockquote class="text-justify">

            <p> The ACT is a national college admissions examination that
                consists of subject area tests in English, Mathematics, Reading, and Science.
            </p>
            <p>The ACT with writing includes the four subject area tests plus
                a 40-minute <a href="http://www.actstudent.org/writing/" target="_blank">writing test</a> .
            </p>
            <p>ACT results are accepted by all four-year colleges and
                universities in the US.</p>

            <p>The ACT includes 215 multiple-choice questions and takes approximately
                3 hours and 30 minutes to complete, including a short break
                (or just over four hours if you are taking the ACT with writing).
                Actual testing time is 2 hours and 55 minutes
                (plus 40 minutes if you are taking the ACT with writing).
            </p>
            <footer> The ACT Website</footer>
        </blockquote>


        <p>For more information about the ACT test visit their
            <a href="http://www.actstudent.org/faq/what.html" target="_blank"> website</a>
        </p>

    </div>

    <div>

        <h3>Do I need to take the ACT?</h3>
        <p>Any international student wishing to study in the United States may take this test in
            order to be considered by universities.
        </p>

    </div>

    <div>
        <h3>How do I register for the ACT?</h3>
        <p> Students wishing to take ACT can register online
            <a href="http://www.actstudent.org/account"> here </a>.
            Students who do not have access to a credit card can register through
            <a href="/students/create">TanSAO</a>
        </p>
        <p>Note: You have to be first Register as a TanSAO student. Then visit the
            office to make necessary payments.
        </p>
    </div>

    <div>
    <h3>When are the tests offered?</h3>
    <p>Check the ACT section on the side bar for upcoming ACT tests. Or visit our offices.
    </p>
    <p> Please note that, registration deadline for ACT tests is usually
        at least 30 days before the test date, so make sure you don't miss the spot.
    </p>

    </div>




@endsection
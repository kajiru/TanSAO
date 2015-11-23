@extends('main.layoutWithSideBar')
@section('title')
    Test : SAT Subject Test
@stop

@section('content')

    <h2> <ol class="breadcrumb">
            <li><a href="/tests/all">Tests</a></li>
            <li class="active">SAT Subject Test</li>
        </ol>
    </h2>

    <h3>What are the SAT Subject tests?</h3>

    <blockquote class="text-justify">

        <p> Subject Tests are hour-long, content-based tests that allow you
            to showcase achievement in specific subject areas where you excel.
            These are the only national admission tests where you choose the
            tests that best showcase your achievements and interests.
        </p>

        <p>SAT Subject Tests allow you to differentiate yourself in the college admission
            process or send a strong message regarding your readiness
            to study specific majors or programs in college.
            In conjunction with your other admission credentials
            (your high school record, SAT scores, teacher recommendations, etc.),
            they provide a more complete picture of your academic background
            and interests.
        </p>

        <footer>
            <a href="https://sat.collegeboard.org/about-tests/sat-subject-tests" target="_blank">College Board Website</a>
        </footer>

    </blockquote>

    <p class="text-justify">
        Students looking to study in top Universities must also take the SAT Subject Tests.
        These are both offered at IST and ISM on a regular basis.
        Check the Side Bar to see when the next test will be and when you need to register.
    </p>

    <p class="lead"> Subject tests(locally) are offered in the following areas:</p>

    <ul>
        <li>Literature</li>
        <li>United States History</li>
        <li>World History</li>
        <li>Mathematics Level 1</li>
        <li>Mathematics Level 2</li>
        <li>Biology (Ecological/Molecular)</li>
        <li>Chemistry</li>
        <li>Physics</li>
        <li>Languages : Listening and Reading</li>
        <ul>
            <li>Chinese</li>
            <li>French</li>
            <li>German</li>
            <li>Spanish</li>
            <li>Japanese</li>
            <li>Korean</li>
        </ul>
        <li>Languages: Reading Only</li>
         <ul>
             <li>Modern Hebrew</li>
             <li>Italian</li>
             <li>Latin</li>
         </ul>

    </ul>

    <h3>How Do I register For SAT Subject Tests</h3>
    <p>
        Students registering for the SAT must have a credit card to go through the process
        on their own.  If you do not have one you can register at the TanSAO offices or through our
        <a href="/students/create">Student registration page</a>.
    </p>
    <p>
        Note: Registration requires you to have a passport style picture. Please brings this during registration.
    </p>


@endsection
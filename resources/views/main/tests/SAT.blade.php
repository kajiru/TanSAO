@extends('main.layoutWithSideBar')
@section('title')
    Test : SAT
@stop

@section('content')

    <h2> <ol class="breadcrumb">
            <li><a href="/tests/all">Tests</a></li>
            <li class="active">SAT Reasoning Test</li>
        </ol>
    </h2>

    <h3>What is the SAT?</h3>

        <blockquote class="text-justify">

        <p> The SAT is a globally recognized college admission test
            that lets you show colleges what you know and how well
            you can apply that knowledge. It tests your knowledge
            of reading, writing and math — subjects that are taught
            every day in high school classrooms. Most students take
            the SAT during their junior or senior year of high school,
            and almost all colleges and universities use the SAT
            to make admission decisions.
        </p>

        <p>Taking the SAT is the first step in finding the right
            college for you — the place where you can further
            develop your skills and pursue your passions.
            But SAT scores are just one of many factors that
            colleges consider when making their admission decisions.
            High school grades are also very important. In fact,
            the combination of high school grades and SAT scores
            is the best predictor of your academic success in college.
        </p>

        <footer>
            <a href="https://sat.collegeboard.org/about-tests/sat" target="_blank">College Board Website</a>
        </footer>

    </blockquote>

    <h3>Do I need to take the SATs?</h3>
    <p class="text-justify">
        Any student hoping to study in the USA must take either the the
        SAT Reasoning test or the <a href="/tests/ACT" target="_blank">ACT</a>
        during their application process. The more competitive universities
        require/highly recommend that students take <a href="/tests/SAT2" target="_blank">
            Subject tests</a> in addition
        to the SAT Reasoning test. Students who do well on the subject tests may increase their chances
        of being admitted and/or receiving scholarships to universities.
    </p>

    <p class="lead"> Interested in SAT subject tests? <a href="/tests/SAT2">Here</a>  </p>

    <h3>How do I Register for the SAT?</h3>
    <p>
        Students registering for the SAT must have a credit card to go through the process
        on their own.  If you do not have one you can register at the TanSAO offices or through our
        <a href="/students/create">Student registration page</a>.
    </p>
    <p>
        Note: Registration requires you to have a passport style picture. Please brings this during registration.
    </p>

@endsection
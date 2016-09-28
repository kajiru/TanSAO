<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" title="Home"><img src="/images/tansao-square-logo.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
                <li class="importantMainNav"><a href="{{ url('/') }}" title="Home">Home</a></li>

                <li class="importantMainNav"><a href="{{ url('/contacts') }}" title="TanSAO Contacts"> Contacts </a></li>

                <li class="dropdown importantMainNav">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tests<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/tests/ACT">ACT</a></li>
                        <li><a href="/tests/SAT">SAT</a></li>
                        <li><a href="/tests/SAT2">SAT2</a></li>
                        <li><a href="/tests/TOEFL">TOEFL</a></li>
                    </ul>
                </li>

                <li class="dropdown importantMainNav">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/programs/form5and6">Form 5 and 6 Scholarships </a></li>
                        <li><a href="/programs/englishAccessProgram">English Access program</a></li>
                    </ul>
                </li>

                <li class="dropdown importantMainNav">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Visits<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/visits/university">University</a></li>
                    </ul>
                </li>

                <li class="importantMainNav">
                    <a href="{{url('/downloads/all')}}"> Downloads </a>
                </li>

                <li class="dropdown importantMainNav">
                    <a href="/achievements/all" class="dropdown-toggle" data-toggle="dropdown" title="Our Students' Achievements">Achievements<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/achievements/2015">2015</a></li>
                        <li><a href="/achievements/2014">2014 </a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

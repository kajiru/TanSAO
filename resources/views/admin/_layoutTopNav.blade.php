<!--Cost Calculator Modal -->
    <div class="modal fade" id="costCalc" tabindex="-1" role="dialog" aria-labelledby="addTestDate" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cost Calculator</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                          <label for="net">Net Cost</label>
                          <input type="text" class="form-control" id="netCost">
                        </div>
                        Final Cost : 
                        <p id="cost"> </p>
                  </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

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
            <a class="navbar-brand" href="/admin" title="TanSAO"><span class="fa fa-home"></span> Admin </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="list-unstyled">  <a href="/admin/students">Manage Students</a>  </li>
                <li class="list-unstyled">  <a href="#" class="list-unstyled" data-toggle="modal" data-target="#costCalc"> Cost Calculator </a> </li>
                <li class="list-unstyled">  <a href="/payments">Payments</a> </li>
                <li class="list-unstyled">  <a href="/visa">Online Visa Applicants</a> </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Guest <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">

                            <li><a href="{{ url('/auth/login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
                            <li><a href="{{ url('/students/create') }}"><i class="fa fa-pencil-square-o"></i> Student Registration</a></li>
                        </ul>
                    </li>

                @else

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/students')}}"><i class="fa fa-list-alt"></i> Students Portal</a></li>
                            <li><a href="{{ url('/settings')}}"><i class="fa fa-cog"></i> Account Settings</a></li>
                            <li><a href="{{ url('/auth/logout') }}"> <i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                    </li>
                @endif

            </ul>

        </div>
    </div>
</nav>

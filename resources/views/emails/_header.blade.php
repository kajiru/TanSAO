<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge ,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>TanSAO</title>
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style type="text/css">
        .mailContent{
            min-height:500px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-default">

        <div class="container-fluid">
            <div class="navbar-header">

                {{--<a class="navbar-brand" href="/" title="TanSAO"><img src="/images/tansao-square-logo.png"></a>--}}
                <a class="navbar-brand" href="/" title="TanSAO">TanSAO</a>

            </div>
        </div>

    </nav>

    <div class="container-fluid">

        <div class="mailContent">
            @yield('content')
        </div>

    </div>

    @include('emails._footer')

</body>
</html>

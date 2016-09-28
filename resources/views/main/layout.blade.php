<!DOCTYPE html>
<html lang="en">
    @include('main._layoutHead')

     <body>

        @include('main._TopNav')

        <div class="container-fluid">
            @yield('content')
        </div>

     @include('main._footer')


    <!-- CDN Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- Local Scripts -->
    {{--<script type="text/javascript" src="/assets/js/jquery+bootstrap.js"></script>--}}


    <!-- Additional Scripts that are Page Specific -->
     @yield('scripts')

    </body>
</html>

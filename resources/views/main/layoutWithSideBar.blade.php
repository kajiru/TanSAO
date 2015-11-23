<!DOCTYPE html>
<html lang="en">

    @include('main._layoutHead')

    <body>

        @include('main._TopNav')

        <div class="container">

            <div class="row row-offcanvas row-offcanvas-right">

                <div class="col-xs-12 col-md-9 col-sm-8">

                    <p class="pull-right visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Important Dates</button>
                    </p>
                    @yield('content')

                </div><!--/span-->

                <div class="col-xs-6 col-md-3 col-sm-4 sidebar-offcanvas" id="sidebar" role="navigation">
                    <!--Commented out till a new Implementation is in place.-->
                    {{--@include('main._testDatesSideBar')--}}
                </div>

            </div><!--/row-->

        </div><!--/container-->

        @include('main._footer')



        <!-- CDN Scripts -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>


        <!--Local Scripts-->
        {{--<script type="text/javascript" src="/js/jquery-1.9.1.js"></script>--}}
        {{--<script type="text/javascript" src="/js/bootstrap.min.js"></script>--}}

        <script type="text/javascript">

            $(document).ready(function () {
                $('[data-toggle="offcanvas"]').click(function () {
                    $('.row-offcanvas').toggleClass('active')
                });
            });

        </script>



    </body>
</html>

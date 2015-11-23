<!DOCTYPE html>
<html lang="en">

@include('admin._layoutHead')

<body>


@include('admin._layoutTopNav')


<div class="container-fluid">
    @yield('content')
</div>

@include('admin._layoutFooter')


<!-- CDN Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!-- Local Scripts -->
{{--<script type="text/javascript" src="/assets/js/jquery+bootstrap.js"></script>--}}

<script type="text/javascript">
      $("#netCost").keyup(function() {
    		var cost = $( this ).val();
    		  $("#cost").text(cost);
  			}
  			);
</script>

<!--Page Specific Scripts -->
@yield('scripts')

</body>
</html>

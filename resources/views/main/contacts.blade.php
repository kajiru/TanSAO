@extends('main.layoutWithSideBar')
@section('title')
    Contacts | TanSAO
@stop
@section('content')
    <h1>Contacts</h1>
    <hr>

    <div class="row">

        <div class="col-6 col-sm-6">


            <div class="panel panel-info">

                <div class="panel-heading">
                    <h3 >Address</h3>
                </div>

                <div class="panel-body">

                <address>
                    <p class="lead">
                    Plot #1820 Toure Drive<br>
                    Lower Level;<br>
                    Golden Tulip Hotel<br>
                    Msasani Peninsula<br>
                    PO Box: 23134<br>
                    DSM, Tanzania<br>
                    Cell phone: +255 655 493 060
                    </p>
                </address>

                </div>

            </div>

        </div>

        <div class="col-6 col-sm-6">


            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 >Staff Contacts</h3>
                </div>
                <div class="panel-body">

                    <h4>Daryl Rustad <small> - Director of Counseling</small></h4>
                    Email: <a href="mailto:tansao.tanzania@gmail.com">tansao.tanzania@gmail.com</a>

                    <h4>Moussa Mattaka <small> - Associate Director of Counseling</small></h4>
                    Email: <a href="mailto:tansao.moussa@gmail.com">tansao.moussa@gmail.com</a>


                    <h4>Ayesha R <small> - Counselor  </small></h4>
                    Email: <a href="tansao.ayesha@gmail.com">tansao.ayesha@gmail.com</a>


                    <h4>Alex Elifas <small> - Student Counselor, IT consultant </small> </h4>
                    Email: <a href="mailto:tansao.alex@gmail.com">tansao.alex@gmail.com</a>

                    <h4> Paschal Giki <small> - Student Tutor </small> </h4>
                    Email: <a href="mailto:tansao.paschal@gmail.com">tansao.paschal@gmail.com</a>

                    <h4> Lesian Elias <small> - Student Tutor </small> </h4>
                    Email: <a href="mailto:tansao.lesian@gmail.com">tansao.lesian@gmail.com</a>


                </div>
                <div class="panel-footer">Please contact our staff for any inquiries.</div>
            </div>



        </div>



    </div><!--/row-->

@endsection
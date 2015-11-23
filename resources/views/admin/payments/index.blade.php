@extends('admin.layout')

@section('title')
    Payments | TanSAO
@stop

@section('content')

    <!--Add Payment Modal -->
    <div class="modal fade" id="addPayment" tabindex="-1" role="dialog" aria-labelledby="addPayme" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Payment</h4>
                </div>
                <div class="modal-body">
                    @include('admin.payments._mainForm')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    @include('flash::message')

    <div class ="row">

        <div class ="col-xs-12">
            <h2 class="page-header"><i class="fa fa-money"></i> Payments</h2>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3> All Payments |
                     <a href="#" onclick="window.print()"> <small> <i class="fa fa-print"></i> </small> </a>
                    </h3>
                </div>
                <div class="panel-body">
                    <div id="paymentsTable">
                        @include('admin.payments._listAll')
                    </div>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#addPayment">
                        <i class="fa fa-plus"></i> Add Payment
                    </a>

                </div>
            </div>
        </div>

        <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>

    </div>

@endsection

@section('scripts')

    <script type="text/javascript">
        //Enable Popover in Admin Page.
        $(function () {
            $('[data-toggle="popover"]').popover()
        })

    </script>


@stop
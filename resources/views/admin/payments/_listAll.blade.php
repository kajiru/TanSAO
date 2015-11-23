<table class="table table-hover table-bordered table-responsive">
    <thead>
    <tr>
        <th>Service</th>
        <th>Actual Cost</th>
        <th>Paid Amount</th>
        <th>Method</th>
        <th>Card Used</th>
        <th>Balance</th>
        <th>Remarks</th>
        <th>Manage</th>
    </tr>
    </thead>

    <tbody>

    @foreach($payments as $p)
        <tr>
            <td>
                <a  href="#" role ="button"
                        data-toggle="popover"
                        data-trigger="focus"
                        data-html="true"
                        data-placement="right"
                        title='Added By: {{$p->user['name']}}'
                        data-content='Last Updated:
                           {{ $p->updated_at}}
                           @if($p->serviceStatus == 0) Note: Service not yet offered! @endif

                '>
                    <i class="fa fa-info-circle"></i>
                </a>
                {{ $p->service}}
            </td>
            <td>@if($p->methodOfPayment == 'USD')$@endif
                {{number_format($p->cost)}}
            </td>
            <td>@if($p->methodOfPayment == 'USD')$@endif
                {{number_format($p->paid)}}
            </td>
            <td>{{$p->methodOfPayment}}</td>
            <td>{{$p->cardUsed}}</td>
            <td @if($p->cost != $p->paid) class="danger" @endif>
                @if($p->methodOfPayment == 'USD')$@endif {{number_format($p->cost - $p->paid)}}</td>
            <td>{{$p->remarks}}</td>

            <td>
                   {!! Form::open(["class"=>"form-inline", "method"=>"DELETE", "action" =>["PaymentsController@destroy", $p->id]  ])!!}
                      {!! Form::submit("Delete", ["class" => "btn btn-danger"]) !!}
                   {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    <tr class="alert-warning">
        <td>Total</td>
        {{--Actual Cost Totals--}}
        <td>
            <strong>$</strong>{{ number_format($paymentTotals[0]['usd'])   }}<br>
            <strong>Tsh. </strong>{{number_format($paymentTotals[0]['tsh']) }} <br>
            Mpesa: <strong>Tsh. </strong>{{number_format($paymentTotals[0]['mpesa'])}}
        </td>
        {{--Paid Totals--}}
        <td>
            <strong>$</strong>{{number_format($paymentTotals[1]['usd'])}}<br>
            <strong>Tsh. </strong>{{number_format($paymentTotals[1]['tsh'])}} <br>
            Mpesa: <strong>Tsh. </strong>{{number_format($paymentTotals[1]['mpesa'])}}
        </td>
        <td></td>
        <td></td>
        {{--Total Balances--}}
        <td>
            <strong>$</strong>{{number_format($paymentTotals[0]['usd'] - $paymentTotals[1]['usd'])}}<br>
            <strong>Tsh. </strong> {{number_format($paymentTotals[0]['tsh'] - $paymentTotals[1]['tsh'])}} <br>
            Mpesa: <strong>Tsh. </strong>{{number_format($paymentTotals[0]['mpesa'] - $paymentTotals[1]['mpesa'])}}
        </td>
        <td></td>
        <td>
            {{--{!! Form::open(["class"=>"form-inline", "method"=>"DELETE", "action" =>["PaymentsController@destroy", $p->id]  ])!!}--}}
            {{--{!! Form::submit("Recalculate", ["class" => "btn btn-info"]) !!}--}}
            {{--{!! Form::close() !!}--}}
        </td>
    </tr>
    </tbody>
</table>
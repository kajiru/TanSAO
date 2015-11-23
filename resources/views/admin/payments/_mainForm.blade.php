

{!! Form::open(['class'=>'form-horizontal', 'action' =>'PaymentsController@store' ])!!}


{{--Some of the Services Offered at TanSAO--}}
<datalist id="services">
    <option value="ACT Test Registration">ACT Test Registration</option>
    <option value="ACT Practice">ACT Practice</option>
    <option value="SAT Test Registration">SAT Test Registration</option>
    <option value="SAT Practice">SAT Practice</option>
    <option value="TOEFL Test Registration">TOEFL Test Registration</option>
    <option value="TOEFL Practice">TOEFL Practice</option>
    <option value="UPS Delivery">UPS Delivery</option>
    <option value="Student Contract">Student Contract</option>
</datalist>

<div class="form-group has-warning">
    {!! Form::label('service','Service',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-9">
        {!! Form::text('service',null, ['class' => 'form-control','list'=>'services', 'placeholder'=>'Name of service', 'required']) !!}
    </div>
</div>

<div class="form-group has-warning">
    {!! Form::label('cost','Cost',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-9">
        <div class="input-group">
           {!! Form::text('cost',null, ['class' => 'form-control', 'placeholder'=>'Actual Cost', 'required']) !!}
            <div class="input-group-addon">.00</div>
        </div>
    </div>

</div>

<div class="form-group has-warning">
    {!! Form::label('paid','Paid',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-9">
        <div class="input-group">
            {!! Form::text('paid',null, ['class' => 'form-control', 'placeholder'=>'Amount paid', 'required']) !!}
            <div class="input-group-addon">.00</div>
        </div>
    </div>
</div>

<div class="form-group has-warning">
    {!! Form::label('methodOfPayment','Paid In',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-9">
        {!! Form::select('methodOfPayment',  ['USD' => 'USD', 'Tsh' => 'Tsh.', 'M-Pesa'=>'Tsh.(M-Pesa)'], null, ['class' => 'form-control', 'required'])!!}
    </div>
</div>

<div class="form-group has-warning">
    {!! Form::label('serviceStatus','Service Offered ?',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-9">
        {!! Form::select('serviceStatus',  ['1' => 'Yes', '0' => 'Not Yet'], null, ['class' => 'form-control', 'required'])!!}
    </div>
</div>

<div class="form-group has-warning">
    {!! Form::label('cardUsed','Card Used',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-9">
        {!! Form::select('cardUsed',  ['none' => 'None', 'c1' => 'Card 1', 'c2'=>'Card 2'], null, ['class' => 'form-control', 'required'])!!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description','Description',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-9">
        {!! Form::text('description',null, ['class' => 'form-control', 'placeholder'=>'Short, optional, description of payment']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('remarks','Remarks',['class' => 'col-sm-3 control-label'])!!}
    <div class="col-sm-9">
        {!! Form::textarea('remarks',null, ['class' => 'form-control', 'placeholder'=>'Short notes that will be helpful in the future']) !!}
    </div>
</div>





<div class="form-group">
    <div class="col-sm-9 col-sm-offset-3">
        {!! Form::submit('Save Payment', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

{!! Form::close() !!}






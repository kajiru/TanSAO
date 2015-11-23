<?php

namespace TanSAO\Http\Controllers;

use Illuminate\Http\Request;

use TanSAO\Http\Requests;
use TanSAO\Http\Controllers\Controller;

use Auth;
use Carbon\Carbon;
use TanSAO\payment;

class PaymentsController extends Controller
{

    public function __construct(){

        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.payments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.payments.test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        //Remove Comma separators
        $c = str_replace(",","",$request['cost']);
        $p = str_replace(",","",$request['paid']);

        //Set money values as Integers
        if( settype($c, "int") && settype($p,"int")){
            $request['cost'] = $c;
            $request['paid'] = $p;
        }

        $payment = new payment($request->all());
        $savedPayment = Auth::user()->payments()->save($payment);

        flash()->success('Payment Added!');
        return redirect('/payments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Payment::destroy($id);
        flash()->success('Payment Successfully Deleted!');
        return redirect('/payments');
    }
}

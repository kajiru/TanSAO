<?php

namespace TanSAO\Http\Controllers;

use Illuminate\Http\Request;

use TanSAO\Http\Requests;
use TanSAO\Http\Controllers\Controller;
use TanSAO\visa;
use TanSAO\Http\Requests\VisaApplicantRequest;
use Mail;

class VisaController extends Controller
{

    public function __construct(){

        $this->middleware('admin',['only'=>'index']);

     }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $applicants = visa::all();

        return view('visa.index', compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('visa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(VisaApplicantRequest $request)
    {
//        $visaData = $request->only('name', 'email', 'phoneNumber', 'travelDate', 'description');
//
//        Mail::send('emails.visaApplicantInfo', $visaData, function ($message) use ($visaData) {
//            $message->subject('New Visa Application')
//                    ->from('thetanzanian.tansao@gmail.com', 'TanSAO Notifications')
//                    ->to(config('visaApplications'))
//                    ->replyTo($visaData['email']);
//        });
//
//        $visa = new visa($request->all());

        //$visa->save();

        flash()->success("We're sorry that we can't process your request. Please visit our offices. ");

        return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('visa.show');
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
        visa::destroy($id);

        flash()->success('Visa Applicant Deleted');

        return redirect('/visa');
    }
}

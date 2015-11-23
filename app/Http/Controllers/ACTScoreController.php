<?php

namespace TanSAO\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use TanSAO\Http\Requests;
use TanSAO\Http\Controllers\Controller;
use TanSAO\actScore;
use TanSAO\student;
use Auth;


class ACTScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $score = new ACTScore($request->all());

        //Get Student Id using Previous Url.
        $studentId = substr(strrchr($request->session()->previousUrl(), '/'), 1) ;

        Student::find($studentId)->ACTScores()->save($score);

        flash()->success('Test Score Added!');

        return redirect('/students/'.$studentId);
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
        //
    }
}

<?php

namespace TanSAO\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use TanSAO\Http\Controllers\Controller;

use TanSAO\testDate;

use Auth;

class TestDatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('testDates.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('testDates.create');
    }

    /**
     * Save a newly added Test Date.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $testDate = new TestDate($request->all());

        $addedTestDate = Auth::user()->testDates()->save($testDate);

        flash()->success($addedTestDate->testName." has been successfully added!");

        return redirect('/admin');

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
        TestDate::destroy($id);
        flash()->success('Test Date Deleted');
        return redirect('/admin');
    }
}

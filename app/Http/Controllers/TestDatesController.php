<?php

namespace TanSAO\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use TanSAO\Http\Controllers\Controller;

use TanSAO\testDate;

use Auth;
use Storage;

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
     * Saves a newly added Test Dates FIle.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        //Save actual TestDates File
        $startDate = str_replace("/",".", $request->input('startDate'));
        $endDate = str_replace("/",".", $request->input('endDate'));
        $fileName = $startDate."-to-".$endDate."--TestDates";
        $request->file('tDates')->move(storage_path().'/app/testDatesFiles', $fileName.".pdf");

        //Save info related to testDates file
        $testDatesFile = "testDatesFiles.txt";
        Storage::append($testDatesFile,$fileName);
        flash()->success("File with test dates from ".$startDate." to ".$endDate." has been added!");
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

<?php

namespace TanSAO\Http\Controllers;

use Illuminate\Http\Request;

use TanSAO\Http\Requests;
use TanSAO\Http\Controllers\Controller;
use Storage;
use TanSAO\visit;

class AdminController extends Controller
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
        return view('admin.index');
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
    public function store()
    {
        //
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
     * Save an Uploaded Document For Public Viewing
     *
     * @param Request $request
     * @return redirect
     */
    public function manageUploads(Request $request)
    {
        $fileName = $request['fileName'].'.pdf';

        $request->file('file')->move(base_path().'/public/downloads/', $fileName);

        flash()->success('File successfully Uploaded');

        return redirect('/admin');
    }

    /**
     * Add a Student To the Achievement.
     * @param Request $request
     *
     *
     * @return redirect
     */
    public function addAchievement(Request $request){


        $year = 2015;

        //Get Student Info
        $studentInfo = $request->except('_token');
        $studentInfo['photo'] = $request->file('photo')->getClientOriginalName();

        //Add Content To Json File
        $a = Storage::get('achievements/'.$year.'.json');
        $b = json_decode($a, true);
        $b['2015'][] = $studentInfo;
        $c = json_encode($b);
        $savedAchievement = Storage::put('achievements/'.$year.'.json', $c);

        //Move Student's Photo
        if($savedAchievement){
           $d =  $request->file('photo')->move(base_path().'/public/images/achievements/'.$year, $studentInfo['photo']);
        }

        flash()->success('Student Achievement Added');
        return redirect('/admin');

    }


    /**
     * Add a Visit.
     * @param Request $request
     *
     *
     * @return redirect
     */
    public function addVisit(Request $request){

        $year = 2015;

        $visitInfo = $request->only(['title','bannerName', 'visitDate']);
        $visitInfo['bannerName'] = $request->file('banner')->getClientOriginalName();

        $visit = new Visit($visitInfo);
        $visit->save();

        //Move Visit Banner
        $d =  $request->file('banner')->move(base_path().'/public/images/visits/'.$year, $visitInfo['bannerName']);
        
        flash()->success('The University Visit has been Added');
        return redirect('/admin');

    }


}

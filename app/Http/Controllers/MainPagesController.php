<?php

namespace TanSAO\Http\Controllers;

use Illuminate\Http\Request;

use TanSAO\Http\Requests;
use TanSAO\Http\Controllers\Controller;

class MainPagesController extends Controller
{
    /**
     * Render the Home page
     *
     * @return Response
     */
    public function index()
    {
        return view('main.home');
    }

    /**
     * Render the About Us page
     *
     * @return Response
     */
    public function about()
    {
        return view('main.about');
    }

    /**
     *
     * Render the contacts Page
     *
     * @return Contacts View
     */
    public function contacts(){

        return view('main.contacts');
    }

    /**
     * Render the Tests Page
     *
     * @param null $testName
     *
     * @return Tests view.
     *
     */
    public function tests($testName = all){

          return view('main.tests.'.$testName);

    }

    /**
     * Render the Achievements Page
     *
     * @param int $year
     * @return Achievements view.
     *
     */
    public function achievements($year = 2015){

        return view('main.achievements.'.$year);

    }

    /**
     * Render Programs page
     *
     * @return a Program's view
     */
    public function programs($programName = 'all'){

        return view('main.programs.'.$programName);

    }

    /**
     * Render all Downloads available or Download a form directly.
     *
     * @param $item
     * @return \Illuminate\View\View
     */
    public function downloads($item = 'all'){

        return view('main.downloads.'.$item);
    }

    /**
     * Render visits page
     *
     * @param string $category
     * @return \Illuminate\View\View
     */
    public function visits($category = 'university'){
        return view('main.visits.'.$category);
    }

    /**
     * Render the Frequently Asked Questions Page
     *
     * @return \Illuminate\View\View
     */
    public function faq(){

        return view('main.faq');
    }




}

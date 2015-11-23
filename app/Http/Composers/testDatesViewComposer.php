<?php namespace TanSAO\Http\Composers;

use Illuminate\Contracts\View\View;
use TanSAO\testDate;
use Carbon\Carbon;

/*
* Composes the Test Dates View on the Sidebar found in all(except home) public pages.
*/
class testDatesViewComposer
{

    public function compose( View $view){

        $tDate = new TestDate();

        $aDates  =  $tDate::where('testName','ACT')->where('testDay','>',Carbon::now())->orderBy('testDay', 'asc')->take(2)->get();
        $sDates  =  $tDate::where('testName','SAT')->where('testDay','>',Carbon::now())->orderBy('testDay', 'asc')->take(2)->get();
        $s2Dates =  $tDate::where('testName','SAT 2')->where('testDay','>',Carbon::now())->orderBy('testDay', 'asc')->take(2)->get();
        $tDates  =  $tDate::where('testName','TOEFL')->where('testDay','>',Carbon::now())->orderBy('testDay', 'asc')->take(3)->get();

        $view->with('aDates', $aDates)
             ->with('sDates', $sDates)
             ->with('s2Dates',$s2Dates)
             ->with('tDates',$tDates);

    }
}

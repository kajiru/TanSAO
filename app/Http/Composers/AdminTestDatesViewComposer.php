<?php namespace TanSAO\Http\Composers;

use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use TanSAO\testDate;


/*
 * Composes The TestDates-only-view(index.blade.php)
 */
class AdminTestDatesViewComposer
{
    public function compose( View $view){

        $tDate = new TestDate();

        $tDates = $tDate::where('testDay','>', Carbon::now() )->orderBy('testDay', 'asc')->get();

        $view->with('testDates',$tDates);

    }
}

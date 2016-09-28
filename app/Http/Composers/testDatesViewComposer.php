<?php namespace TanSAO\Http\Composers;

use Illuminate\Contracts\View\View;
use TanSAO\testDate;
use Carbon\Carbon;

/*
* Composes the Test Dates View on the Sidebar found in all(except home) public pages.
*/
class testDatesViewComposer
{

    public function compose(View $view){

        $files = array();
        $datesFile = storage_path()."/app/testDatesFiles.txt";

        $counter = 0;
        $file_handle = fopen($datesFile, "r");
        while (!feof($file_handle)) {
            $line = fgets($file_handle);
            $files = array_add($files, $counter, $line);
            $counter++;
        }
        fclose($file_handle);

       $view->with('tDateFiles', $files);

    }
}

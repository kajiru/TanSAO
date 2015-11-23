<?php
/**
 * Created by PhpStorm.
 * User: jaspergeophrey
 * Date: 7/29/15
 * Time: 8:26 PM
 */

namespace TanSAO\Http\Composers;

use Illuminate\Contracts\View\View;
use Carbon\Carbon;


class downloadableFilesViewComposer {

    public function compose(View $view)
    {
        $dir = base_path().'/public/downloads/';

        $files = [];

        $l = strlen($dir)+1;

        foreach( glob($dir.'/*.pdf') as $file) {
            array_push($files, substr($file, $l));
        }

     return $view->with('files', $files);
    }

}
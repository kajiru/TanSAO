<?php
/**
 * Created by PhpStorm.
 * User: jaspergeophrey
 * Date: 7/30/15
 * Time: 2:03 PM
 */

namespace TanSAO\Http\Composers\MainPages;

use Illuminate\Contracts\View\View;
use Storage;

    class AchievementsViewComposer {


        public function compose(View $view){

            $achievements = json_decode(Storage::get('achievements/2015.json'), true);

            $student = $achievements['2015'];

            $view->with('students', $student);

        }


    }
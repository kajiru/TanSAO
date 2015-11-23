<?php namespace TanSAO\Http\Composers;

use Illuminate\Contracts\View\View;
use TanSAO\user;
use Auth;


class userProfileViewComposer
{

    public function compose(View $view){


        $user = user::where('id', Auth::user()->id)->first();


        $view->with('user', $user);


    }
}

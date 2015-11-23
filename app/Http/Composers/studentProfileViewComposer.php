<?php namespace TanSAO\Http\Composers;

use Illuminate\Contracts\View\View;
use TanSAO\student;
use Auth;


class studentProfileViewComposer
{

    public function compose(View $view){

        $id = $view->getData()['id'];


        $student = Student::with(['user','actScores','testAccounts'])->findOrFail($id);


        if( ($student->user_id == Auth::user()->id) || (Auth::user()->status == 0)){

           $view->with('student', $student);

        }else{

            return view('main.home');

        }

    }
}

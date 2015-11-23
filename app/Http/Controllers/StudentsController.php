<?php

namespace TanSAO\Http\Controllers;

use TanSAO\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TanSAO\Http\Requests\StudentAccountRequest;

use Auth;
use Cache;
use Carbon\Carbon;
use TanSAO\student;
use TanSAO\user;
use TanSAO\testAccount;


class StudentsController extends Controller
{

    /**
     *Declare Middleware to be Used.
     */
    public function __construct(){

        $this->middleware('student',['except'=>['create','store']]);

        $this->middleware('infoViewer',['only'=>'show']);

        //Limit Access to Students-management Page
        $this->middleware('admin', ['only'=>'manage']);
    }

    /**
     * Display the student's home page.
     *
     * @return the student's home page with a Student's Object.
     * Note: For a non-student(admins, editors, etc), an empty
     * student object is returned.
     */
    public function index()
    {


        //Move this to view Composer or so...
        if(Auth::user()->status == 3){

            $registeredStudent = Student::where('user_id',Auth::user()->id)->first();

            return view('students.index', compact('registeredStudent'));

        }else{
        //For Non-Students
            return view('students.index', ['registeredStudent'=>new Student()]);
        }


    }

    /**
     * Show the form for registering as a TanSAO Student.
     *
     * @return Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Save a newly Registered Student
     *
     * Needs Refactoring
     *
     * @return Response
     */
    public function store( StudentAccountRequest $request)
    {

        flash()->info("We're deeply sorry that we could not process your online registration. Plese visit our office for more info");
        return redirect('/home');

//        $testAccountFields = ['username','password','testingDate','testName'];
//
//        $StudentInfo = $request->except(array_merge($testAccountFields,['email']));
//
//        $userInfo = $request->only(['email','firstName']);
//
//        $testAccountInfo = $request->only($testAccountFields);
//
//        $student = new Student($StudentInfo);
//
//         //First, Create A User.
//        $createdUser = User::create(['name'=>$userInfo['firstName'],
//                                     'email'=>$userInfo['email'],
//                                     'password'=>bcrypt('student'),
//                                     'status'=>3]);
//
//         //Register the Created user As a Student
//        $registeredStudent = User::find($createdUser->id)->Students()->save($student);
//
//
//        //If TestAccount is available, Add TestAccount to Student Account
//        if($testAccountInfo['username'] != ""){
//            $tA = new testAccount($testAccountInfo);
//
//            $ctD = student::find($registeredStudent->id)->testAccounts()->save($tA);
//
//            flash()->success('Test Account Added');
//        }
//
//        //Redirect to Appropriate Page.
//        if(Auth::check()){
//            flash()->success($registeredStudent->firstName.' has been successfully registered!');
//            return redirect('/admin/students');
//
//        }else{
//            if(Auth::attempt(['email' => $createdUser->email, 'password' => 'student'])) {
//
//                flash()->success('Hello '.$registeredStudent->firstName.', Welcome to your Student Profile. Please visit our offices to complete your registration.');
//                return redirect('/students/'.$registeredStudent->id);
//
//            }else{
//                flash()->success('Hello '.$registeredStudent->firstName.', you have successfully registered! Log in using the default password: "student" ');
//                return redirect('/home');
//            }
//
//        }


    }



    /**
     * Display a student's Profile.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id ,Request $request)
    {
        return view('students.show',compact('id'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request) //Method injection is Used
    {
        $student = Student::findOrFail($id);

        $student->update($request->all());

         flash()->success('Updated!');

        return redirect('/students/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Student::destroy($id);

        flash()->success('Student has been successfully deactivated!');

       return redirect('/admin/students');
    }

    /**
     * Used by Administration
     * Manages all students
     */
    public function manage()
    {
         //Using Memcached
//        $students = Cache::rememberForever('testStudents', function(){
//            return Student::where('registrationStatus', '2')->get();
//        });

        //Get Contract Students, with their Scores, Only!
        $students = Student::with('actScores')->where('registrationStatus', '2')->get();

        return view('admin.students.index',compact('students'));
    }


}

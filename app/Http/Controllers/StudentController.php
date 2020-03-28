<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Hash;

class StudentController extends Controller
{
    public function studentRegister()
    {
        return view('student.modules.register');
    }
    public function studentRegisterRequest(Request $request)
    {
        // print_r($request->all());
        $studentData = new Student();
        $studentData->Name= $request->name;
        $studentData->Email= $request->email;
        $studentData->Password= $request->password;
        $studentData->Country= $request->country;
        $studentData->City= $request->city;
        $studentData->Address= $request->address;
        $studentData->Date_of_birth= $request->date_of_birth;
        $studentData->Contact_no= $request->contact_no;

        $studentData->save();
        return redirect()->route('student-login');

    }

    public function studentLogin()
    {
        return view('student.modules.login');
    }
    public function studentLoginRequest(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');

        $user_name = Student::where('Name'  , '=', $name )->first();
        $user_password = Student::where('Password'  , '=', $password )->first();
        if (!($user_name && $user_password)) {
            return redirect()->back()->with(['success'=>false, 'message' => 'Login Fail, please check User Name and password']);
        }
            // return response()->json(['success'=>true,'message'=>'success']);
        return redirect()->route('studentHome');
    }

    
}

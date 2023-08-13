<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Notification;
use App\Notifications\NewAdmissionAdded;
use App\Models\Student;
use App\Models\User;
use App\Models\Notification as AppNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/add-student');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::paginate(15, ['*'], 'page');
        return view('dashboard/view-student',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student= new student();
        $student->studentno= date('Y')."-".mt_rand(1000, 9999);
        $student->firstname=$request->firstname;
        $student->lastname=$request->lastname;
        $student->gender=$request->gender;
        $student->dateofbirth=$request->dateofbirth;
        $student->nationality=$request->nationality;
        $student->levelofstudy=$request->levelofstudy;
        $student->religion=$request->religion;
        $student->grades=$request->grades;
        $student->class=$request->class;
        $student->schoolattended=$request->schoolattended;
        $student->healthinformation=$request->healthinformation;
        $student->interest=$request->interest;
        $student->pfirstname=$request->pfirstname;
        $student->plastname=$request->plastname;
        $student->pgender=$request->pgender;
        $student->email=$request->email;
        $student->ninnumber=$request->ninnumber;
        $student->preligion=$request->preligion;
        $student->occupation=$request->occupation;
        $student->physicaladdress=$request->physicaladdress;
        $student->phonenumber=$request->phonenumber;
        
        if($student->save())
        {
            // $users = User::where('role', 'admin')->get(); 
            // Notification::send($users, new NewAdmissionAdded($student));
            $request->session()->flash('success', 'Student Added Successfully.');
            return redirect('/add-student');
        }else{
            $request->session()->flash('failed', 'Something Went Wrong.');
            return redirect('/add-student');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('dashboard.edit-student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('dashboard.student-details', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->update([
            'studentno'=> $student->studentno,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'dateofbirth'=>$request->dateofbirth,
            'nationality'=>$request->nationality,
            'levelofstudy'=>$request->levelofstudy,
            'religion'=>$request->religion,
            'grades'=>$request->grades,
            'class'=>$request->class,
            'schoolattended'=>$request->schoolattended,
            'healthinformation'=>$request->healthinformation,
            'interest'=>$request->interest,
            'pfirstname'=>$request->pfirstname,
            'pgender'=>$request->pgender,
            'email'=>$request->email,
            'ninnumber'=>$request->ninnumber,
            'preligion'=>$request->preligion,
            'occupation'=>$request->occupation,
            'physicaladdress'=>$request->physicaladdress,
            'phonenumber'=>$request->phonenumber
        ]);
        
        $request->session()->flash('success', 'Student Updated Successfully.');
        return redirect()->route('student-edit', $student->id);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student, Request $request)
{
    if ($student->delete()) {
        $request->session()->flash('success', 'Student Deleted Successfully.');
        return redirect('/view-student');
    } else {
        $request->session()->flash('failed', 'Deleting Student Failed.');
        return redirect('/view-student');
    }
}
}

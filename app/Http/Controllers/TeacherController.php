<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/add-teacher');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $teachers = Teacher::paginate(20);
        return view('dashboard/teachers-list',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Create new teacher
        $teacher= new Teacher();
        $teacher->teacher_id= date('Y')."-".mt_rand(1000, 9999);
        $teacher->name = $request->firstname . ' ' . $request->lastname;
        $teacher->email=$request->teache_email;
        $teacher->gender=$request->gender;
        $teacher->dateofbirth=$request->dateofbirth;
        $teacher->phone=$request->phone;
        $teacher->joiningdate=$request->joiningdate;
        $teacher->experience=$request->experience;
        $teacher->address=$request->address;
        $teacher->class=$request->class;
        $teacher->stream=$request->stream;
        $teacher->subject=$request->subject;
        //validate user credentials
        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
            

        ]);
        // Create new user
        $user = new User();
        $user ->username = $request->username;
        $user ->email = $request->email;
        $user ->password = Hash::make($request->password);
        $user ->role ='teacher';
        $use = $user->save();

        if($teacher->save())
        {
            $request->session()->flash('success', 'Teacher Added Successfully.');
            return redirect('/add-teacher');
        }else{
            $request->session()->flash('failed', 'Something Went Wrong.');
            return redirect('/add-teacher');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}

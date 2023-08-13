<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewAdmissionAdded;
use App\Models\Admission;
use App\Models\User;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/add-admission');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admissions = Admission::paginate(15, ['*'], 'page');
        return view('dashboard/admission-list',compact('admissions'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo="";
        //Getting attached academicreport file
        if($request->file('academicreport'))
        {
            $cover =$request->file('academicreport');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
            $photo=$cover->getFilename().'.'.$extension;
        }
        $user=User::find(auth()->id());
        $admission= new Admission();
        $admission->admissionno=date('Y')."-".mt_rand(1000, 9999);
        $admission->firstname=$request->firstname;
        $admission->lastname=$request->lastname;
        $admission->gender=$request->gender;
        $admission->dateofbirth=$request->dateofbirth;
        $admission->nationality=$request->nationality;
        $admission->levelofstudy=$request->levelofstudy;
        $admission->religion=$request->religion;
        $admission->grades=$request->grades;
        $admission->class=$request->class;
        $admission->schoolattended=$request->schoolattended;
        $admission->healthinformation=$request->healthinformation;
        $admission->interest=$request->interest;
        $admission->pfirstname=$request->pfirstname;
        $admission->plastname=$request->plastname;
        $admission->pgender=$request->pgender;
        $admission->email=$request->email;
        $admission->ninnumber=$request->ninnumber;
        $admission->preligion=$request->preligion;
        $admission->occupation=$request->occupation;
        $admission->physicaladdress=$request->physicaladdress;
        $admission->phonenumber=$request->phonenumber;
        
        if($request->file('academicreport')){
            $admission->academicreport=$cover->getFilename().'.'.$extension;
        }
        else{
            $admission->academicreport=null;
        }
        if($admission->save())
        {
            $users = User::where('role', 'admin')->get(); 
            Notification::send($users, new NewAdmissionAdded($admission));
            $request->session()->flash('success', 'Admission Submitted Successfully.');
            return redirect('/add-admission');
        }else{
            $request->session()->flash('failed', 'Something Went Wrong.');
            return redirect('/add-admission');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/register');
    }

    public function createuser()
    {
        return view('dashboard/create-user');
    }


    public function login(Request $request)
    {
        
        if(!Auth::attempt($request->only(['email','password']))){
            return redirect()->back()->with('message','username or password incorrect !!');
            
        }
        $user=User::where('email',$request->email)->first();
        return redirect('dashboard');
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = new User();
        $user ->full_name = $request->full_name;
        $user ->email = $request->email;
        $user ->password = Hash::make($request->password);
        $user ->role = $request->role;
        
        if($use = $user->save()){
         return back()->with('success','User Account Created Successfully');
        } else{
            return back()->with('fail','Something Went Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::latest()->get();
        return view('dashboard.view-user-list', compact('users'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(){
        auth()->logout();
        return redirect('/login');
        
    }
}

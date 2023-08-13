<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/add-visitor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $visitors=Visitor::all();
        return view('dashboard/visitor-list', compact('visitors'));
    }

    public function check()
    {
        $visitors=Visitor::all();
        return view('dashboard/check-out', compact('visitors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create a new visitor instance
        $visitor = new Visitor();
        $visitor->firstname = $request->firstname;
        $visitor->lastname = $request->lastname;
        $visitor->phone = $request->phone;
        $visitor->email = $request->email;
        $visitor->company = $request->company;
        $visitor->idno = $request->idno;
        $visitor->personyourvisting = $request->personyourvisting;
        $visitor->roomno = $request->roomno;
        $visitor->purpose = $request->purpose;

        // Save the visitor information
        if ($visitor->save()) {
            return back()->with('success', 'Visitor information submitted successfully.');
        } else {
            return back()->with('error', 'Something went wrong. Please try again.');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        //
    }
}

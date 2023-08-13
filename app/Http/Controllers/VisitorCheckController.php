<?php

namespace App\Http\Controllers;

use App\Models\VisitorCheck;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors=VisitorCheck::all();
        
        return view('dashboard.visitors-report', compact('visitors'));
    }

    public function visitor()
    {
     
        $visitors=Visitor::all();
        return view('dashboard/check-in', compact('visitors'));

    }

    public function checkInVisitor(Request $request)
    {
        $visitorId = $request->input('visitor_id');
        $checkinDatetime = $request->input('checkin_datetime');

        // Create a new instance of the VisitorCheck model
        $visitorCheck = new VisitorCheck();
        $visitorCheck->visitor_id = $visitorId;
        $visitorCheck->checkin_datetime = $checkinDatetime;
        $visitorCheck->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Visitor checked in successfully');
    }

    public function checkOutVisitor(Request $request)
    {
        $visitorId = $request->input('visitor_id');
        $checkoutDatetime = now(); // Current date and time

        // Find the visitor check record by visitor ID
        $visitorCheck = VisitorCheck::where('visitor_id', $visitorId)->first();

        if ($visitorCheck) {
            // Update the check-out datetime
            $visitorCheck->checkout_datetime = $checkoutDatetime;
            $visitorCheck->save();

            // Redirect back or to a success page
            return redirect()->back()->with('success', 'Visitor checked out successfully');
        } else {
            // Visitor check record not found
            return redirect()->back()->with('error', 'Visitor check record not found');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VisitorCheck  $visitorCheck
     * @return \Illuminate\Http\Response
     */
    public function show(VisitorCheck $visitorCheck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VisitorCheck  $visitorCheck
     * @return \Illuminate\Http\Response
     */
    public function edit(VisitorCheck $visitorCheck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VisitorCheck  $visitorCheck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisitorCheck $visitorCheck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VisitorCheck  $visitorCheck
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisitorCheck $visitorCheck)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;
use App\Ticket;
use Auth;

class AdmissionTestDates extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'clearance']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates = Date::all();
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        return view('admin.dates.index', compact('ticketN','dates'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        return view('admin.dates.create', compact('ticketN'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date'=>'required|max:120',
            'venue'=>'required|max:120',
        ]);

        $date = new Date();

        $date->date = request('date');
        $date->venue = request('venue');

        $date->save();
        
        return redirect('/admin/dates')->with('flash_message', 'Admission Date Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
    
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Date $date)
    {
        $date->delete();

        return redirect('/admin/publications')->with(
            'flash_message', 'Date Deleted Successfully'
        );
    }
}

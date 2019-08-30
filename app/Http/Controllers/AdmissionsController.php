<?php

namespace App\Http\Controllers;

use App\Admissions;
use Auth;
use App\Ticket;
use Illuminate\Http\Request;
use App\Exports\AdmissionExport;
use Maatwebsite\Excel\Facades\Excel;

class AdmissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        $admissions = Admissions::latest()->paginate(30);
        
        return view('admin.admissions.index', compact('ticketN', 'admissions'));
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
     * @param  \App\Admissions  $admissions
     * @return \Illuminate\Http\Response
     */
    public function show(Admissions $admissions, $id)
    {
        $admission = \App\Admissions::findOrFail($id);
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        return view('admin.admissions.show', compact('ticketN', 'admission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admissions  $admissions
     * @return \Illuminate\Http\Response
     */
    public function edit(Admissions $admissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admissions  $admissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admissions $admissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admissions  $admissions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admissions $admissions)
    {
        //
    }

    public function export() 
    {
        return Excel::download(new AdmissionExport, 'admission_test.xlsx');
    }
}

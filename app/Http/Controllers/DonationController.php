<?php

namespace App\Http\Controllers;

use App\Ticket;
use Auth;
use App\Donation;
use App\Exports\DonationExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class DonationController extends Controller
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
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        $donations = Donation::latest()->paginate(30);
        
        return view('admin.donations.index', compact('ticketN', 'donations'));
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

        return view('admin.donations.create', compact('ticketN'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donation = new Donation();
        $donation->order_id = request('reg_num');
        $donation->tracking_id = request('tracking_id');
        $donation->billing_name = request('name');
        $donation->billing_tel = request('phone');
        $donation->billing_email = request('email');
        $donation->billing_address = request('address');
        $donation->billing_city = request('city');
        $donation->billing_state = request('state');
        $donation->billing_zip = request('zip');
        $donation->billing_country = request('country');
        $donation->amount = request('amount');
        $donation->order_status = request('order_status');

        $donation->save();

        return redirect('/admin/donations')->with('flash_message', 'Donation Details Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        $donation = \App\Donation::findOrFail($id);
        return view('admin.donations.show', compact('donation','ticketN'));
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

    public function export() 
    {
        return Excel::download(new DonationExport, 'donations.xlsx');
    }
}

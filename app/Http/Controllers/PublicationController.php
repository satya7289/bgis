<?php

namespace App\Http\Controllers;

use App\Publication;
use App\Ticket;
use Illuminate\Http\Request;
use Auth;

class PublicationController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'clearance']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::all();
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        return view('admin.publications.index', compact('ticketN','publications'));
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
        return view('admin.publications.create', compact('ticketN'));
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
            'title'=>'required|max:120',
            'image'=>'required',
            'file' => 'required',
            'category' => 'required',
            'year'=>'required|digits:4'
        ]);

        $pub = new Publication();

        $pub->title = request('title');
        $pub->category = request('category');
        $pub->image = request()->file('image')->store('public/images/publications');
        $pub->file = request()->file('file')->store('public/pdf');
        $pub->year = request('year');

        $pub->save();
        
        return redirect('/admin/publications')->with('flash_message', 'Publication Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        return view('admin.publications.edit', compact('publication','ticketN'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        $this->validate($request, [
            'title'=>'required|max:120',
            'year'=>'required|digits:4'
        ]);
        if (request('image')) {
            $publication->image = request()->file('image')->store('public/images/publications');
        }

        if (request('file')) {
            $publication->file = request()->file('file')->store('public/pdf');
        }
        $publication->title = request('title');
        $publication->year = request('year');

        $publication->save();

        return back()->with('flash_message','Changes Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();

        return redirect('/admin/publications')->with(
            'flash_message', 'Publication Deleted Successfully'
        );
    }
}

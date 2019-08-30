<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Ticket;
use Auth;
use Illuminate\Http\Request;

class FacultyController extends Controller
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

        $faculties = Faculty::sorted()->get();

        return view('admin.faculty.index', compact('ticketN', 'faculties'));
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
        return view('admin.faculty.create', compact('ticketN'));
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
            'name'=>'required|max:120',
            'image'=>'required',
            'description'=>'required'
        ]);
        $faculty = new Faculty();
        
        $faculty->name = request('name');
        $faculty->image = request()->file('image')->store('public/images/faculty');
        $faculty->description = request('description');
        $faculty->position = request('position');
        
        $faculty->save();

        return redirect('/admin/faculty')->with('flash_message', 'Faculty Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();

        return view('admin.faculty.edit', compact('ticketN','faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function updateOne(Request $request, $id)
    {
        $faculty = \App\Faculty::findOrFail($id);
        $faculty->update([
            'active' => request()->has('active')
        ]);

        return back()->with(
            'flash_message', 'Changes Applied'
        ); 
    }

    public function update(Request $request, Faculty $faculty)
    {
        $this->validate($request, [
            'name'=>'required|max:120',
            'description'=>'required',
        ]);

        $faculty->update([
            'name' => request('name'),
            'description' => request('description'),
            'position' => request('position'),
        ]);

        if (request('image')) {
            $faculty->update([
                'image' => request()->file('image')->store('public/images/news')
            ]);
        }


        return back()->with(
            'flash_message', 'Changes Successsfull'
        );; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        $faculty->delete();

        return redirect('/admin/faculty')->with(
            'flash_message', 'Faculty Deleted Successfully'
        );
    }

    public function orderUp($id)
    {
        $faculty = Faculty::find($id);
        $previous = Faculty::where('sid','<', $faculty->sid)->orderBy('sid','desc')->first();
        if (!$previous){
            return back();
        }
        $faculty->moveBefore($previous);

        return back();
    }

    public function orderDown($id)
    {
        $faculty = Faculty::find($id);
        $next = Faculty::where('sid','>', $faculty->sid)->orderBy('sid','asc')->first();
        if (!$next){
            return back();
        }
        $faculty->moveAfter($next);

        return back();
    }
}

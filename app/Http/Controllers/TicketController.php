<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ticket;
use App\User;
use Auth;
use Session;
use Spatie\Permission\Models\Role;

class TicketController extends Controller
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
        $tickets = Ticket::latest()->get();
        $owner = Ticket::latest()->where('owner_id', Auth::id())->get();
        $against = Ticket::latest()->where('against_id', Auth::id())->get();
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();

        return view('admin.tickets.index', compact('owner', 'against','tickets', 'ticketN'));
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
        $users = User::all();
        return view('admin.tickets.create',[
            'users'=>$users,
            'ticketN' => $ticketN,
        ]);
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
            'title'=>'required|max:100',
            'body' =>'required',
            ]);

        $ticket = new Ticket();
        
        $ticket->owner_id = Auth::id();
        $ticket->against_id = $request['against'];
        $ticket->title = $request['title'];
        $ticket->body = $request['body'];

        $ticket->save();

    //Display a successful message upon save
        return redirect()->route('tickets.show', $ticket->id);
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
        $ticket = Ticket::findOrFail($id); //Find post of id = $id

        return view ('admin.tickets.show', compact('ticket','ticketN'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $ticket = Ticket::findOrFail($id);
        $ticketN = Ticket::where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        if (Auth::id() !== $ticket->owner_id){
            return abort('401');
        }

        return view('admin.tickets.edit', compact('ticket', 'ticketN'));
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
        

        $ticket = Ticket::findOrFail($id);
        $ticket->closed = true;
        $ticket->save();

        return redirect()->route('tickets.show', 
            $ticket->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->route('tickets.index')
            ->with('flash_message',
             'Ticket successfully deleted');

    }
}

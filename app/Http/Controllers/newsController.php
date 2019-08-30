<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Ticket;
use Auth;
use ImageOptimizer;

class newsController extends Controller
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
        $events = \App\News::latest()->paginate('15');
        return view('admin.events',[
            'name' => 'adminEvents',
            'events' => $events,
            'ticketN' => $ticketN
        ]);
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
        $contactCount = \App\Contact::where('completed', 0)->count();
        return view('admin.eventsCreate',[
            'name' => 'adminEventsCreate',
            'contactsCount' => $contactCount,
            'pageTitle' => 'Add New | News and Events',
            'ticketN' => $ticketN
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
            'title'=>'required|max:200',
            'image'=>'required',
            'exp'=>'required|max:300',
            'description'=>'required',
        ]);


        $news = new News();
        
        $news->title = request('title');
        $news->image = request()->file('image')->store('public/images/news');
        $news->description = request('description');
        $news->exp = request('exp');
        
        $news->save();

        return redirect('/admin/events')->with(
            'flash_message', 'News/ Event Created Successfully'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        $contactCount = \App\Contact::where('completed', 0)->count();
        $event = \App\News::find($id);
        return view('admin.eventsShow',[
            'name' => 'adminEventsShow',
            'event' => $event,
            'contactsCount' => $contactCount,
            'pageTitle' => $event->title.'| News and Events',
            'ticketN' => $ticketN,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        $contactCount = \App\Contact::where('completed', 0)->count();
        $event = \App\News::find($id);
        return view('admin.eventsEdit',[
            'name' => 'adminEventsEdit',
            'event' => $event,
            'contactsCount' => $contactCount,
            'pageTitle' => 'Edit | News and Events',
            'ticketN' => $ticketN,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = \App\News::find($id);
        $news->title = request('title');
        $news->description = request('description');
        $news->exp = request('exp');

        if (request('image')) {
            $news->image = request()->file('image')->store('public/images/news');
        }

        $news->save();

        return redirect('/admin/events/'.$id.'/edit')->with('message','Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = \App\News::findOrFail($id)->delete();

        return redirect('/admin/events');

    }
}

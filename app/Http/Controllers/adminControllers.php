<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Ticket;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Exports\QueryExport;
use Maatwebsite\Excel\Facades\Excel;

class adminControllers extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'clearance'])->except('home');
    }
   
    public function home() {
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        $contactCount = \App\Contact::where('completed', 0)->count();
        return view('admin.home', [
            'name' => 'adminHome',
            'contactsCount' => $contactCount,
            'pageTitle' => 'Home',
            'ticketN' => $ticketN,
        ]);
    }

    public function contact() {
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        $contactList = \App\Contact::latest()->paginate(30);
        return view('admin.contact',[
            'contacts' => $contactList,
            'ticketN' => $ticketN,
        ]);
    }

    public function query() {
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        $queries = \App\Help::latest()->paginate(30);
        return view('admin.query',[
            'name' => 'Admission Query',
            'queries' => $queries,
            'ticketN' => $ticketN,
        ]);
    }

    public function contactUpdate(Contact $contact) {
        $contact->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }

    public function changePassword() {
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        return view('admin.changepassword',[
            'name' => 'Change Password',
            'ticketN' => $ticketN,
        ]);
    } 

    public function postChangePassword(Request $request) {
        $this->validate($request, [
            'password'=>'required|min:6|confirmed'
        ]);

        $current_password = Auth::User()->password;
        if(Hash::check(\request('current-password'), $current_password))
      {           
        $user_id = Auth::User()->id;                       
        $obj_user = User::find($user_id);
        $obj_user->password = Hash::make(\request('password'));;
        $obj_user->save();
        return redirect('/admin')->with('flash_message', 'Password Changed Successfully');
    } else {
        return back()->with('error_message','Current Password is incorrect.');
    }
}

    public function queryExport() 
    {
        return Excel::download(new QueryExport, 'admission_queries.xlsx');
    }

    public function homeVIdeo() {
        $ticketN = Ticket::latest()->where([
            'against_id' => Auth::id(),
            'closed' => false,
        ])->get();
        $yvlink = \App\HomeVideo::find(1);
        return view('admin.homevideo',[
            'name' => 'Change Home Video',
            'ticketN' => $ticketN,
            'yvlink' => $yvlink,
        ]);
    } 

    public function postHomeVideo(Request $request) {

        $this->validate($request, [
            'home-video'=>'required'
        ]);

        $yvlink = \App\HomeVideo::find(1);
        $yvlink->link = \request('home-video');
        $yvlink->save();

        return back()->with('flash_message', 'Video Updated Successfully!');
    }


}

<?php
//--------------------------------------------------------------New Code For SEO-------------------------------------------------------------


namespace App\Http\Controllers;

use App\Page;
use Mail;
use App\Contact;
use App\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Help;
use Illuminate\Support\Facades\Storage;


use Appnings\Payment\Facades\Payment;
use Sunra\PhpSimple\HtmlDomParser;


class Controllers extends Controller
{

    public function home()
    {
        $home_video = \App\HomeVideo::find(1);
        $news = \App\News::latest()->take(6)->get();

        $viewName = 'Home';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
            $images = array(
                'images/hom-hero.png',
                'images/slider3.jpg',
                'images/slider4.png',
                'images/slider1.jpg',
                'images/slider2.jpg',
                'images/bgis_home.jpg',
                'images/pslides/pslide1.jpg',
                'images/pslides/pslide2.jpg',
                'images/pslides/pslide3.jpg',
                'images/logon.png',
                'images/s1.png',
                'images/s2.png',
                'images/s3.png',
            );
            ImageController::createAndSaveImages($images,$page_info);
        }
        return view($viewName, [
            'name' => 'home',
            'showPagesHero' => 0,
            'news' => $news,
            'yvlink' => $home_video,
            'page' => $page_info, // new changes for seo
        ]);
    }

    public function about()
    {
        $viewName = 'About';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                         // Create New Page Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
            $images = array(
                'images/about-w.jpg',
                'images/faculty/laxmidhar-behera.jpg',
                'images/founder-bgis.jpg',
                'images/hhgopalkrishna.jpg',
                'images/facilities/bgis_new_campus1.jpg',
                'images/facilities/bgis_new_campus2.jpg',
                'images/facilities/bgis_new_campus3.jpg',
                'images/facilities/bgis_new_campus4.jpg',
                'images/facilities/bgis_new_campus5.jpg',
                'images/facilities/lab.jpg',
                'images/facilities/computerlab.jpg',
                'images/facilities/bgis_medical_care.png',
                'images/facilities/sky.jpg',
                'images/facilities/project.jpg',
                'images/facilities/solarpower.jpg',
                'images/facilities/library.jpg',
                'images/facilities/chemlab.jpg',
                'images/facilities/ashram.jpg',
                'images/facilities/goshala.jpg',
                'images/facilities/prasadam.jpg',
                'images/facilities/sports.jpg',
                'images/facilities/bgis_digital_classrooms.jpg',
            );
            ImageController::createAndSaveImages($images,$page_info);
        }

        $tab = Input::get('tab');
        return view($viewName, [
            'name' => 'about',
            'showPagesHero' => 1,
            'pageName' => 'ABOUT US',
            'imageName' => 'header-about.JPG',
            'tab' => $tab,
            'page' => $page_info,  // new changes for seo
        ]);
    }

    public function contact()
    {
        $viewName = 'Contact';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
        }
        return view($viewName, [
            'name' => 'contact',
            'showPagesHero' => 1,
            'pageName' => 'CONTACT',
            'imageName' => 'header-contact.jpg',
            'page'=>$page_info,     // Changes for seo
        ]);
    }

    public function contactSubmit()
    {

        request()->validate([
            'name' => 'required|max:120',
            'email' => 'required|email',
            'phone' => 'required|digits_between:5,15',
            'subject' => 'required|max:200',
            'message' => 'required|max:600',
            'captcha' => 'required|captcha'
        ]);

        $contact = new Contact();
        $contact->name = \request('name');
        $contact->email = \request('email');
        $contact->phone = \request('phone');
        $contact->subject = \request('subject');
        $contact->message = \request('message');

        $contact->save();

        Mail::to('bgis.services@gmail.com')->send(
            new \App\Mail\ContactForm($contact)
        );

        return back()->with('flash_message', 'Your Query has been successfully submitted. We will get back to you shortly.');
    }

    public function admissions()
    {
        $viewName = 'Admissions';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
        }
        $news = \App\News::latest()->take(6)->get();
        $dates = \App\Date::all();
        $tab = Input::get('tab');
        return view($viewName, [
            'name' => 'admissions',
            'showPagesHero' => 1,
            'pageName' => 'ADMISSION',
            'imageName' => 'header-adm.jpg',
            'tab' => $tab,
            'news' => $news,
            'dates' => $dates,
            'page'=>$page_info,             // Changes for SEO
        ]);
    }

    public function contribute()
    {
        $viewName = 'Contribute';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
            $images = array(
                'images/icons/sponsor.png',
                'images/icons/construction.png',
                'images/icons/cow.png',
                'images/icons/invest.png',
                'images/icons/nature.png',
            );
            ImageController::createAndSaveImages($images,$page_info);
        }
        $tab = Input::get('tab');
        return view($viewName, [
            'name' => 'contribute',
            'showPagesHero' => 1,
            'pageName' => 'CONTRIBUTE',
            'imageName' => 'header-contribute.jpg',
            'tab' => $tab,
            'page'=>$page_info,     //Changes for SEO
        ]);
    }

    public function academics()
    {
        $viewName = 'Academics';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
            $images = array(
                'images/academic1.jpg',
                'images/academic2.jpg',
                'images/academic_bgis1.jpg',
                'images/academic_bgis2.jpg',
                'images/results/gauthameshwar.png',
                'images/results/mayank.png',
                'images/results/sarvagya.png',
                'images/results/dilip.png',
                'images/results/amargupta.png',
                'images/results/rajkumar.png',
                'images/results/uttamgupta.png',
                'images/results/govindamvats.png',
                'images/results/arjunyaduvanshi.png',
                'images/results/devavratwagle.png',
                'images/results/govinddas.png',
                'images/results/kapilmawai.png',
                'images/results/harshgupta.png',
                'images/results/akashlohkna.png',
                'images/results/sanchitlakra.png',
                'images/results/krishnamurari.png',
                'images/results/abhishekmishra.png',
                'images/results/gauravlakra.png',
                'images/results/mayankdubey.png',
                'images/results/gautameshwar2.png',
                'images/results/divyanshgupta.png',
                'images/results/arjungupta.png',
                'images/results/gauthameshwar.png',
                'images/results/sanchitlakra.png',
                'images/results/milindsingh.png',
                'images/results/gurusharan.png',
                'images/icons/science.png',
                'images/icons/maths.png',
                'images/icons/arts.png',
                'images/icons/commerce.png',
                'images/icons/comps.png',
                'images/icons/english.png',
                'images/icons/hindi.png',
                'images/icons/english.png',
            );
            ImageController::createAndSaveImages($images,$page_info);
        }
        $tab = Input::get('tab');
        return view($viewName, [
            'name' => 'academics',
            'showPagesHero' => 1,
            'pageName' => 'ACADEMICS',
            'imageName' => 'header-academics.jpg',
            'tab' => $tab,
            'page'=> $page_info,       //Changes for SEO
        ]);
    }
// remain for storage images----------------------
    public function newsPublic()
    {
        $viewName = 'NewsPublic';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
        }
        $news = \App\News::latest()->paginate(7);

        return view($viewName, [
            'name' => 'news',
            'showPagesHero' => 1,
            'pageName' => 'BGIS NEWS',
            'imageName' => 'header-academics.jpg',
            'news' => $news,
            'page'=>$page_info,         // changes for seo
        ]);
    }
// remain for storage images-----------------------------
    public function newsPublicSingle($slug)
    {
        $news = \App\News::where('slug', $slug)->firstOrFail();

        $viewName = 'NewsPublicSingle';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
        }
        return view($viewName, [
            'name' => 'newsSingle',
            'showPagesHero' => 0,
            'news' => $news,
        ]);
    }

    public function donatePublic()
    {
        $viewName = 'DonatePublic';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
            $images = array(
                'images/ccavenue.png',
            );
            ImageController::createAndSaveImages($images,$page_info);
        }
        return view($viewName, [
            'name' => 'Donate',
            'showPagesHero' => 0,
            'page'=>$page_info,     //changes for seo
        ]);
    }

    public function applyForTest()
    {
        $viewName = 'admissions.apply';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
            $images = array(
                'images/ccavenue.png',
            );
            ImageController::createAndSaveImages($images,$page_info);
        }
        $dates = \App\Date::all();
        return view($viewName, [
            'name' => 'Apply Now For Admission Test',
            'showPagesHero' => 0,
            'dates' => $dates,
            'page'=>$page_info,         // changes for seo
        ]);
    }

    public function payForTest()
    {

        request()->validate([
            'billing_name' => 'required|max:120',
            'billing_parent' => 'required|max:120',
            'billing_email' => 'required|email',
            'billing_tel' => 'required|digits_between:5,15',
            'date' => 'required|max:120',
            'class' => 'required|max:120',
            'billing_address' => 'required|max:120',
            'billing_city' => 'required|max:120',
            'billing_state' => 'required|max:120',
            'billing_country' => 'required|max:120',
            'billing_zip' => 'required|digits_between:3,10',
        ]);


        $val = date('siHdmY');
        $num = rand(100, 999);
        $order_id = "$num" . "$val";
        $tid = "$val";

        $admission = new \App\Admissions();
        $admission->order_id = $order_id;
        $admission->billing_name = \request('billing_name');
        $admission->billing_parent = \request('billing_parent');
        $admission->class = \request('class');
        $admission->date = \request('date');
        $admission->billing_tel = \request('billing_tel');
        $admission->billing_email = \request('billing_email');
        $admission->billing_address = \request('billing_address');
        $admission->billing_city = \request('billing_city');
        $admission->billing_state = \request('billing_state');
        $admission->billing_zip = \request('billing_zip');
        $admission->billing_country = \request('billing_country');

        $admission->save();

        $viewName = 'admissions.paynow';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
            $images = array(
                'images/ccavenue.png',
            );
            ImageController::createAndSaveImages($images,$page_info);
        }

        return view($viewName, [
            'name' => 'Make Payment- Admission',
            'showPagesHero' => 0,
            'reg_num' => $order_id,
            'page'=>$page_info,         //change for seo
        ]);
    }

    public function makePaymentForTest()
    {
        $order_id = \request('reg_num');

        $detail = \App\Admissions::where('order_id', $order_id)->firstOrFail();

        $parameters = [
            'tid' => $order_id,

            'order_id' => \request('reg_num'),

            'amount' => '1000',

            'billing_name' => $detail->billing_name,

            'billing_email' => $detail->billing_email,

            'billing_city' => $detail->billing_city,

            'billing_state' => $detail->billing_state,

            'billing_zip' => $detail->billing_zip,

            'billing_address' => $detail->billing_address,

            'billing_country' => $detail->billing_country,

            'billing_tel' => $detail->billing_tel,

            'redirect_url' => 'https://bgis.org/admissions/payment',

        ];


        $order = Payment::prepare($parameters);
        return Payment::process($order);
    }

    public function responseForTest(Request $request)
    {

        $response = Payment::response($request);

        $detail = \App\Admissions::where('order_id', $response['order_id'])->firstOrFail();

        $detail->_token = csrf_token();
        $detail->tracking_id = $response['tracking_id'];
        $detail->order_status = $response['order_status'];
        $detail->amount = $response['amount'];

        $detail->save();

        $viewName = 'admissions.response';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
            $images = array(
                'images/ccavenue.png',
            );
            ImageController::createAndSaveImages($images,$page_info);
        }

        return view($viewName, [
            'name' => $response['order_status'] . 'Payment- Admission',
            'showPagesHero' => 0,
            'response' => $response,
            'detail' => $detail,
            'page'=>$page_info,         //changes for seo
        ]);


    }


    public function donatePublicInternalRedirect()
    {

        $value = date('Ymdhis');
        $random = rand(10, 99);
        $order_id = "$random" . "$value";
        $tid = "$value";


        $parameters = [
            'tid' => $tid,

            'order_id' => $order_id,

            'amount' => \request('don_amount'),

            'billing_name' => \request('don_name'),

            'billing_email' => \request('don_email'),

            'billing_city' => \request('don_city'),

            'billing_state' => \request('don_state'),

            'billing_zip' => \request('don_zip'),

            'billing_address' => \request('don_address'),

            'billing_country' => \request('don_country'),

            'billing_tel' => \request('don_phone'),

        ];


        $order = Payment::prepare($parameters);
        return Payment::process($order);
    }

    public function donatePublicResponse(Request $request)
    {

        $response = Payment::response($request);

        $donation = new \App\Donation();
        $donation->order_id = $response['order_id'];
        $donation->tracking_id = $response['tracking_id'];
        $donation->billing_name = $response['billing_name'];
        $donation->billing_tel = $response['billing_tel'];
        $donation->billing_email = $response['billing_email'];
        $donation->billing_address = $response['billing_address'];
        $donation->billing_city = $response['billing_city'];
        $donation->billing_state = $response['billing_state'];
        $donation->billing_zip = $response['billing_zip'];
        $donation->billing_country = $response['billing_country'];
        $donation->amount = $response['amount'];
        $donation->order_status = $response['order_status'];

        $donation->save();

        $viewName = 'DonatePublicResponse';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
        }

        return view($viewName, [
            'name' => 'Donate',
            'showPagesHero' => 0,
            'response' => $response,
            'page'=>$page_info,         // changes for seo
        ]);

    }
// reamin for storage images--------------------------------------------------------
    public function faculty()
    {
        $viewName = 'Faculty';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
        }

        $faculties = \App\Faculty::sorted()->get();
        return view($viewName, [
            'name' => 'faculty',
            'showPagesHero' => 1,
            'pageName' => 'FACULTY',
            'imageName' => 'header-adm.jpg',
            'faculties' => $faculties,
            'page'=>$page_info,         // changes for seo
        ]);
    }

    public function studentLife()
    {
        $viewName = 'StudentLife';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
            $images = array(
                'images/bgis_peace_day.jpg',
                'images/bgis_student_life.jpg',
                'images/bgis_honey_pot.jpg',
                'images/bgis_yoga.jpg',
                'images/sl/spiritual.jpg',
                'images/sl/Narsimgh-Yagya-2.jpg',
                'images/sl/smusic.jpg',
                'images/sl/sports.jpg',
                'images/sl/bgis_student_football.jpg',
                'images/icons/yoga.png',
                'images/sl/yoga_bgis.jpg',
                'images/sl/yoga.jpg',
                'images/sl/yoga_retreats_bgis.jpg',
                'images/icons/yoga.png',
                'images/sl/bgis_camps.JPG',
                'images/sl/bgis_retreat.JPG',
                'images/sl/bgis_retreat-1.jpg',
                'images/sl/bgis_retreat-2.jpg',
                'images/sl/bgis_trip_chitrakoot.jpg',
                'images/icons/music.png',
                'images/sl/bgis_celebration.jpg',
                'images/icons/quiz.png',
                'images/sl/lit.jpg',
                'images/icons/drama.png',
                'images/sl/dramatics_bgis.jpg',
                'images/icons/art.png',
                'images/sl/dramatics_bgis.jpg',
                'images/timetable.png',
            );
            ImageController::createAndSaveImages($images,$page_info);
        }

        $tab = Input::get($viewName);
        return view($viewName, [
            'name' => 'Student Life',
            'showPagesHero' => 1,
            'pageName' => 'STUDENT LIFE',
            'imageName' => 'bgis_student_life-header.jpg',
            'tab' => $tab,
            'page'=>$page_info,     //changes for seo
        ]);
    }

    public function vocational()
    {
        $viewName = 'Vocational';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for SEO
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
            $images = array(
                'images/vocational/animation.jpg',
                'images/vocational/food.jpg',
                'images/vocational/greenenergy.jpg',
                'images/vocational/homescience.jpg',
                'images/vocational/hortriculture.jpg',
                'images/vocational/itservices.jpg',
                'images/vocational/nursing.jpg',
                'images/vocational/appliances.jpg',
                'images/vocational/salesandmarketing.jpg',
                'images/vocational/sewing.jpg',
                'images/vocational/tourism.jpg',
            );
            ImageController::createAndSaveImages($images,$page_info);
        }

        return view($viewName, [
            'name' => 'Vocational Courses',
            'pageName' => 'VOCATIONAL COURSES',
            'showPagesHero' => 0,
            'page'=>$page_info          //changes for seo
        ]);
    }
// Remain for storage image-----------------------------------------------------
    public function publications()
    {
        $viewName = 'Publications';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
        }

        $books = \App\Publication::where('category', 'Book')->orderBy('id', 'DESC')->get();
        $publications = \App\Publication::where('category', 'Publication')->orderBy('id', 'DESC')->get();

        return view($viewName, [
            'name' => 'Publications',
            'showPagesHero' => 0,
            'books' => $books,
            'publications' => $publications,
            'page'=>$page_info,     //changes for seo
        ]);
    }

    public function helpSubmit()
    {

        request()->validate([
            'name' => 'required|max:120',
            'email' => 'required|email',
            'phone' => 'required|digits_between:5,15',
            'subject' => 'required|max:200',
            'query' => 'required|max:600',

        ]);

        $help = new Help();
        $help->name = \request('name');
        $help->email = \request('email');
        $help->phone = \request('phone');
        $help->subject = \request('subject');
        $help->query = \request('query');

        $help->save();

        Mail::to('bgis.admissions@gmail.com')->send(
            new \App\Mail\AdmissionQuery($help)
        );

        return redirect('/admissions?tab=helpb')->with('flash_message', 'Your Query has been successfully submitted. We will get back to you shortly.');
    }

    public function paymentCancel()
    {
        $viewName = 'PaymentCancel';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
        }

        return view($viewName, [
            'name' => 'Payment Cancelled',
            'showPagesHero' => 0,
            'page'=>$page_info,         // chages for seo
        ]);
    }


    //Custom Function Created
    public function communityScholarship()
    {
        $viewName = 'CommunityScholarship';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
            $images = array(
                'images/vocational/animation.jpg',
                'images/vocational/food.jpg',
                'images/vocational/greenenergy.jpg',
                'images/vocational/homescience.jpg',
                'images/vocational/hortriculture.jpg',
                'images/vocational/itservices.jpg',
                'images/vocational/nursing.jpg',
                'images/vocational/appliances.jpg',
                'images/vocational/salesandmarketing.jpg',
                'images/vocational/sewing.jpg',
                'images/vocational/tourism.jpg',
            );
            ImageController::createAndSaveImages($images,$page_info);
        }

        return view($viewName, [
            'name' => 'Community Scholarship',
            'pageName' => 'Community Scholarship',
            'showPagesHero' => 0,
            'page'=>$page_info,         //changes for seo
        ]);
    }


    public function campusFacilities()
    {
        $viewName = 'CampusFacilities';  // new changes for seo  adding variable bladefile
        $page_info = Page::where('name', $viewName)->first(); // new changes for seo
        if ($page_info == null) {                              // Create New Information
            $page_info = new Page(['name' => $viewName]);
            $page_info->save();
            $images = array(
                'images/facilities/bgis_new_campus1.jpg',
                'images/campus/academic.png',
                'images/academic2.jpg',
                'images/academic_bgis1.jpg',
                'images/academic1.jpg',
                'images/campus/60-acre-campus.jpg',
                'images/campus/naturopathy-1.jpg',
                'images/campus/naturopathy-2.jpg',
                'images/sl/sports.jpg',
                'images/campus/football.jpg',
                'images/campus/basketball.jpg',
                'images/sl/bgis_student_football.jpg',
                'images/campus/kabaddi.jpg',
                'images/campus/running.jpg',
                'images/campus/Volleyball.jpg',
                'images/campus/art-music-dance.png',
                'images/campus/art-music-dance-1.jpg',
                'images/campus/art-music-dance-2.jpg',
                'images/campus/orissa-dance.jpg',
                'images/campus/art-music-dance-3.jpg',
                'images/campus/eco-friendly.png',
                'images/campus/solar-panel.jpg',
                'images/campus/gosala-unit.jpg',
                'images/campus/bio-gas-plant.jpg',
                'images/campus/cctv.jpg',
                'images/campus/60-acre-campus.jpg',
                'images/campus/leboroty.png',
                'images/campus/laboratory-6.jpg',
                'images/campus/laboratory-2.jpg',
                'images/campus/laboratory-3.jpg',
                'images/campus/laboratory-4.jpg',
                'images/campus/laboratory-5.jpg',
                'images/campus/laboratory-1.jpg',
                'images/campus/academic.png',
                'images/campus/medical-room.jpg',
                'images/campus/Prasadam.jpg',
                'images/campus/beautifull-temple.jpg',

            );
            ImageController::createAndSaveImages($images,$page_info);
        }
        $tab = Input::get('tab');
        return view($viewName, [
            'name' => 'Campus Facilities',
            'showPagesHero' => 1,
            'pageName' => 'FACILITIES -',
            'imageName' => 'campus-facilities.jpg',
            'tab' => $tab,
            'page'=>$page_info          // change for seo
        ]);
    }


}



//----------------------------------------------------------------Previous Code------------------------------------------------------
//
//namespace App\Http\Controllers;
//
//use App\Page;
//use Mail;
//use App\Contact;
//use App\Publication;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Input;
//use App\Help;
//use Illuminate\Support\Facades\Storage;
//
//
//
//use Appnings\Payment\Facades\Payment;
//
//class Controllers extends Controller
//{
//
//    public function home() {
//        $home_video = \App\HomeVideo::find(1);
//        $news =  \App\News::latest()->take(6)->get();
//        return view('home', [
//            'name' => 'home',
//            'showPagesHero' => 0,
//            'news' => $news,
//            'yvlink' => $home_video,
//            ]);
//    }
//
//    public function about() {
//        $tab = Input::get('tab');
//        return view('about', [
//            'name' => 'about',
//            'showPagesHero' => 1,
//            'pageName' => 'ABOUT US',
//            'imageName' => 'header-about.JPG',
//            'tab' => $tab,
//        ]);
//    }
//
//    public function contact() {
//        return view('contact', [
//            'name' => 'contact',
//            'showPagesHero' => 1,
//            'pageName' => 'CONTACT',
//            'imageName' => 'header-contact.jpg',
//        ]);
//    }
//
//    public function contactSubmit() {
//
//        request()->validate([
//            'name' => 'required|max:120',
//            'email' => 'required|email',
//            'phone' => 'required|digits_between:5,15',
//            'subject' => 'required|max:200',
//            'message' => 'required|max:600',
//            'captcha' => 'required|captcha'
//        ]);
//
//        $contact = new Contact();
//        $contact->name = \request('name');
//        $contact->email = \request('email');
//        $contact->phone = \request('phone');
//        $contact->subject = \request('subject');
//        $contact->message = \request('message');
//
//        $contact->save();
//
//        Mail::to('bgis.services@gmail.com')->send(
//            new \App\Mail\ContactForm($contact)
//        );
//
//        return back()->with('flash_message', 'Your Query has been successfully submitted. We will get back to you shortly.');
//    }
//
//    public function admissions() {
//        $news =  \App\News::latest()->take(6)->get();
//        $dates = \App\Date::all();
//        $tab = Input::get('tab');
//        return view('admissions', [
//            'name' => 'admissions',
//            'showPagesHero' => 1,
//            'pageName' => 'ADMISSION',
//            'imageName' => 'header-adm.jpg',
//            'tab' => $tab,
//            'news' => $news,
//            'dates' => $dates,
//        ]);
//    }
//
//    public function contribute() {
//        $tab = Input::get('tab');
//        return view('contribute', [
//            'name' => 'contribute',
//            'showPagesHero' => 1,
//            'pageName' => 'CONTRIBUTE',
//            'imageName' => 'header-contribute.jpg',
//            'tab' => $tab,
//        ]);
//    }
//
//    public function academics() {
//        $tab = Input::get('tab');
//        return view('academics', [
//            'name' => 'academics',
//            'showPagesHero' => 1,
//            'pageName' => 'ACADEMICS',
//            'imageName' => 'header-academics.jpg',
//            'tab' => $tab,
//        ]);
//    }
//
//    public function newsPublic() {
//        $news = \App\News::latest()->paginate(7);
//
//        return view('newsPublic', [
//            'name' => 'news',
//            'showPagesHero' => 1,
//            'pageName' => 'BGIS NEWS',
//            'imageName' => 'header-academics.jpg',
//            'news' => $news,
//        ]);
//    }
//
//    public function newsPublicSingle($slug) {
//        $news = \App\News::where('slug', $slug)->firstOrFail();
//
//        return view('newsPublicSingle', [
//            'name' => 'newsSingle',
//            'showPagesHero' => 0,
//            'news' => $news,
//        ]);
//    }
//
//    public function donatePublic() {
//        return view('donatePublic', [
//            'name' => 'Donate',
//            'showPagesHero' => 0,
//        ]);
//    }
//
//    public function applyForTest() {
//        $dates = \App\Date::all();
//        return view('admissions.apply', [
//            'name' => 'Apply Now For Admission Test',
//            'showPagesHero' => 0,
//            'dates' => $dates,
//
//        ]);
//    }
//
//    public function payForTest() {
//
//        request()->validate([
//            'billing_name' => 'required|max:120',
//            'billing_parent' => 'required|max:120',
//            'billing_email' => 'required|email',
//            'billing_tel' => 'required|digits_between:5,15',
//            'date' => 'required|max:120',
//            'class' => 'required|max:120',
//            'billing_address' => 'required|max:120',
//            'billing_city' => 'required|max:120',
//            'billing_state' => 'required|max:120',
//            'billing_country' => 'required|max:120',
//            'billing_zip' => 'required|digits_between:3,10',
//        ]);
//
//
//        $val = date('siHdmY');
//        $num = rand(100, 999);
//        $order_id = "$num"."$val";
//        $tid = "$val";
//
//        $admission = new \App\Admissions();
//        $admission->order_id = $order_id;
//        $admission->billing_name = \request('billing_name');
//        $admission->billing_parent = \request('billing_parent');
//        $admission->class = \request('class');
//        $admission->date = \request('date');
//        $admission->billing_tel = \request('billing_tel');
//        $admission->billing_email = \request('billing_email');
//        $admission->billing_address = \request('billing_address');
//        $admission->billing_city = \request('billing_city');
//        $admission->billing_state = \request('billing_state');
//        $admission->billing_zip = \request('billing_zip');
//        $admission->billing_country = \request('billing_country');
//
//        $admission->save();
//
//
//        return view('admissions.paynow', [
//            'name' => 'Make Payment- Admission',
//            'showPagesHero' => 0,
//            'reg_num' => $order_id,
//        ]);
//    }
//
//    public function makePaymentForTest() {
//        $order_id = \request('reg_num');
//
//        $detail = \App\Admissions::where('order_id', $order_id)->firstOrFail();
//
//        $parameters = [
//            'tid' => $order_id,
//
//            'order_id' => \request('reg_num'),
//
//            'amount' => '1000',
//
//            'billing_name' => $detail->billing_name ,
//
//            'billing_email' => $detail->billing_email,
//
//            'billing_city' => $detail->billing_city,
//
//            'billing_state' => $detail->billing_state,
//
//            'billing_zip' => $detail->billing_zip,
//
//            'billing_address' => $detail->billing_address,
//
//            'billing_country' => $detail->billing_country,
//
//            'billing_tel' => $detail->billing_tel,
//
//            'redirect_url' => 'https://bgis.org/admissions/payment',
//
//          ];
//
//
//          $order = Payment::prepare($parameters);
//          return Payment::process($order);
//    }
//
//    public function responseForTest(Request $request) {
//
//        $response = Payment::response($request);
//
//        $detail = \App\Admissions::where('order_id', $response['order_id'])->firstOrFail();
//
//        $detail->_token = csrf_token();
//        $detail->tracking_id = $response['tracking_id'];
//        $detail->order_status = $response['order_status'];
//        $detail->amount = $response['amount'];
//
//        $detail->save();
//
//        return view('admissions.response', [
//            'name' => $response['order_status'].'Payment- Admission',
//            'showPagesHero' => 0,
//            'response' => $response,
//            'detail' => $detail,
//        ]);
//
//
//    }
//
//
//
//
//    public function donatePublicInternalRedirect() {
//
//        $value = date('Ymdhis');
//        $random = rand(10,99);
//        $order_id = "$random"."$value";
//        $tid = "$value";
//
//
//        $parameters = [
//            'tid' => $tid,
//
//            'order_id' => $order_id,
//
//            'amount' => \request('don_amount'),
//
//            'billing_name' => \request('don_name'),
//
//            'billing_email' => \request('don_email'),
//
//            'billing_city' => \request('don_city'),
//
//            'billing_state' => \request('don_state'),
//
//            'billing_zip' => \request('don_zip'),
//
//            'billing_address' => \request('don_address'),
//
//            'billing_country' => \request('don_country'),
//
//            'billing_tel' => \request('don_phone'),
//
//          ];
//
//
//          $order = Payment::prepare($parameters);
//          return Payment::process($order);
//    }
//
//    public function donatePublicResponse(Request $request) {
//
//        $response = Payment::response($request);
//
//        $donation = new \App\Donation();
//        $donation->order_id = $response['order_id'];
//        $donation->tracking_id = $response['tracking_id'];
//        $donation->billing_name = $response['billing_name'];
//        $donation->billing_tel = $response['billing_tel'];
//        $donation->billing_email = $response['billing_email'];
//        $donation->billing_address = $response['billing_address'];
//        $donation->billing_city = $response['billing_city'];
//        $donation->billing_state = $response['billing_state'];
//        $donation->billing_zip = $response['billing_zip'];
//        $donation->billing_country = $response['billing_country'];
//        $donation->amount = $response['amount'];
//        $donation->order_status = $response['order_status'];
//
//        $donation->save();
//
//
//        return view('donatePublicResponse', [
//            'name' => 'Donate',
//            'showPagesHero' => 0,
//            'response' => $response
//        ]);
//
//    }
//
//    public function faculty() {
//        $faculties = \App\Faculty::sorted()->get();
//        return view('faculty', [
//            'name' => 'faculty',
//            'showPagesHero' => 1,
//            'pageName' => 'FACULTY',
//            'imageName' => 'header-adm.jpg',
//            'faculties' => $faculties
//        ]);
//    }
//
//    public function studentLife() {
//        $tab = Input::get('tab');
//        return view('studentLife', [
//            'name' => 'Student Life',
//            'showPagesHero' => 1,
//            'pageName' => 'STUDENT LIFE',
//            'imageName' => 'bgis_student_life-header.jpg',
//            'tab' => $tab,
//        ]);
//    }
//
//    public function vocational() {
//        return view('vocational', [
//            'name' => 'Vocational Courses',
//            'pageName' => 'VOCATIONAL COURSES',
//            'showPagesHero' => 0,
//        ]);
//    }
//
//    public function publications() {
//        $books = \App\Publication::where('category', 'Book')->orderBy('id','DESC')->get();
//        $publications = \App\Publication::where('category', 'Publication')->orderBy('id','DESC')->get();
//
//        return view('publications', [
//            'name' => 'Publications',
//            'showPagesHero' => 0,
//            'books'=> $books,
//            'publications' => $publications,
//        ]);
//    }
//
//    public function helpSubmit() {
//
//        request()->validate([
//            'name' => 'required|max:120',
//            'email' => 'required|email',
//            'phone' => 'required|digits_between:5,15',
//            'subject' => 'required|max:200',
//            'query' => 'required|max:600',
//
//        ]);
//
//        $help = new Help();
//        $help->name = \request('name');
//        $help->email = \request('email');
//        $help->phone = \request('phone');
//        $help->subject = \request('subject');
//        $help->query = \request('query');
//
//        $help->save();
//
//        Mail::to('bgis.admissions@gmail.com')->send(
//            new \App\Mail\AdmissionQuery($help)
//        );
//
//        return redirect('/admissions?tab=helpb')->with('flash_message', 'Your Query has been successfully submitted. We will get back to you shortly.');
//    }
//
//    public function paymentCancel(){
//        return view('paymentCancel', [
//            'name' => 'Payment Cancelled',
//            'showPagesHero' => 0,
//        ]);
//    }
//
//
//
//
//
//
//
//
//    //Custom Function Created
//    public function communityScholarship(){
//         return view('communityScholarship', [
//            'name' => 'Community Scholarship',
//            'pageName' => 'Community Scholarship',
//            'showPagesHero' => 0,
//        ]);
//    }
//
//
//
//    public function campusFacilities(){
//        $tab = Input::get('tab');
//        return view('campusFacilities', [
//            'name' => 'Campus Facilities',
//            'showPagesHero' => 1,
//            'pageName' => 'FACILITIES -',
//            'imageName' => 'campus-facilities.jpg',
//            'tab' => $tab,
//        ]);
//    }
//
//
//
//
//}

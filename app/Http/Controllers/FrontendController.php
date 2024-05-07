<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\Alumni;
use App\Models\ChiefTestimonial;
use App\Models\Contact;
use App\Models\Event;
use App\Models\News;
use App\Models\Fee;
use App\Models\Career;
use App\Models\CareerApplication;
use App\Models\Download;
use App\Models\Faculty;
use App\Models\NewsCategory;
use App\Models\Gallery;
use App\Models\ManagementTeam;
use App\Models\Notice;
use App\Models\Scholarship;
use App\Models\Subscribe;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use PhpParser\Node\Expr\AssignOp\Concat;

class FrontendController extends Controller
{
    // index
    function index()
    {
        $events =  Event::orderBy('date', 'desc')->skip(0)->take(3)
            ->get();
        $notices = Notice::get();
        $newss = db::table('news')
            ->join('news_categories', 'news.news_category_id', '=', 'news_categories.category_id')
            ->get();
        $testimonials = ChiefTestimonial::get();
        return view('frontend.index', compact('notices', 'events', 'testimonials', 'newss'));
    }

    // all notice function
    function notice()
    {
        $recent_notices = Notice::orderBy('created_at', 'desc')->skip(0)->take(3)
            ->get();
        $notices =  Notice::get();

        return view('frontend.update.notice',compact('recent_notices', 'notices'));
    }

    // notice details function
    function noticeDetails($id)
    {
        $recent_notices = Notice::orderBy('created_at', 'desc')->skip(0)->take(3)
            ->get();
        $notices =  Notice::find($id);
        return view('frontend.update.singleNotice', compact('recent_notices', 'notices'));
    }

    // abouts us
    function aboutUs()
    {
        return view('frontend.about');
    }

    // news
    function news()
    {

        $newss = News::all();
        $recent_newss = db::table('news')
            ->join('news_categories', 'news.news_category_id', '=', 'news_categories.category_id')
            ->orderBy('date', 'desc')
            ->skip(0)->take(6)
            ->get();

        $news_categories = NewsCategory::all();

        return view('frontend.update.news',compact('newss', 'news_categories', 'recent_newss'));
    }

    // news category
    function newsCategories($id)
    {
        $newss = News::where('news_category_id', $id)->paginate(4);
        $recent_newss = db::table('news')
            ->join('news_categories', 'news.news_category_id', '=', 'news_categories.category_id')
            ->orderBy('date', 'desc')
            ->skip(0)->take(3)
            ->get();

        $news_categories = NewsCategory::all();
        return view('frontend.news.categorywiseNews', compact('newss', 'news_categories', 'recent_newss'));
    }

    // single news page render function
    function newsSingle($id)
    {
        $recent_newss = db::table('news')
            ->join('news_categories', 'news.news_category_id', '=', 'news_categories.category_id')
            ->orderBy('date', 'desc')
            ->skip(0)->take(3)
            ->get();
        $news = db::table('news')
            ->where('news.id', $id)
            ->join('news_categories', 'news.news_category_id', '=', 'news_categories.category_id')
            ->first();
        $news_categories = NewsCategory::all();
        return view('frontend.update.singleNews', compact('news_categories', 'news', 'recent_newss'));
    }

    // events
    function events()
    {
        $events =  Event::orderBy('date', 'desc')->get();
        return view('frontend.update.events',compact('events'));
    }

    // event details
    function eventDetails( $id )
    {
        $events =  Event::find($id);
        $recent_events =  Event::orderBY('date', 'desc')->skip(0)->take(6)->get();

        return view('frontend.update.singleEvent',compact('events', 'recent_events') );
    }

    // contact page function
    function contact()
    {
        return view('frontend.contact.contact');
    }

    // contact post function
    function storeContact(Request $request)
    {
            $request->validate(
                [
                    'name' => ['required'],
                    'email' => ['required'],
                    'phone' => ['required'],
                    'subject' => ['required'],
                    'contact_description' => ['required'],
                ] );

            DB::beginTransaction();
            try {
            $store_contact = new Contact();
            $store_contact->name = $request->name;
            $store_contact->email = $request->email;
            $store_contact->phone = $request->phone;
            $store_contact->subject = $request->subject;
            $store_contact->contact_description = $request->contact_description;
            $store_contact->save();
        } catch (Exception $exception) {
        DB::rollBack();
        return back();

        }
        DB::commit();
        return back();
    }

     // administrator

     function administrator()
     {
         $admins = Administrator::all();
         return view('frontend.about.adminstration',compact('admins'));
     }

    // management team
    function mgmgtTeam()
    {
        $mgmgtteam = ManagementTeam::all();
        return view('frontend.about.supportteam',compact('mgmgtteam'));
    }

    // teacher
    function teachers()
    {
        $teachers = Teacher::all();
        return view('frontend.about.teachers', compact('teachers'));
    }

    // alumni
    function alumni()
    {
        $alumnies = Alumni::get();
        return view('frontend.alumni', compact('alumnies'));
    }

    // gallery file
    function displayGallery()
    {
        $galleries = Gallery::get();
        return view('frontend.resources.gallary',compact('galleries'));
    }

    // download file
    function downloadFile()
    {
        $files = Download::all();
        return view('frontend.resources.download',compact('files'));
    }

    //pre-school
    function preSchool()
    {
        return view('frontend.faculty.preSchool');
    }
    // pre-primary eduation
    function prePrimaryEducation()
    {
        return view('frontend.faculty.prePrimary');
    }

    // primary eduation
    function primaryEducation()
    {
        return view('frontend.faculty.primaryEducation');
    }
    // secondary eduation
    function secondaryEducation()
    {
        return view('frontend.faculty.secondaryEducation');
    }

    // scholarship
    function scholarship()
    {
        $scholarships = Scholarship::get();
        return view('frontend.academic.scholarship', compact('scholarships'));
    }

    // chief message faculty
    function msgFaculty()
    {
        $msgfaculty = Faculty::get();
        return view('frontend.msgFaculty', compact('msgfaculty'));
    }

    // fee structure
    function feeStructure()
    {
        $fees = DB::table('classes')
        ->join('fees','classes.class_id','=','fees.classes_id')
        ->get()
        ->groupBy('class_name');
        return view('frontend.academic.feeStructure', compact('fees'));
    }

    // Career
    function career(){
        $careers = Career::get();
        return view('frontend.career', compact('careers'));
    }

    public function executiveMessage(){
        return view('frontend.about.executive');
    }

    public function displayScience(){
        return view('frontend.course.science+2');
    }

    public function displayManagement(){
        return view('frontend.course.management+2');
    }

    public function about(){
        return view('frontend.about.about');
    }

    public function almuni(){
        return view('frontend.about.alumni');
    }
}

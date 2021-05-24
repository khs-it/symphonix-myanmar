<?php

namespace App\Http\Controllers;

use App\blog;
use App\About;
use App\Event;
use App\Course;
use App\Ticket;
use App\Contact;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    function index(){
        return view('admin.site_admin.admin.index');
    }

    function about(){
        $about = About::get();
        return view('admin.site_admin.admin.about')->with('about',$about);
    }

    function service(){
        $service = Service::get();
        return view('admin.site_admin.admin.service')->with('service',$service);
    }

    function ticket(){
        $tickets = Ticket::get();
        return view('admin.site_admin.admin.ticket')->with('tickets',$tickets);
    }

    function blog(){
        $blogs = blog::get();
        return view('admin.site_admin.admin.blog')->with('blogs',$blogs);
    }

    function event(){
        $events = Event::get();
        return view('admin.site_admin.admin.event')->with('events',$events);
    }

    function course(){
        $courses = Course::get();
        return view('admin.site_admin.admin.course')->with('courses', $courses);
    }

    function contact(){
        $contacts = Contact::get();
        return view('admin.site_admin.admin.contact')->with('contacts',$contacts);
    }

}

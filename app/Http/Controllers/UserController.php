<?php

namespace App\Http\Controllers;

use App\blog;
use App\About;
use App\Event;
use App\Course;
use App\Ticket;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index(){
        $about = About::get();
        $blogs = blog::limit(4)->get();
        $courses = Course::get();
        $tickets = Ticket::get();
   
        return view('index',compact('about','blogs','courses','tickets'));
    }

    public function about(){
        $about = About::get();
        return view('about')->with('about',$about);
    }

    public function price(){
        $tickets = Ticket::get();
        return view('price')->with('tickets',$tickets);
    }

    public function event(){
        $events = Event::get();
        return view('event')->with('events',$events);
    }

    public function service(){
        $service = Service::get();
        return view('service')->with('service',$service);
    }

    public function blog(){
        $blogs = blog::get();
        return view('blog')->with('blogs',$blogs);
    }

    public function blog_detail($id){
        $blog = blog::findOrFail($id);
        return view('blog-detail')->with('blog', $blog);
    }

    public function course(){
        $courses = Course::get();
        return view('course')->with('courses',$courses);
    }

    public function course_detail($id){
        $course = Course::find($id);
        return view('course-detail')->with('course',$course);
    }

    public function contact(){
        return view('contact');
    }
}

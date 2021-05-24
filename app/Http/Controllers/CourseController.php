<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function store(Request $request){

        
        $file = $request->file('photo');
        $fileName = uniqid().'_'.$file->getClientoriginalName();
        $file->move(public_path().'/upload/course_photos/',$fileName);

        $data = [
            'course_title' => $request->title,
            'course_subtitle' => $request->subtitle,
            'course_photo' => $fileName,
            'course_description' => $request->course_description,
            'course_outline' => $request->course_outline,
            'course_requirement' => $request->course_requirement,
        ];

        Course::create($data);
        return back()->with('create_course','Successfully Created Course');
    }

    public function delete($id){
        Course::find($id)->delete();
        return back()->with('delete_course','Successfully Deleted Course');
    }

    public function edit($id){
        $course = Course::find($id);
        
        return view('admin.site_admin.admin.update_course')->with('course', $course);
    }

    public function update(Request $request){
        $id = $request->course_id;
        

        if($request->photo){
            $file = $request->file('photo');
            $fileName = uniqid().'_'.$file->getClientoriginalName();
            $file->move(public_path().'/upload/course_photos/',$fileName);
                
    
            $data = [
                'course_title' => $request->title,
                'course_subtitle' => $request->subtitle,
                'course_photo' => $fileName,
                'course_description' => $request->course_description,
                'course_outline' => $request->course_outline,
                'course_requirement' => $request->course_requirement,
            ];
    
            Course::findOrFail($id)->update($data);
            return redirect('/admin/course')->with('update_course','Update Course Success');
        }
        else{  

            $data = [
                'course_title' => $request->title,
                'course_subtitle' => $request->subtitle,
                'course_photo' => $request->image,
                'course_description' => $request->course_description,
                'course_outline' => $request->course_outline,
                'course_requirement' => $request->course_requirement,
            ];

            Course::findOrFail($id)->update($data);
            return redirect('/admin/course')->with('update_course','Update Course Success');
        }
    }
}

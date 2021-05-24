<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    
    public function store(Request $request){


        $file = $request->file('photo');
        $fileName = uniqid().'_'.$file->getClientoriginalName();
        $file->move(public_path().'/upload/event_photos/',$fileName);
            

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $fileName,
            'place' => $request->place,
            'time' => $request->time,
            'date' => $request->date,
        ];

        Event::create($data);
        return back()->with('create_event','Successfully Event Created');
    }

    public function delete($id){
        Event::find($id)->delete();
        return back()->with('delete_event','Successfully Event Deleted');
    }

    public function edit($id){
        $event = Event::findOrFail($id);
        return view('admin.site_admin.admin.update_event')->with('event',$event);
    }

    public function update(Request $request){
        $id = $request->event_id;
        

        if($request->photo){
            $file = $request->file('photo');
            $fileName = uniqid().'_'.$file->getClientoriginalName();
            $file->move(public_path().'/upload/event_photos/',$fileName);
                
    
            $data = [
                'title' => $request->title,
                'content' => $request->content,
                'photo' => $fileName,
                'place' => $request->place,
                'time' => $request->time,
                'date' => $request->date,
            ];
    
            Event::findOrFail($id)->update($data);
            return redirect('/admin/event')->with('update_event','Update Event Success');
        }
        else{  

            $data = [
                'title' => $request->title,
                'content' => $request->content,
                'photo' => $request->image,
                'place' => $request->place,
                'time' => $request->time,
                'date' => $request->date,
            ];

            Event::findOrFail($id)->update($data);
            return redirect('/admin/event')->with('update_event','Update Event Success');
        }
    }


}

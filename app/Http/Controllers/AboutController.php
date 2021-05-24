<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function update(Request $request){

        $id = $request->about_id;
        if($request->photo){
            $file = $request->file('photo');
            $fileName = uniqid().'_'.$file->getClientoriginalName();
            $file->move(public_path().'/upload/about_photos/',$fileName);
                
            unlink(public_path().'/images/'.$product->images);

            $data = [
                'title' => $request->title,
                'content' => $request->content,
                'photo' => $fileName,
                'google_url' => $request->google_url,
                'facebook_url' => $request->facebook_url,
                'mission'=> $request->mission,
                'vision' => $request->vision,
                'passing' => $request->passing,
            ];
            
            About::find($id)->update($data);
            return back()->with('update_content','Successfully Updated Content');
        }
        else{
       
    
            $data = [
                'title' => $request->title,
                'content' => $request->content,
                'photo' => $request->image,
                'google_url' => $request->google_url,
                'facebook_url' => $request->facebook_url,
                'mission'=> $request->mission,
                'vision' => $request->vision,
                'passing' => $request->passing,
            ];
    
            About::find($id)->update($data);
            return back()->with('update_content','Successfully Updated Content');
        }
 
    }

    
}

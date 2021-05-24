<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function update(Request $request){

        $id = $request->service_id;
        if($request->photo){
            $file = $request->file('photo');
            $fileName = uniqid().'_'.$file->getClientoriginalName();
            $file->move(public_path().'/upload/service_photos/',$fileName);
                
    
            $data = [
                'content' => $request->content,
                'photo' => $fileName,
            ];
    
            Service::find($id)->update($data);
            return back()->with('update_content','Successfully Updated Content');
        }
        else{
       
    
            $data = [
                'content' => $request->content,
                'photo' => $request->image,
                
            ];
    
            Service::find($id)->update($data);
            return back()->with('update_content','Successfully Updated Content');
        }
 
    }

}

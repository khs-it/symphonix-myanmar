<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'photo' => 'required',
            'content' => 'required',
        ]);

        $file = $request->file('photo');
        $fileName = uniqid().'_'.$file->getClientoriginalName();
        $file->move(public_path().'/upload/blog_photos/',$fileName);

        $data = [
            'title' => $request->title,
            'photo' => $fileName,
            'content' => $request->content,
        ];
        blog::create($data);
        return back()->with('create_blog','Successfully Blog Created');
    }

    public function delete($id){
        blog::find($id)->delete();
        return back()->with('delete_blog','Successfully Blog Deleted');
    }

    public function edit($id){
        $blog = blog::findOrFail($id);
        return view('admin.site_admin.admin.update_blog')->with('blog',$blog);
    }

    public function update(Request $request){
        $id = $request->blog_id;

        if($request->photo){
            $file = $request->file('photo');
            $fileName = uniqid().'_'.$file->getClientoriginalName();
            $file->move(public_path().'/upload/blog_photos/',$fileName);
                
            $data = [
                'title' => $request->title,
                'content' => $request->content,
                'photo' => $fileName,
            ];
    
            blog::findOrFail($id)->update($data);
            return redirect('/admin/blog')->with('update_blog','Successfully Updated Blog');
        }
        else{  

    
            $data = [
                'title' => $request->title,
                'content' => $request->content,
                'photo' => $request->image,
            ];
    
            blog::findOrFail($id)->update($data);
            return redirect('/admin/blog')->with('update_blog','Successfully Updated Blog');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function store(Request $request){
        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];
        Ticket::create($data);
        return back()->with('create_ticket','Successfully Created Ticket');
    }

    public function delete($id){
        Ticket::findOrFail($id)->delete();
        return back()->with('delete_ticket','Successfully Deleted Ticket');
    }

    public function edit($id){
        $ticket = Ticket::find($id);
        return view('admin.site_admin.admin.update_ticket')->with('ticket', $ticket);
    }

    public function update(Request $request){
        $id = $request->ticket_id;
       
    
            $data = [
                'title' => $request->title,
                'content' => $request->content,
            ];

            
    
            Ticket::find($id)->update($data);
            return redirect('/admin/ticket')->with('update_ticket','Successfully Updated Ticket');
        }
    
}

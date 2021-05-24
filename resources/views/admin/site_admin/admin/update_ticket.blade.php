@extends('admin.layouts.site_admin.site_admin_design')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection
@section('content')
<style>
    #table_data{
        text-align:center;
    }
</style>

    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <span><h1 class="card-title" style="font-size:21px;">Update Ticket</h1></span>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(Session::has('update_content'))
                                <div class="alert alert-success">
                                    {{ Session::get('update_content') }}
                                </div>
                            @endif
                           
                            <form action="{{ url('update_ticket') }}" method="post" enctype="multipart/form-data" class="md-form">
                            @csrf
                            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                            <div class="row">
                          
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Title</label>
                                                <textarea class="form-control" name="title" id="name" required rows="1">{{ $ticket->title }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="text
                                            "><b>Content</b></label><br>
                                        <textarea rows="8" name="content" class="form-control" id="text" required>{{ $ticket->content }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Update</button>
                        </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

        
@endsection
@section('js')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{url('customjs/helper.js')}}"></script>


    <script type="text/javascript">
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
        
       $(document).ready(function() {
           $('.summernote').summernote({
            height: 200,
            dialogsInBody: true,
            callbacks:{
                onInit:function(){
                $('body > .note-popover').hide();
                }
             },
         });
      });
    </script>
@endsection

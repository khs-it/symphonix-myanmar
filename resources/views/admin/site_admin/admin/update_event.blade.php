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
                        <span><h1 class="card-title" style="font-size:21px;">Update Event</h1></span>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(Session::has('update_content'))
                                <div class="alert alert-success">
                                    {{ Session::get('update_content') }}
                                </div>
                            @endif
                            <form action="{{ url('update_event') }}" method="post" enctype="multipart/form-data" class="md-form">
                            @csrf
                            <input type="hidden" name="event_id" value="{{ $event->id }}">
                            <div class="row">
                                <div class="col-sm-4 imgUp">
                                    <img src="{{asset('upload/event_photos/'.$event->photo)}}" id="image" class="imagePreview img-thumbnail">
                                    <input type="hidden" value="{{ $event->photo }}" name="image">
                                    <label class="btn btn-primary upload_btn">
                                        Upload<input type="file" name="photo" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('upload_photo','image')" id="upload_photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                             <textarea name="title"
                                            class="form-control" id="title" required rows="1">{{ $event->title }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="date" name="date" class="form-control" id="date" value="{{ $event->date }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="timing">Time</label>
                                                <input type="time" name="time" class="form-control" id="date" value="{{ $event->time }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="location">Place</label>
                                        <textarea class="form-control" name="place" id="location" required rows="1">{{ $event->place }}</textarea>
                                    </div>
                                </div>
                 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="detail
                                            "><b>Content</b></label><br>
                                        <textarea name="content" rows="8" class="form-control" required>{{ $event->content }}</textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn btn-primary pull-right">Update</button>

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

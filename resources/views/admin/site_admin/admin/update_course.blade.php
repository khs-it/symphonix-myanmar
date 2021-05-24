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
                           
                            <form action="{{ url('update_course') }}" method="post" enctype="multipart/form-data" class="md-form">
                            @csrf
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                              <div class="row">
                                <div class="col-sm-4 imgUp">
                                    <img src="{{asset('upload/course_photos/'.$course->course_photo)}}" id="image" class="imagePreview img-thumbnail">
                                        <input type="hidden" value="{{ $course->course_photo }}" name="image">
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
                                            class="form-control" name="title" required rows="1">{{ $course->course_title }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="subtitle">Subtitle</label>
                                                <input type="subtitle" name="subtitle" class="form-control" value="{{ $course->course_subtitle }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="detail
                                            "><b>Course Description</b></label><br>
                                        <textarea name="course_description" rows="8" class="form-control" required>{{ $course->course_description }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="detail
                                            "><b>Course Outline</b></label><br>
                                        <textarea name="course_outline" rows="8" class="form-control" required>{{ $course->course_outline }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="detail
                                            "><b>Course Requirement</b></label><br>
                                        <textarea name="course_requirement" rows="8" class="form-control" required>{{ $course->course_requirement }}</textarea>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Update</button>
                            <div class="clearfix"></div>
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

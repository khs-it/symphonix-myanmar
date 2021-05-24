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
                        <span><h1 class="card-title" style="font-size:21px;">Service</h1></span>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(Session::has('update_content'))
                                <div class="alert alert-success">
                                    {{ Session::get('update_content') }}
                                </div>
                            @endif

                            <form action="{{ url('update_service') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="service_id" value="{{ $service[0]->id }}">
                                <div class="row">
                                    <div class="col-sm-12 imgUp">
                                        <img src="{{asset('upload/service_photos/'.$service[0]->photo)}}" name="images" id="image" width="25%" class="imagePreview img-thumbnail" value="{{asset('upload/service_photos/'.$service[0]->photo)}}">
                                        <input type="hidden" value="{{ $service[0]->photo }}" name="image">
                                        <label class="btn btn-primary upload_btn">
                                            Upload<input type="file" accept="image/png,image/jpeg,image/jpg" name="photo" onchange="displaySelectedPhoto('upload_photo','image')" id="upload_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                        </label>
                                    </div>
                                </div>

                    
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="update_text
                                                "><b>Content</b></label><br>
                                            <textarea rows="8" class="form-control" id="update_content" name="content" required>{{ $service[0]->content }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            
                                
                                <button class="btn btn-primary">Update</button>

                                
                 

                                
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

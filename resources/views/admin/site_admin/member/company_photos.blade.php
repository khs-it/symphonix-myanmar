@extends('admin.layouts.site_admin.site_admin_design')
@section('title','Admin | Photos')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .imagePreview {
            width: 100%;
            height: 150px;
            background-position: center center;
            background:url('http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg');
            background-color:#fff;
            background-size: cover;
            background-repeat:no-repeat;
            display: inline-block;
            /* box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2); */
        }
        .upload_btn
        {
            display:block;
            border-radius:10px;
            /* box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2); */
            margin-bottom: 15px;
        }
        .imgUp
        {
            margin-bottom:15px;
        }
    </style>
@endsection

@section('nav_bar_text')
    Company Gallery
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary row">
                         <div class="col-md-8"></div>
                         <div class="col-md-4">
                            <button class="btn btn-lg btn-primary rounded-0 float-right"></button>
                         </div>
                        </div>
                        
                        <div class="card-body row image_data">   
                             <div class="card" style="width: 17rem;margin-left:40px;">
                  
                                <img src="{{asset('/images/mon.jpg')}}" style="padding-right:30px;width:303px;height:250px !important;"><br>
                                <div class="card-body">
                                {{-- <button class="btn btn-info" type="button" onclick="imgs({{$gallery_photo['id']}})">Edit</button> --}}
                                <button class="btn btn-info" type="button" onclick="">Edit</button>
                                </div>
                            </div>
                        </div><br>
                        
                        

                         {{-- <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                <img src="..." alt="...">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>


                  <!-- Edit modal -->
    <div class="modal fade" id="editImage" tabindex="-1" role="dialog" aria-labelledby="editImageTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editImageTitle">Edit Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              
                <form enctype="multipart/form-data" id="image_update">
                              {{csrf_field()}}
                <input type="hidden" name="id" value="" id="edit_id">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="form-group">
                                <img src="{{asset('images/default.jpg')}}" class="img-thumbnail event_input_photo" id="image_id" style="width: 100%;height: 200px;">
                                <label class="btn btn-sm btn-primary container-fluid m-0 rounded-0" for="photo">Upload</label>
                                    <input type="file" accept="image/png,image/jpeg,image/jpg" id="photo" class="form-control error_input_photo" onchange="displaySelectedPhoto('photo','image_id')">
                                    <span id="error_photo">
                                          
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-8 offset-md-2">
                                  <button type="submit" class="btn btn-outline-info btn-md rounded-0 container-fluid"><i class="fas fa-cogs"></i>&nbsp; Change</button>
                                </div>
                              </div>
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
    <script>
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
@endsection
@extends('admin.layouts.site_admin.site_admin_design')
@section('title','Admin | Sub Category')
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
    Category
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <button type="button" name="button" class="btn btn-success pull-right" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Add</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable">
                                    @if(Session::has('create_course'))
                                        <div class="alert alert-success">
                                            {{ Session::get('create_course') }}
                                        </div>
                                    @endif

                                    @if(Session::has('delete_course'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('delete_course') }}
                                        </div>
                                    @endif

                                    @if(Session::has('update_course'))
                                        <div class="alert alert-success">
                                            {{ Session::get('update_course') }}
                                        </div>
                                    @endif
                                    
                   

                                    <thead class="text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Photo
                                    </th>
                                    <th width="15%">
                                        Title
                                    </th>
                                    <th>
                                        Subtitle
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Outline
                                    </th>
                                    <th>
                                        Requirement
                                    </th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($courses as $course)
                                            <tr>
                                                <td>{{ $course->id }}</td>
                                                <td><img src="{{asset('upload/course_photos/'.$course->course_photo)}}" width="120px" alt=""></td>
                                                <td>{{ $course->course_title }}</td>
                                                <td>{{ $course->course_subtitle }}</td>
                                                <td>{{ $course->course_description }}</td>
                                                <td>{{ $course->course_outline }}</td>
                                                <td>{{ $course->course_requirement }}</td>
                                                <td>
                                                <a href="{{ url('edit_course/'.$course->id) }}">
                                                    <button class="btn btn-sm btn-primary">Update</button>
                                                </a>
                                                <a href="{{ url('delete_course/'.$course->id) }}"><button class="btn btn-sm btn-danger">Delete</button></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- insert_model --}}
        <div class="modal fade" id="modalBox">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Category</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('create_course') }}" method="post" enctype="multipart/form-data" class="md-form">
                            @csrf
                              <div class="row">
                                <div class="col-sm-4 imgUp">
                                    <img src="{{asset('images/default.jpg')}}" id="image" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn">
                                        Upload<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('upload_photo','image')" id="upload_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                             <textarea name="title"
                                            class="form-control" name="title" required rows="1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="subtitle">Subtitle</label>
                                                <input type="subtitle" name="subtitle" class="form-control" id="date" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="detail
                                            "><b>Course Description</b></label><br>
                                        <textarea name="course_description" rows="8" class="form-control" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="detail
                                            "><b>Course Outline</b></label><br>
                                        <textarea name="course_outline" rows="8" class="form-control" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="detail
                                            "><b>Course Requirement</b></label><br>
                                        <textarea name="course_requirement" rows="8" class="form-control" required></textarea>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Create</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit modal -->
        <div class="modal fade" id="edit_modalBox">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Category</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">


                        <form id="update_data">
                            {{csrf_field()}}
                            <div class="row">
                                <input type="hidden" name="id" class="form-control" id="id_edit" value="">
                                <div class="col-sm-4 imgUp">
                                    <img src="{{asset('images/default.jpg')}}" id="imgs" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn">
                                        Upload<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('update_photo','imgs')" id="update_photo" name="logo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                </div>
                                <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="update_name">Name</label>
                                                    <input type="text" id="update_name" name="name" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <button class=" btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary pull-right" id="update_btn">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection


@section('js')
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            var t = $('#dataTable').DataTable();

            $('#insert_category').on('submit',function(e){
                e.preventDefault(); //not to refresh
                var all_data = new FormData(this);
                $.ajax({
                    url :  "{{url('/insert_category')}}",
                    type : "post",
                    data :  all_data,
                    cache : false,
                    processData : false,
                    contentType : false,
                    success : function(data){
                        toastr.success('Insert Data Successful');
                        $('#modalBox').modal('hide');
                        load();
                    }
                });
            });

            load();

            function load(){
                $.ajax({
                    url : "{{url('/get_all_category')}}",
                    type : "get",
                    cache : false,
                    success : function(data){
                        var string_data = JSON.parse(data); //json to string
                        t.clear();
                        for(var i = 0; i < string_data.length; i++){
                            t.row.add([
                               string_data[i]['id'],
                                '<img src="'+string_data[i]['logo_url']+'" alt="" width="100px" height="100px">',
                                string_data[i]['name'],
                                '<button class="btn btn-success btn-sm" data-toggle="modal" data-keyboard="false" data-backdrop="static"  onclick="edit_data('+string_data[i]['id']+')" data-target="#edit_modalBox">Edit</button>'+
                                '<button class="btn btn-danger btn-sm">Delete</button>'
                            ]).draw(false);
                        }
                    }
                });
            }

            edit_data = function (id) {
                // alert(id);
                $.ajax({
                    url : "../edit_category/"+id,
                    type : "get",
                    cache : false,
                    success : function(data){
                        var string = JSON.parse(data);
                        // console.log(string);
                        $('#id_edit').val(string['id']);
                        $('#imgs').attr('src',string['logo_url']);
                        $('#update_name').val(string['name']);
                        $('#edit_modalBox').modal('show');
                    }
                });
            }

            $('#update_data').on('submit',function(e){
                e.preventDefault();
                var all_data = new FormData(this);
                $.ajax({
                    url : "{{url('/update_category')}}",
                    type : "post",
                    data : all_data,
                    cache : false,
                    processData : false,
                    contentType : false,
                    success : function(data){
                        toastr.success('Update Category Successful');
                        $('#edit_modalBox').modal('hide');
                        load();
                    }
                });
            });


            

        });
    </script>
@endsection




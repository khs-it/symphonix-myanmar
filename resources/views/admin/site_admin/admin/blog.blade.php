@extends('admin.layouts.site_admin.site_admin_design')
@section('title','Admin | Blog')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    {{-- //for ajax --}}

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
    Blog
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
                                <table class="table" id="datatable">
                                    @if(Session::has('create_blog'))
                                        <div class="alert alert-success">
                                            {{ Session::get('create_blog') }}
                                        </div>
                                    @endif

                                    @if(Session::has('delete_blog'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('delete_blog') }}
                                        </div>
                                    @endif

                                    @if(Session::has('update_blog'))
                                        <div class="alert alert-success">
                                            {{ Session::get('update_blog') }}
                                        </div>
                                    @endif

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    
                                    <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Photo
                                    </th>
                                    <th width="20%">
                                        Title
                                    </th>
                                    <th>
                                        Content
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                    </thead>
                                    <tbody>
                                        @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{ $blog->id }}</td>
                                            <td><img src="{{ asset('upload/blog_photos/'.$blog->photo)}}" width="120px"></td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->content }}</td>
                                            <td>
                                                <a href="{{ url('edit_blog/'.$blog->id) }}">
                                                    <button class="btn btn-sm btn-primary">Update</button>
                                                </a>
                                                <a href="{{ url('delete_blog/'.$blog->id) }}"><button class="btn btn-sm btn-danger">Delete</button></a>
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
                        <h4 class="modal-title">Create New Blog</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('create_blog') }}" method="post" enctype="multipart/form-data" class="md-form">
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
                                                <label for="name">Title</label>
                                                <textarea class="form-control" name="title" id="name" required rows="1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="text
                                            "><b>Content</b></label><br>
                                        <textarea rows="8" name="content" class="form-control" id="text" required></textarea>
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
                        <h4 class="modal-title">Edit Project</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-sm-4 imgUp">
                                    <input type="hidden" name="id" class="form-control" id="id_edit" value="">
                                    <img src="{{asset('images/default.jpg')}}" id="imgs" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn">
                                        Upload<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('update_photo','imgs')" id="update_photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="update_name">Title</label>
                                                <textarea class="form-control" id="update_name" required rows="1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_text
                                            "><b>Content</b></label><br>
                                        <textarea rows="8" class="form-control" id="update_content" required></textarea>
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

        $(document).ready( function () {
            var t = $('#datatable').DataTable();

            $('#insert_blog').on('submit',function(e){
                e.preventDefault();
                var all_data = new FormData(this);
                $.ajax({
                    url : "{{url('/insert_blog')}}",
                    type : "post",
                    data : all_data,
                    cache : false,
                    processData : false,
                    contentType : false,
                    success : function(data){
                        toastr.success('Insert Blog Successful');
                        $('#modalBox').modal('hide');
                        load();
                    }
                });
            });

            load();

            function load(){
                $.ajax({
                    url : "{{url('/get_all_blog')}}",
                    type : "get",
                    cache : false,
                    success : function(data){
                        var string_data = JSON.parse(data);
                        t.clear();
                        var no = 1;
                        for(var i = 0; i < string_data.length; i++){
                            t.row.add([
                                no++,
                                '<img src="'+string_data[i]['photo_url']+'" alt="" width="100px" height="100px">',
                                string_data[i]['name'],
                                string_data[i]['content'],
                                '<button class="btn btn-success btn-sm" onclick="edit_data('+string_data[i]['id']+')" data-toggle="modal" data-target="#edit_modalBox" data-keyboard="false" data-backdrop="static">Edit</button>',
                                '<button class="btn btn-danger btn-sm" onclick="delete_data('+string_data[i]['id']+')">Delete</button>'
                            ]).draw(false);
                        }
                        $('#insert_blog')[0].reset();
                    }
                });
            }

            delete_data = function (id){
                // alert(id);
                if(confirm('Are u sure you want to delete') == true){
                    $.ajax({
                        url : "../delete_blog/"+id,
                        type : "get",
                        cache : false,
                        success :function (data){
                            toastr.success('Delete Blog Data Successful');
                                load();
                        }
                    });
                }
            }

            edit_data = function(id){
                alert(id);
                $.ajax({
                    url : "../edit_event/"+id,
                    type : "get",
                    cache : false,
                    success : function(data){
                        // alert(data);
                        var string = JSON.parse(data);
                        $('#id_edit').val(string['id']);
                        $('#imgs').attr('src',string['photo_url']);
                        $('#update_name').val(string['name']);
                        $('#update_content').val(string['content']);
                        $('#edit_modalBox').modal('show');
                    }
                });
            }

 $('#update_blog').on('submit',function(e){
            e.preventDefault();
            var all_data = new FormData(this);
            $.ajax({
                url : "{{url('/update_blog')}}",
                type : "post",
                data : all_data,
                cache : false,
                processData : false,
                contentType : false,
                success : function(data){
                    toastr.success('Update data Successful');
                    $('#edit_modalBox').modal('hide');
                    load();
                }
            });
           });






        });
    </script>
@endsection
{{-- 
Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam officia nam iste itaque facere, distinctio non vero. Cumque molestias, dignissimos aliquam inventore repudiandae fugit. Doloribus maxime adipisci placeat veniam odio! --}}


@extends('admin.layouts.site_admin.site_admin_design')
@section('title','Admin | Event')
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
    Event
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
                                    @if(Session::has('create_event'))
                                        <div class="alert alert-success">
                                            {{ Session::get('create_event') }}
                                        </div>
                                    @endif

                                    @if(Session::has('update_event'))
                                        <div class="alert alert-success">
                                            {{ Session::get('update_event') }}
                                        </div>
                                    @endif

                                    @if(Session::has('delete_event'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('delete_event') }}
                                        </div>
                                    @endif
                                    
                                    <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Photo
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Content
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        Time
                                    </th>
                                    <th>
                                        Place
                                    </th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($events as $event)
                                        <tr>
                                            <td>{{ $event->id }}</td>
                                            <td><img src="{{asset('upload/event_photos/'.$event->photo)}}" width="120px"></td>
                                            <td>{{ $event->title }}</td>
                                            <td>{{ $event->content }}</td>
                                            <td>{{ $event->date }}</td>
                                            <td>{{ $event->time }}</td>
                                            <td>{{ $event->place }}</td>
                                            <td>
                                                <a href="{{ url('edit_event/'.$event->id) }}">
                                                    <button class="btn btn-sm btn-primary">Update</button>
                                                </a>
                                                <a href="{{ url('delete_event/'.$event->id) }}"><button class="btn btn-sm btn-danger">Delete</button></a>
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
                        <h4 class="modal-title">Create New Event</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('create_event') }}" method="post" enctype="multipart/form-data" class="md-form">
                            @csrf

                            <div class="row">
                                <div class="col-sm-4 imgUp">
                                    <img src="{{asset('images/default.jpg')}}" id="image" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn">
                                        Upload<input type="file" name="photo" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('upload_photo','image')" id="upload_photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required>
                                    </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                             <textarea name="title"
                                            class="form-control" id="title" required rows="1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="date" name="date" class="form-control" id="date" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="timing">Time</label>
                                                <input type="time" name="time" class="form-control" id="date" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="location">Place</label>
                                        <textarea class="form-control" name="place" id="location" required rows="1"></textarea>
                                    </div>
                                </div>
                 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="detail
                                            "><b>Content</b></label><br>
                                        <textarea name="content" rows="8" class="form-control" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Create</button>
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
                        <h4 class="modal-title">Edit Event</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">


                   
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

        $(document).ready(function(){
        var t = $('#datatable').DataTable();

        $('#insert_event').on('submit',function(e){
                e.preventDefault();
                var all_data = new FormData(this);
                $.ajax({
                    url : "{{url('/insert_event')}}",
                    type : "post",
                    data : all_data,
                    cache : false,
                    processData : false,
                    contentType : false,
                    success : function(data){
                     toastr.success('Insert Event Successful');
                        $('#modalBox').modal('hide');
                        load();
                    }
                });
            });
        load();

         function load(){
                $.ajax({
                    url : "{{url('/get_all_event')}}",
                    type : "get",
                    cache : false,
                    success : function(data){
                        var string_data = JSON.parse(data);
                        t.clear();
                        var no = 1;
                        for(var i = 0; i < string_data.length; i++){
                            var link = "{{ url('/event_detail') }}/"+string_data[i]['id'];
                            t.row.add([
                                no++,
                                '<img src="'+string_data[i]['photo_url']+'" alt="" width="100px" height="100px">',
                                string_data[i]['title'],
                                string_data[i]['date'],
                                '<a href="'+link+'" target="_blank" class="btn btn-info">Detail</a>'+
                                
                                '<button class="btn btn-success btn-sm" onclick="edit_data('+string_data[i]['id']+')" data-toggle="modal" data-target="#edit_modalBox" data-keyboard="false" data-backdrop="static">Edit</button>'+
                                '<button class="btn btn-danger btn-sm" onclick="delete_data('+string_data[i]['id']+')">Delete</button>'
                            ]).draw(false);
                        }
                        $('#insert_event')[0].reset();
                    }
                });
            }

              delete_data = function (id){
                //alert(id);
                if(confirm('Are u sure you want to delete') == true){
                    $.ajax({
                        url : "../delete_event/"+id,
                        type : "get",
                        cache : false,
                        success :function (data){
                            toastr.success('Delete Event Data Successful');
                                load();
                        }
                    });
                }
            }

               edit_data = function(id){
                //alert(id);
                $.ajax({
                    url : "../edit_event/"+id,
                    type : "get",
                    cache : false,
                    success : function(data){
                        // alert(data);
                        var string = JSON.parse(data);
                        $('#id_edit').val(string['id']);
                        $('#imgs').attr('src',string['photo_url']);
                        $('#update_title').val(string['title']);
                        $('#update_date').val(string['date']);
                        $('#edit_modalBox').modal('show');
                        $('#update_timing').val(string['timing']);
                        $('#update_location').val(string['location']);
                         $('#update_cat').val(string['update_cat']);
                         //$('#update_detail').val(string['detail']);
                           $('#update_detail').summernote({
                            height :'200px',
                            placeholder : 'Text',
                            toolbar: [
    // [groupName, [list of button]]
                            ['style', ['bold', 'italic', 'underline', 'clear']],
                            ['font', ['strikethrough', 'superscript', 'subscript']],
                            ['fontsize', ['fontsize']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['height', ['height']]
                            ]
                        });
                        $('#update_detail').summernote('code',string['detail'])
                        $('#edit_modalBox').modal('show');
                    }
                });
            }



$('#update_event').on('submit',function(e){
            e.preventDefault();
            var all_data = new FormData(this);
            $.ajax({
                url : "{{url('/update_event')}}",
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


        $('#detail').summernote({
        height :'200px',
        placeholder : 'Text',
        toolbar: [
    // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
  ]
});
        });

    </script>
@endsection


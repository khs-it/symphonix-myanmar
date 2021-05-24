@extends('admin.layouts.site_admin.site_admin_design')
@section('title','Admin | Contact')
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
    Admin Panel
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <button type="button" name="button" class="btn btn-primary pull-right" data-keyboard="false" data-backdrop="static"></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                <h3>Welcome From Admin Panel</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est itaque, porro earum quisquam sed, laudantium aut illo veniam id possimus provident error aliquid recusandae. Atque incidunt quibusdam ut nobis nisi?</p>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Modal -->
<div class="modal fade" id="detailData" tabindex="-1" role="dialog" aria-labelledby="detailDataTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
         {{-- <h4 class="" style="text-align:center;padding-left:-20px;">Contact Detail</h4> --}}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {{-- <div class="modal-body text-center lg"> 
            <div class="table-responsive">  --}}
                
           {{-- </div> --}}
                {{-- <p class="name">

                </p>
                <p class="email">

                </p>
                <p class="subject">

                </p>
                <p class="message">

                </p> --}}
       {{-- </div>  --}}
    </div>
  </div>
</div>
    </div>

@endsection


@extends('admin.layouts.site_admin.site_admin_design')
@section('title','Admin | Company Detail')
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
    Member Account Detail
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        {{-- <div class="card-header card-header-primary">
                        <button type="button" name="button" class="btn btn-success pull-right" data-keyboard="false" data-backdrop="static"><a href="">Update Photos</a></button>
                        </div> --}}
                        <div class="card-body">
                            <div class="table-responsive">
                               <table class="table table-hovered">
                                    <tbody>
                                     <tr>
                                        <td><b>Logo</b></td>
                                        <td><img src="#" alt="" width="150px;" height="100px;"></td>
                                      </tr>
                                      <tr>
                                        <td><b>Name</b></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td><b>Sub Category</b></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td><b>Email</b></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td><b>Phone</b></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td><b>Address</b></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td><b>Web Url</b></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td><b>Facebook Url</b></td>
                                        <td></td>
                                      </tr>
                                       <tr>
                                        <td><b>What we do</b></td>
                                        <td></td>
                                      </tr>
                                       <tr>
                                        <td><b>Why join us</b></td>
                                        <td></td>
                                      </tr>
                                       <tr>
                                        <td><b>Vision</b></td>
                                        <td></td>
                                      </tr>
                                       <tr>
                                        <td><b>Mission</b></td>
                                        <td></td>
                                      </tr>
                                       <tr>
                                        <td><b>About us</b></td>
                                        <td></td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
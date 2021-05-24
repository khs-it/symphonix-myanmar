@extends('admin.layouts.site_admin.site_admin_design')
@section('title','Admin | Company')
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
    Company List
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            {{-- <h3>Company List</h3> --}}
                            <button type="button" name="button" class="btn btn-success pull-right" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Add</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead class=" text-primary">
                                    <th width="10%">
                                        No
                                    </th>
                                    <th width="20%">
                                        Photo
                                    </th>
                                    <th width="15%">
                                        Name
                                    </th>
                                    <th width="10%">
                                        Email
                                    </th>
                                    <th width="100%">Action</th>
                                    </thead>
                                    <tbody>

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
                        <h4 class="modal-title">Create New Company</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" class="md-form">
                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-sm-4 imgUp">
                                    <img src="{{asset('images/default.jpg')}}" id="image" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn">
                                        Upload Logo<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('upload_logo','image')" id="upload_logo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required>
                                    </label>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name"><b>Company Name</b></label>
                                                <input type="text" class="form-control" id="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name"><b>Select Member</b></label>
                                                <select class="form-control">
                                                    <option value="">Moon Lay</option>
                                                    <option value="">Phyo Thazin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name"><b>Company Type(Ads or Normal)</b></label>
                                                <select class="form-control">
                                                   <option value="ads">Ads Company</option>
                                                   <option value="normal">Normal Company</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="date"><b>Ads Date</b></label>
                                                <input type="date" id="date" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for=""><b>Category</b></label>
                                                <select class="form-control">
                                                    <option>Software</option>
                                                    <option>Education</option>
                                                    <option>Restaurant</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email"><b>Email</b></label>
                                                <input type="email" class="form-control" id="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="btn btn-primary upload_btn">
                                                    Upload Photos<input type="file" accept="image/png,image/jpeg,image/jpg" id="upload_photo" class="uploadFile img" value="Upload Photos" style="width: 0px;height: 0px;overflow: hidden;" required multiple="multiple">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone"><b>Phone</b></label>
                                        <input type="phone" class="form-control" id="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address
                                            "><b>Address</b></label>
                                        <textarea rows="3" class="form-control" id="address" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="web_url
                                            "><b>web-url</b></label>
                                        <input type="text" class="form-control" id="web_url" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook_url
                                            "><b>facebook-url</b></label>
                                        <input type="text" class="form-control" id="facebook_url" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="what_we_do"
                                            "><b>what-we-do</b></label>
                                        <textarea rows="3" class="form-control" id="what_we_do" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="why_join_us
                                            "><b>why-join-us</b></label>
                                        <textarea rows="3" class="form-control" id="why_join_us" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vision
                                            "><b>vision</b></label>
                                        <textarea rows="3" class="form-control" id="vision" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mission
                                            "><b>mission</b></label>
                                        <textarea rows="3" class="form-control" id="mission" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="about_us
                                            "><b>about us</b></label>
                                        <textarea rows="3" class="form-control" id="about_us" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Create</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

       <div class="modal fade" id="edit_modalBox">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Company Data</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form id="update_data" class="md-form">
                            {{csrf_field()}}
                            <input type="hidden" id="id_edit">
                            <div class="row">
                                <div class="col-sm-4 imgUp">
                                    <img src="{{asset('images/default.jpg')}}" id="imgs" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn">
                                        Upload Logo<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('update_logo','imgs')" id="update_logo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="update_name">CompanyName</label>
                                                <input type="text" class="form-control" id="update_name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for=""><b>Company Type (Ads or Normal)</b></label>
                                                <select class="form-control">
                                                    <option value="normal" id="normal">Normal Company</option>
                                                    <option value="ads" id="ads">Ads Company</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for=""><b>Ads Date</b></label>
                                                <input type="date" id="ads_date" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        
                                        <label for="member"><b>Select Member</b></label><br>
                                        <select class="form-control" required>
                                        <option value="">Mon Lay</option>
                                        <option value="">Phyo Thazin</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="category"><b>Category</b></label>
                                        <select class="form-control" id="category">
                                            <option value="">Software</option>
                                            <option value="">Construction</option>
                                        
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_email">Email</label>
                                        <input type="email" class="form-control" id="update_email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_phone">Phone</label>
                                        <input type="tel" class="form-control" id="update_phone" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_address"><b>Address</b></label><br>
                                        <textarea rows="3" class="form-control" id="update_address" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_web_url"><b>web-url</b></label><br>
                                        <input type="text" class="form-control" id="update_web_url" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_facebook_url"><b>facebook-url</b></label><br>
                                        <input type="text" class="form-control" id="update_facebook_url" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_what_we_do"><b>what-we-do</b></label><br>
                                        <textarea rows="3" class="form-control" id="update_what_we_do" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_why_join_us"><b>why-join-us</b></label><br>
                                        <textarea rows="3" class="form-control" id="update_why_join_us" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_vision"><b>vision</b></label><br>
                                        <textarea rows="3" class="form-control" id="update_vision" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_mission"><b>mission</b></label><br>
                                        <textarea rows="3" class="form-control" id="update_mission" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_about_us"><b>about us</b></label><br>
                                        <textarea rows="3" class="form-control" id="update_about_us" required></textarea>
                                    </div>
                                </div>                   
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Update</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
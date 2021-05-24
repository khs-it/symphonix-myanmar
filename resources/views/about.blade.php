@extends('user.main')

@section('content')

@include('user.header')

    <div id="about-overlay">
        <div class="container-fluid">
            <div class="about-head">
                <h1>About Us</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">about us</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="about-info pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div data-aos="fade-right" data-aos-duration="1500">
                        <img src="{{asset('upload/about_photos/'.$about[0]->photo)}}">
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">
                    <div data-aos="fade-left" data-aos-duration="1500">
                        <h3>About Us</h3>

                        <h2>{!! $about[0]->title !!}</h2>

                        <p>{{ $about[0]->content }}</p> 
                        <a href="{{ $about[0]->facebook_url }}" target="_blank"><button class="btn btn-primary">facebook</button></a>
                        <a href="{{ $about[0]->google_url }}" target="_blank"><button class="btn btn-danger">google</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="about-mission">
        <div class="container-fluid" data-aos="fade-up" data-aos-duration="1500">
            <div class="row">
                <div class="col-md-4 col-sm-12">

                    <h3>Mission</h3>
                    <p>{{ $about[0]->mission }}</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h3>Vision</h3>
                    <p class="">{{ $about[0]->vision }}.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h3>Passing</h3>
                    <p class="">{{ $about[0]->passing }}</p>
                </div>
            </div>
        </div>
    </div>


@include('user.footer')

@endsection
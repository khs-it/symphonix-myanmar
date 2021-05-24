@extends('user.main')

@section('content')

@include('user.header')

    <div id="service-overlay">
        <div class="container-fluid">
            <div class="service-page-head">
                <h1>Our Service</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">pricing</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="service-page" id="service">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="service-page-content" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500"> 
                        <div class="service-head ">
                            <h3>We Deliever <br><strong> Excellent Service</strong></h3>

                            <p>{!! $service[0]->content !!}</p>
                            

                        </div>

                    </div>

                </div>
                <div class="col-md-4 col-sm-12 service-img">
                    <img src="{{ asset('upload/service_photos/'.$service[0]->photo) }}" class="img-fluid" style="height:500px;" alt="service" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500">
                </div>

            </div>
        </div>
    </div>

    @include('user.footer')

@endsection
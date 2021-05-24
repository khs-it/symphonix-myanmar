@extends('user.main')

@section('content')

@include('user.header')

    <div id="event-overlay">
        <div class="container-fluid">
            <div class="event-head">
                <h1>Latest Events</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="event-page">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-8 col-sm-12">
                    <div class="latest-event">
                        @foreach($events as $event)
                        <div class="card mb-4" data-aos="fade-up" data-aos-duration="1500">
                            <div class="row no-gutters">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <img src="{{asset('upload/event_photos/'.$event->photo)}}" class="card-img img-fluid w-100" alt="not found">
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $event->title }}</h5>
                                        <p class="card-text">{{ $event->content }}</p>
                                        <p class="card-text"><small class="text-muted">Update At {{ $event->time }}, {{ $event->date }} <span class="text-success float-right">At {{ $event->place }}</span></small></p>
                                        <a href="" class="text-decoration-none">join now <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="text-center more">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="recent-event">
                        <h3 class="mb-5 p-0 text-uppercase">Recent Events</h3>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control w-50" placeholder="Search Event">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="assets/resource/images/event/3.jpg" class="card-img" alt="not found">
                                </div>
                                <div class="col-md-8 align-middle">
                                    <div class="card-body">
                                        <h5 class="card-title">Event Title</h5>
                                        <p class="card-text"><small class="text-muted"> 3:00:00 PM, 14, August, 2020, Friday <span class="text-success"> <br>At Kan-Daw-Gyi Park</span></small></p>
                                        <a href="" class="text-decoration-none">join now <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="assets/resource/images/event/3.jpg" class="card-img" alt="not found">
                                </div>
                                <div class="col-md-8 align-middle">
                                    <div class="card-body">
                                        <h5 class="card-title">Event Title</h5>
                                        <p class="card-text"><small class="text-muted"> 3:00:00 PM, 14, August, 2020, Friday <span class="text-success"> <br>At Kan-Daw-Gyi Park</span></small></p>
                                        <a href="" class="text-decoration-none">join now <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="assets/resource/images/event/3.jpg" class="card-img" alt="not found">
                                </div>
                                <div class="col-md-8 align-middle">
                                    <div class="card-body">
                                        <h5 class="card-title">Event Title</h5>
                                        <p class="card-text"><small class="text-muted"> 3:00:00 PM, 14, August, 2020, Friday <span class="text-success"> <br>At Kan-Daw-Gyi Park</span></small></p>
                                        <a href="" class="text-decoration-none">join now <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


@include('user.footer')

@endsection
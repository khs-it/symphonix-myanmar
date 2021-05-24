@extends('user.main')

@section('content')

@include('user.header')


    <div class="course-home-page">
        <div class="container-fluid">
            <div class="course-home-title">
                <h3>Learn EDM from our Online Courses</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="course-home-detail-page">
        <div class="container-fluid">

            <h3 class="text-uppercase">Symphonix EDM Online Class</h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut  </p>   

            <div class="row">
                @foreach($courses as $course)
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                      <img src="{{ asset('upload/course_photos/'.$course->course_photo) }}" class="card-img-top img-fluid" alt="not found">
                      <div class="card-body">
                        <h5 class="card-title">{{ $course->course_title }}</h5>
                        <p class="card-text"> {{ $course->course_description }}</p>
                        <a href="{{ url('course_detail/'.$course->id) }}" class="btn">read more</a>
                      </div>
                    </div>
                </div>
                @endforeach
    
            </div>  
           <!--  <div class="row">
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500">
                    <div class="course-box ">
                        <i class="fab fa-accusoft text-center"></i>
                        <h3 class="pb-3">Online Course 1</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis!
                        </p>

                        <div><a href="course-detail.html" class="btn">Enroll Now</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500">
                    <div class="course-box ">
                        <i class="fab fa-accusoft text-center"></i>
                        <h3 class="pb-3">Online Course 1</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis!
                        </p>

                        <div><a href="course-detail.html" class="btn">Enroll Now</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500">
                    <div class="course-box ">
                        <i class="fab fa-accusoft text-center"></i>
                        <h3 class="pb-3">Online Course 1</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis!
                        </p>

                        <div><a href="course-detail.html" class="btn">Enroll Now</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500">
                    <div class="course-box ">
                        <i class="fab fa-accusoft text-center"></i>
                        <h3 class="pb-3">Online Course 1</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis!
                        </p>

                        <div><a href="course-detail.html" class="btn">Enroll Now</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500">
                    <div class="course-box ">
                        <i class="fab fa-accusoft text-center"></i>
                        <h3 class="pb-3">Online Course 1</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis!
                        </p>

                        <div><a href="course-detail.html" class="btn">Enroll Now</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500">
                    <div class="course-box ">
                        <i class="fab fa-accusoft text-center"></i>
                        <h3 class="pb-3">Online Course 1</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis!
                        </p>

                        <div><a href="course-detail.html" class="btn">Enroll Now</a></div>
                    </div>
                </div>

            </div> -->
        </div>
    </div>

    @include('user.footer')

@endsection
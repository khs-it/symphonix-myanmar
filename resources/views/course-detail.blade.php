@extends('user.main')

@section('content')

@include('user.header')


    <div class="course-page">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8">
                    <div class="course-position">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">EDM Class</a></li>
                            <li class="breadcrumb-item"><a href="#">{{ $course->course_subtitle }}</a></li>
                        </ol>
                        <h3>
                            #{{ $course->id }} : {{ $course->course_title }}
                        </h3>
                        <h5 class="pt-3 text-uppercase">Course Description</h5>
                        <p>{{ $course->course_description }}</p>
                        <a href="" class="btn">buy this course</a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card mt-5">
                        <img src="{{ asset('upload/course_photos/'.$course->course_photo) }}" class="card-img-top" alt="not found">
              
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="course-detail-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="course-content">
                        <p>

                            <h3>What you'll learn</h3>
                            <ul>
                                <li>{{ $course->course_outline }}</li>
                            </ul>

                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="requirement-box">
                        <h3>Requirements</h3>
                        <ul>

                            <li>{{ $course->course_requirement }}</li>
                            

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    </div>-->

   
    @include('user.footer')

@endsection
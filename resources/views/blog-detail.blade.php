@extends('user.main')

@section('content')

@include('user.header')

    
    <!-- blog -->

    <div class="blog-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('upload/blog_photos/'.$blog->photo) }}" class="img-fluid" alt="not found">
                </div>
                <div class="col-md-6">
                    <h3>{{ $blog->title }}</h3>
                    <div class="mb-3">
                        <small class=" text-success">
                            <!-- Last Update at 27, August, 2020, Friday -->
                            {{ $blog->created_at->diffForHumans() }}  
                        </small>
                    </div>
                    <p>{{ $blog->content }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- end -->

    <!--
    <div class="recent-blog mt-5">
        <div class="container-fluid">
            <h3 class="">Related Blogs</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eius, veniam minus nulla quos beatae consequatur.</p>

            <div class="owl-carousel mt-5">
                <div>
                    <div class="card">
                        <img src="assets/resource/images/blog/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ad nemo error dolore</p>
                            <a href="#" class="btn">read more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <img src="assets/resource/images/blog/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ad nemo error dolore</p>
                            <a href="#" class="btn">read more</a>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="card">
                        <img src="assets/resource/images/blog/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ad nemo error dolore</p>
                            <a href="#" class="btn">read more</a>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="card">
                        <img src="assets/resource/images/blog/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ad nemo error dolore</p>
                            <a href="#" class="btn">read more</a>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="card">
                        <img src="assets/resource/images/blog/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ad nemo error dolore</p>
                            <a href="#" class="btn">read more</a>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="card">
                        <img src="assets/resource/images/blog/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ad nemo error dolore</p>
                            <a href="#" class="btn">read more</a>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="card">
                        <img src="assets/resource/images/blog/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ad nemo error dolore</p>
                            <a href="#" class="btn">read more</a>
                        </div>
                    </div>

                </div>


            </div>

        </div>

    </div>

    -->


    @include('user.footer')

@endsection
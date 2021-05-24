@extends('user.main')

@section('content')

@include('user.header')

    <div id="blog-overlay">
        <div class="container-fluid">
            <div class="blog-head">
                <h1>Our Blogs</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">BLogs</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="blog-page">
        <div class="container-fluid">
            <h3>
                Latest Blog
            </h3>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati a rem quos.</p>

            <div class="blog-page-card">
                <div class="row ">
                    @foreach($blogs as $blog)
                    <div class="col-md-3 col-sm-6 col-xs-12 ">
                        <div class="card">
                            <img src="{{ asset('upload/blog_photos/'.$blog->photo) }}" class="card-img-top img-fluid  text-center" style="height:250px;" alt="...">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 18px;">{{ $blog->title }}</h4>
                                <p class="card-text">{{ substr($blog->content,0,50) }} ... </p>
                                <a href="{{ url('blog_detail/'.$blog->id) }}" class="btn">view details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    

                </div>
            </div>

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


@include('user.footer')

@endsection
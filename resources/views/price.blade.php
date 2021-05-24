@extends('user.main')

@section('content')

@include('user.header')

    <div id="pricing-overlay">
        <div class="container-fluid">
            <div class="pricing-head">
                <h1>Choose A Plan For Your Seat</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">pricing</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="pricing-info">
        <div class="pricing-blog">
            <div class="container-fluid" data-aos="fade-up" data-aos-duration="1500">
                <div class="row">
                    @foreach($tickets as $ticket)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-box">
                            <h3>{{ $ticket->title }}</h3>
                            <p>{{ $ticket->content }}</p>
                            <div class="text-center pt-3">
                                <a href="" class="btn ">Book Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
        <div class="pricing-recommendation">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div data-aos="fade-right" data-aos-duration="1500">
                            <h3>How to Choose the Seats</h3>
                            <p>1 - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae architecto similique accusantium vitae voluptatum, dolores voluptas recusandae tenetur natus, temporibus saepe velit amet error aperiam esse fugit ipsam aspernatur ut?</p>
                            <p>2 - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, fuga ducimus totam velit enim explicabo ea, voluptatum dicta vitae repellat similique sed? Cumque maxime, pariatur est ab, quia nostrum non.</p>
                            <p>3 - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus repudiandae corrupti voluptatum architecto quaerat cumque corporis, facilis odio suscipit provident tenetur accusantium quasi iusto quod ipsa, maxime recusandae ex aut.</p>

                            <p>4 - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ducimus iusto nesciunt voluptas, sed explicabo, cum praesentium! Non sunt nihil iste, voluptas officia, at beatae. Tempora enim possimus magni veniam!</p>

                            <p>5 - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet molestiae deleniti earum quas repudiandae, odio fugit quaerat facilis suscipit assumenda ipsum doloremque esse laboriosam aspernatur vero repellat. Molestias, cupiditate culpa?</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="text-center">
                            <img src="assets/resource/images/price/thinking.jpg" class="img-fluid" alt="not found">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@include('user.footer')

@endsection
@extends('user.main')

@section('content')

@include('user.header')


    <!-- head end -->

    <div class="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12 pt-5">
                    <div class="contact-detail  pt-5">
                        <h4>contact us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem placeat asperiores?</p>

                        <ul class="list-inline">
                            <li>
                                <a href="">
                                    <i class="fas fa-envelope-open pr-3"></i> <span>symphonixedm@gmail.com</span>
                                </a>

                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-phone-square-alt pr-3"></i>
                                    <span>+959-977-977-977</span>
                                </a>

                            </li>

                        </ul>
                        <ul class="list-inline ">
                            <li class="list-inline-item pr-2">
                                <i class="fab fa-facebook-square "></i>
                            </li>
                            <li class="list-inline-item pr-2">
                                <i class="fab fa-twitter-square pr-2"></i>
                            </li>
                            <li class="list-inline-item pr-2">
                                <i class="fab fa-youtube"></i>
                            </li>
                            <li class="list-inline-item pr-2">
                                <i class="fab fa-instagram"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h3>Let's Stay In <strong class="text-danger">Touch</strong></h3>
                    @if(Session::has('contact_success'))
                        <div class="alert alert-success">
                            {{ Session::get('contact_success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <div class="contact-form pt-5">
                        <form action="{{ url('create_contact') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Your Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="" cols="30" rows="6" placeholder="Message Here"></textarea>
                            </div>
                            <button class="btn text-uppercase">send message</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- google map -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.186790068822!2d96.12609631439118!3d16.866651988392668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c195ddc1ec9727%3A0x7f04c265560c9d5a!2sSymphonix%20EDM%20Myanmar!5e0!3m2!1smy!2smm!4v1598450921798!5m2!1smy!2smm" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <!-- map end -->




    @include('user.footer')

@endsection
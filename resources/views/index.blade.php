@extends('user.main')

@section('content')

@include('user.header')

    <header>

        <div class="header">

        </div>
        
        <div class="container-fluid head-content">
            <div class="heading">
                <h3 class="animate__animated animate__fadeInLeft animate__slow">Symphonix EDM Myanmar</h3>
                <h4 class="animate__animated animate__fadeInLeft animate__delay-1s animate__slower">The Best Online Edm Ticket Service</h4>
                <div class="head-btn mt-3">

                    <a href="#viewmore" class="btn btn-default text-white btn-sm animate__animated animate__fadeInUp animate__delay-1s animate__slow" >View More</a>
                    <a href="#" class="btn btn-default text-white btn-sm ml-3 animate__animated animate__fadeInUp animate__delay-2s animate__slow">Subscribe</a>
                </div>

            </div>
        </div>
    </header>
    <!-- head end -->

    <!-- event -->
	<div class="event clearfix" id="event" >
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12" >
					<div class="trending-event" data-aos="fade-right">
						<h3><strong>No.1</strong>
							Trending Event
							<br> In Yangon
						</h3>
						<p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae modi consequuntur culpa similique maxime qui debitis placeat velit porro. Illo cum nisi alias pariatur odit soluta! Provident tenetur, modi laboriosam.</p>

						<a href="" class="btn btn-default"> about event</a>
					</div>
					
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12 " data-aos="fade-up" data-aos-duration="1500">
					<div class="event-description text-center">
						<div class="row">
							<div class="col-md-4 col-sm-6 border detail-bg"  >
								<div class="detail-box" >
									<div class="detail-data">
										<img src="assets/resource/images/icon/headphones.png" class="img-fluid" alt="icon">
										<h5 class="pt-2">The Best EDM Beats</h5>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 border detail-bg"> 
								<div class="detail-box" >
									<div class="detail-data">
										<img src="assets/resource/images/icon/open-24-hours.png" class="img-fluid" alt="icon">
										<h5 class="pt-2">24 Hours Support</h5>
									</div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-6 border detail-bg" > 
								<div class="detail-box">
									<div class="detail-data">
										<img src="assets/resource/images/icon/waiter.png" class="img-fluid" alt="icon">
										<h5 class="pt-2">Unique  Services</h5>
									</div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-6 border detail-bg">
								<div class="detail-box">
									<div class="detail-data">
										<img src="assets/resource/images/icon/team.png" class="img-fluid" alt="icon">
										<h5 class="pt-2">Friendly  Environment</h5>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 border detail-bg">
								<div class="detail-box">
									<div class="detail-data">
										<img src="assets/resource/images/icon/lightbulb.png" class="img-fluid" alt="icon">
										<h5 class="pt-2">Amazing  Ideas</h5>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 border detail-bg">
								<div class="detail-box">
									<div class="detail-data">
										<img src="assets/resource/images/icon/chronometer.png" class="img-fluid" alt="icon">
										<h5 class="pt-2">Unforgetable Time </h5>
									</div>
								</div>
							</div>
							
							
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- event end -->

    <!-- mp 4-->
    <div class="video">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="embed-responsive embed-responsive-16by9" data-aos="fade-right" data-aos-duration="2000">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/sOIsPuveCow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="description">
                        <h2> Potato</h2>
                        <ul class="list-inline">
                            <li>
                                Yair Yint Aung ft Htet Yan
                            </li>
                            <li>
                                Directed By Aung Sone
                            </li>
                            <li>
                                Story By Htet Yan
                            </li>
                            <li>
                                From Bo Bo Music Production
                            </li>

                            <li>
                                Release at 14, 5, 2020
                            </li>
                        </ul>
                        <a href="video-detail.html" class="btn ">more detail</a>

                    </div>


                </div>
            </div>

        </div>

    </div>
    <!-- end -->

    <!-- pricing -->
    <div class="pricing" id="pricing">
        <div class="container-fluid">
            <div class="price-heading ">
                <h3 class="text-center">Thicket Pricing Plans</h3>
                <div class="price-underline"></div>
                <p class="text-center ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ullam aspernatur repellendus.</p>

            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 mb-5" data-aos="fade-up" data-aos-duration="1500">
                    <div class="price-box text-center ">
                        <h3>$50/Person</h3>
                        <h4 class="text-center">GA</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dolor ratione veniam assumenda maxime fugiat pariatur atque, ipsum voluptatibus.</p>
                        <a href="price.html" class="justify-content-center btn btn-defalt text-white ">
                            Detail
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 mb-5" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
                    <div class="price-box text-center ">
                        <h3>$75/Person</h3>
                        <h4 class="text-center">VIP</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dolor ratione veniam assumenda maxime fugiat pariatur atque, ipsum voluptatibus.</p>
                        <a href="price.html" class="justify-content-center btn btn-defalt text-white ">
                            Detail
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 mb-5" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
                    <div class="price-box text-center">
                        <h3>$100/Person</h3>
                        <h4 class="text-center">VVIP</h4>
                        <p>Coming Soon ...</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- pricing end -->

    <!-- creater quotes -->

    <div class="quote">
        <div class="quote-content">
            <div class="quote-detail" data-aos="zoom-in" data-aos-duration="2000">
                <h3>"If you had a sign above every studio door saying, 'This Studio is a Musical Instrument,' it would make such a different approach to recording." <br> – Brian Eno</h3>
            </div>

        </div>

    </div>

    <!-- quote end -->

    <!-- about us -->
    <div class="about" id="about">
        <div class="container-fluid">
            <div class="about-content text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                <div class="about-home-head">
                    <h3 class="">About Us</h3>
                </div>
                <p>{{ $about[0]->content }}</p>
                <a href="about.html" class="btn btn-lg ">View More</a>
            </div>
        </div>
    </div>
    <!-- about end-->


    <!-- service -->
    <div class="service" id="service">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 service-img">
                    <img src="assets/resource/images/service/1.png" class="img-fluid" alt="service" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500">
                </div>
                <div class="col-md-8">
                    <div class="service-content" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
                        <div class="service-head ">
                            <div class="row">
                                <div class="col-1">
                                    <p class="vertical d-inline">what we do</p>
                                </div>
                                <div class="col-11 ">
                                    <h3>We Deliever <br><strong> Excellent Service</strong></h3>
                                </div>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia adipisci, dolor, assumenda repellendus nemo possimus. Sint quam tempora, a autem.</p>
                            <a href="service.html" class="btn ">View More</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- service end -->

    <!-- gallery -->
    <!-- <div class="gallery border">
        <div class="container-fluid">
            <h3>Event Gallery</h3>
            <p>Happy Moments & Unforgetable Times</p>

            <div class="">
                <div class="row">
                    <div class="col-md-4 col-sm-12  items">
                        <img src="assets/resource/images/gallery/portrait.jpg" class="img-fluid" alt="not found">
                        <div class="gallery-text">
                            <div class="text-detail">
                                <h3>Event 1</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit sed fuga natus, minima quos eos ex doloribus, perferendis nulla aspernatur earum ad, officiis inventore eum corrupti sunt atque, eveniet sit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12  items">
                        <div class="row">
                            <div class="col-md-6 col-sm-12  items">
                                <img src="assets/resource/images/gallery/lan-4.jpg" class="img-fluid" alt="not found">
                                <div class="gallery-text">
                                    <h3>Event 1</h3>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12  items">
                                <img src="assets/resource/images/gallery/lan-2.jpg" class="img-fluid" alt="not found">
                                <div class="gallery-text">
                                    <h3>Event 2</h3>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12  items">
                                <img src="assets/resource/images/gallery/lan-2.jpg" class="img-fluid" alt="not found">
                                <div class="gallery-text">
                                    <h3>Event 2</h3>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12  items">
                                <img src="assets/resource/images/gallery/lan-2.jpg" class="img-fluid" alt="not found">
                                <div class="gallery-text">
                                    <h3>Event 2</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- gallery end -->



    <!-- contact -->
    <!--   <div class="contact" id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-5" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="800">
                    <div class="address " class="">
                        <h3 >Get In Touch</h3>
                        <ul class="list-inline">
                            <li>
                                <p><img src="assets/resource/images/contact/icon/user-interface.png" class="img-fluid pr-3" width="45px" alt="icon">+959252525255/ +959252525255</p>
                            </li>
                            <li>
                                <p><img src="assets/resource/images/contact/icon/email-1.png" class="img-fluid pr-3" width="40px" alt="icon">symphonic@email.com</p>
                            </li>
                            <li>
                                <p><img src="assets/resource/images/contact/icon/facebook.png" class="img-fluid pr-3" width="40px" alt="icon">symphonic@facebook.com</p>
                            </li>
                            <li>
                                <p><img src="assets/resource/images/contact/icon/instagram.png" class="img-fluid pr-3" width="40px" alt="icon">symphonic@instagram.com</p>
                            </li>
                            
                            <li>
                                <p><img src="assets/resource/images/contact/icon/adress.png" class="img-fluid pr-3" width="40px" alt="icon">No.3 Hledan, Hledan, Hledan, Yangon</p>
                            </li>
                            <li>
                                <p><img src="assets/resource/images/contact/icon/adress.png" class="img-fluid pr-3" width="40px" alt="icon">No.3 Hledan, Hledan, Hledan, Yangon</p>
                            </li>
                            

                        </ul>
                    </div>
                    
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="message">
                        <h3 class="" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200"><strong>Message Us</strong></h3>
                        <form action="">
                            <div class="form-group" data-aos="fade-up" data-aos-duration="0" data-aos-delay="800">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group" data-aos="fade-up" data-aos-duration="0" data-aos-delay="900">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group" data-aos="fade-up" data-aos-duration="0" data-aos-delay="1000">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group" data-aos="fade-up" data-aos-duration="0" data-aos-delay="1100">
                            
                                <textarea name="" class="form-control" placeholder="Message" id="" cols="30" rows="1"></textarea>
                            </div>
                            <div class="form-group" data-aos="fade-up" data-aos-duration="0" data-aos-delay="1100">
                                <a href="" class="btn btn-default mt-3">sent</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </div> -->
    <!-- contact end -->

    <!-- blog section -->

    <div class="blog" id="blog">
        <div class="container-fluid">
            <h3>
                Latest Blog
            </h3>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut hic animi magnam deserunt in perferendis accusamus obcaecati a rem quos.</p>

            <div class="blog-card">
                <div class="row ">

                @foreach($blogs as $blog)
                    <div class="col-md-3 col-sm-6 col-xs-12 " data-aos="fade-up" data-aos-duration="1500">
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
        </div>
    </div>

    <!-- end -->


    <!-- course -->

    <div class="course" id="course">
        <div class="" data-aos="fadeIn" data-aos-duration="1500" data-aos-delay="200">
            <div class="row">
                <div class="col-md-4 col-sm-12 ">
                    <div class="detail">
                        <img src="assets/resource/images/course/course.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 ">
                   <div class="course-section">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                    <img src="assets/resource/images/course/1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Online Music Production Class (Basic)</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto.</p>
                                        <a href="#" class="btn ">view deatils</a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                    <img src="assets/resource/images/course/1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Online Music Production Class (Advance)</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto.</p>
                                        <a href="#" class="btn ">view deatils</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- course end -->

@include('user.footer')

@endsection
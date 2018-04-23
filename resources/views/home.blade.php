@extends('main_layout')
@section('title',$title)
@section('content')

<style type="text/css">
@php($i=1)
@foreach(\App\Slider::get() as $slider)
	.carousel-item.items{{$i}} {
	background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{ url(Storage::url($slider->gambar)) }}) no-repeat;
	background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{ url(Storage::url($slider->gambar)) }}) no-repeat;
	background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{ url(Storage::url($slider->gambar)) }}) no-repeat;
	background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{ url(Storage::url($slider->gambar)) }}) no-repeat;
	background-size: cover;
}
@php($i++)
@endforeach
</style>

	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				@php($i=0)
				@foreach(\App\Slider::get() as $slider)
					<li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>
				@php($i++)
 				@endforeach
				
				{{-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li> --}}
			</ol>
			<div class="carousel-inner" role="listbox">
				@php($i=1)
				@foreach(\App\Slider::get() as $slider)
				<div class="carousel-item @if($i==1)active @endif items{{ $i }}">
					<div class="carousel-caption">
						<h3>{{ $slider->nama }}</h3>

						<div class="bnr-button">
							<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
								<i class="fas fa-play"></i>
							</button>
						</div>

					</div>
				</div>
				{{-- <div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>We Deliver Quality Projects.</h3>

						<div class="bnr-button">
							<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
								<i class="fas fa-play"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
						<h3>Best Creative Agency for your needs</h3>

						<div class="bnr-button">
							<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
								<i class="fas fa-play"></i>
							</button>
						</div>

					</div>
				</div>
				<div class="carousel-item item4">
					<div class="carousel-caption">
						<h3>We Deliver Quality Projects.</h3>

						<div class="bnr-button">
							<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
								<i class="fas fa-play"></i>
							</button>
						</div>
					</div>
				</div>--}}			
				@php($i++)
 				@endforeach
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--/model-->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Introduction Video</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body video">
					<iframe src="https://player.vimeo.com/video/33531612"></iframe>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!--//model-->
	<!--//banner-->
	<section class="banner-bottom">
		<div class="container">

			<!-- Three columns of text below the carousel -->
			<div class="row inner-sec-w3layouts-agileinfo">

				<div class="col-lg-5 bt-bottom-info" data-aos="fade-right">
					<h5>We help our customer to build Digital World</h5>

				</div>
				<div class="col-lg-7 bt-bottom-info" data-aos="fade-left">
					<p>Maecenas quis neque libero. Class aptent taciti.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque
						convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget pulvinar neque
						pharetra ac.</p>
				</div>
			</div>
			<div class="row inner-sec-w3layouts-agileinfo">
				<div class="col-lg-4 bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
					<div class="bt-icon">

						<span class="fas fa-trophy"></span>
					</div>

					<h4 class="sub-tittle_w3ls">Stylish Design</h4>
					<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
					<p>
						<a class="btn btn-secondary view" href="single.html" role="button">View details</a>
					</p>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-lg-4 bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
					<div class="bt-icon">
						<span class="far fa-thumbs-up"></span>
					</div>

					<h4 class="sub-tittle_w3ls">Excellent Support</h4>
					<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
					<p>
						<a class="btn btn-secondary view" href="single.html" role="button">View details</a>
					</p>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-lg-4 bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
					<div class="bt-icon">
						<span class="fas fa-tv"></span>
					</div>

					<h4 class="sub-tittle_w3ls">Responsive</h4>
					<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
					<p>
						<a class="btn btn-secondary view" href="single.html" role="button">View details</a>
					</p>
				</div>
				<!-- /.col-lg-4 -->
			</div>
		</div>
		<!-- /.row -->
		</div>
	</section>
	<!---->
	<!-- /stats -->
	<section class="stats_test container-fluid">
		<div class="row inner_stat_wthree_agileits">
			<div class="col-md-3 stats_left counter_grid">
				<i class="far fa-building"></i>
				<p class="counter">145</p>
				<h4>Branches</h4>
			</div>
			<div class="col-md-3 stats_left counter_grid1">
				<i class="fas fa-users"></i>
				<p class="counter">165</p>
				<h4>Trainers</h4>
			</div>
			<div class="col-md-3 stats_left counter_grid2">
				<i class="far fa-edit"></i>
				<p class="counter">563</p>
				<h4>Pojects</h4>
			</div>
			<div class="col-md-3 stats_left counter_grid3">
				<i class="far fa-smile"></i>
				<p class="counter">1045</p>
				<h4>Happy Clients</h4>
			</div>

		</div>
		</div>
	</section>
	<!-- //stats -->
	<!--/services-->
	<section class="services">
		<div class="container">
			<h3 class="tittle_w3ls">Unlimited Features</h3>
			<div class="row inner-sec-w3layouts-agileinfo">
				<div class="col-lg-4 grid_info_main" data-aos="flip-left">
					<div class="grid_info">
						<div class="icon_info">
							<span class="icon">
								<i class="fas fa-laptop"></i>
							</span>
							<h5>Fully Responsive</h5>
							<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
						</div>
					</div>
					<div class="grid_info second">
						<div class="icon_info">
							<span class="icon">
								<i class="far fa-clone"></i>
							</span>
							<h5>Layered PSD Files</h5>
							<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 grid_info_main mid" data-aos="flip-down">
					<img src="images/mid.png" class="img-responsive" alt=" ">
				</div>
				<div class="col-lg-4 grid_info_main" data-aos="flip-right">
					<div class="grid_info">
						<div class="icon_info">
							<span class="icon">
								<i class="fas fa-sitemap"></i>
							</span>
							<h5>Site Builder</h5>
							<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
						</div>
					</div>
					<div class="grid_info second">
						<div class="icon_info">
							<span class="icon">
								<i class="fab fa-android"></i>
							</span>
							<h5>Animation</h5>
							<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>
	<!--//services-->
	<!---->
	<section class="grids_sec_2">
		<div class="row style-grids_main">
			<div class="col-md-6 grid_sec_info">
				<div class="style-grid-2-text_info" data-aos="fade-right">
					<h3>We are composer one of the best in web designing.</h3>
					<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
						tempora incidunt ut labore .</p>
					<div class="bnr-button">
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
							<i class="fas fa-play"></i>
						</button>
					</div>

				</div>
			</div>
			<div class="col-md-6 style-image-2">
			</div>
			<div class="col-md-6 style-image-2 second">
			</div>
			<div class="col-md-6 grid_sec_info">
				<div class="style-grid-2-text_info" data-aos="fade-right">
					<h3>We are composer one of the best in web designing.</h3>
					<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
						tempora incidunt ut labore .</p>
					<div class="bnr-button">
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
							<i class="fas fa-play"></i>
						</button>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!--/Projects-->
	<section class="services">
		<div class="container">
			<h3 class="tittle_w3ls">Our Works</h3>
			<div class="row inner-sec-w3layouts-agileinfo">

				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g1.jpg">
							<div class="section_1_gallery_grid1">
								<img src="images/g1.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g2.jpg">
							<div class="section_1_gallery_grid1">
								<img src="images/g2.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g3.jpg">
							<div class="section_1_gallery_grid1">
								<img src="images/g3.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g4.jpg">
							<div class="section_1_gallery_grid1">
								<img src="images/g4.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g5.jpg">
							<div class="section_1_gallery_grid1">
								<img src="images/g5.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g6.jpg">
							<div class="section_1_gallery_grid1">
								<img src="images/g6.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g7.jpg">
							<div class="section_1_gallery_grid1">
								<img src="images/g7.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g8.jpg">
							<div class="section_1_gallery_grid1">
								<img src="images/g8.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g9.jpg">
							<div class="section_1_gallery_grid1">
								<img src="images/g9.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
				</div>



			</div>
		</div>
	</section>
	<!--//Projects-->
	<!--reviews_sec-->
	<section class="reviews_sec" id="testimonials">
		<h3 class="tittle_w3ls cen">Testimonial</h3>
		<div class="inner-sec-w3layouts-agileinfo">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="testimonials_grid">
								<div class="testimonials_grid-inn">
									<img src="images/t3.jpg" alt=" " class="img-responsive" />
									<div class="test_social_pos">
										<ul class="social_list1">
											<li>
												<a href="#" class="facebook1">
													<i class="fab fa-facebook-f"></i>

												</a>
											</li>
											<li>
												<a href="#" class="twitter2">
													<i class="fab fa-twitter"></i>

												</a>
											</li>
											<li>
												<a href="#" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<h3>Gretchen
									<span>Customer</span>
								</h3>
								<i>United States</i>
								<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin
									eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
							</div>
						</li>
						<li>
							<div class="testimonials_grid">
								<div class="testimonials_grid-inn">
									<img src="images/t2.jpg" alt=" " class="img-responsive" />
									<div class="test_social_pos">
										<ul class="social_list1">
											<li>
												<a href="#" class="facebook1">
													<i class="fab fa-facebook-f"></i>

												</a>
											</li>
											<li>
												<a href="#" class="twitter2">
													<i class="fab fa-twitter"></i>

												</a>
											</li>
											<li>
												<a href="#" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<h3>Esmeralda
									<span>Customer</span>
								</h3>
								<i>United States</i>
								<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin
									eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
							</div>
						</li>
						<li>
							<div class="testimonials_grid">
								<div class="testimonials_grid-inn">
									<img src="images/t1.jpg" alt=" " class="img-responsive" />
									<div class="test_social_pos">
										<ul class="social_list1">
											<li>
												<a href="#" class="facebook1">
													<i class="fab fa-facebook-f"></i>

												</a>
											</li>
											<li>
												<a href="#" class="twitter2">
													<i class="fab fa-twitter"></i>

												</a>
											</li>
											<li>
												<a href="#" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<h3>Anamaria
									<span>Customer</span>
								</h3>
								<i>United States</i>
								<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin
									eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</section>

@endsection
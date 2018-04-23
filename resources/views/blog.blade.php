@extends('main_layout')
@section('title',$title)
@section('content')

	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active">Blog</li>
	</ol>
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

	<!--/blog-->
	<section class="services">
		@foreach(\App\Blog::get() as $blog)
		<div class="container">
			<h3 class="tittle_w3ls">Latest Blog Posts</h3>
			<div class="row inner-sec-w3layouts-agileinfo">
				<div class="col-lg-8 blog-sp"  data-aos="zoom-in">
					<article class="blog-x row">
						<div class="col-md-6 blog-img">
							<a href="single.html">
								<img src="{{ url(Storage::url($blog->gambar)) }}" alt="" class="img-responsive" width="300" />
							</a>
						</div>
						<div class="col-md-6 blog_info">
							<h5>
								<a href="single.html">{{$blog->judul}}</a>
							</h5>
							<p>By
								<a href="#" class="user-blog">james</a>
							</p>

							<p>{{$blog->isi}}</p>
							<ul class="blog_list_agile_w3ls">
								<li>
									<a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
										173</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
										10</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
										5</a>
								</li>
							</ul>
							<h4>{{$blog->tanggal}}</h4>
						</div>

					</article>
					@endforeach
					{{-- <article class="blog-x br-mar row">
						<div class="col-md-6 blog_info">
							<h5>
								<a href="single.html">Sadipisci velit sed quia non nuuam.</a>
							</h5>
							<p>By
								<a href="#" class="user-blog">james</a>
							</p>

							<p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.</p>
							<ul class="blog_list_agile_w3ls">
								<li>
									<a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
										173</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
										10</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
										5</a>
								</li>
							</ul>
							<h4>December 3,2017</h4>
						</div>
						<div class="col-md-6 blog-img img1">
							<a href="single.html">
								<img src="images/b2.jpg" alt="" class="img-responsive" />
							</a>
						</div>

					</article>

				</div>
				<div class="col-lg-4 blog-side blog-top-right"  data-aos="zoom-in">
					<article class="blog-top-right">
						<div class="blog-img">
							<a href="single.html">
								<img src="images/b3.jpg" alt="" class="img-responsive" />
							</a>
						</div>
						<div class="blog_info  blog-right">
							<h5>
								<a href="single.html">Sadipisci velit sed quia non nuuam.</a>
							</h5>
							<p>By
								<a href="#" class="user-blog">james</a>
							</p>

							<p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.</p>
							<ul class="blog_list_agile_w3ls">
								<li>
									<a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
										173</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
										10</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
										5</a>
								</li>
							</ul>
							<h4>December 30,2017</h4>
						</div>

					</article>
				</div>
				<div class="col-lg-4 blog-side blog-top-right two" data-aos="zoom-in">
					<article class="blog-top-right">
						<div class="blog-img">
							<a href="single.html">
								<img src="images/b2.jpg" alt="" class="img-responsive" />
							</a>
						</div>
						<div class="blog_info blog-right two">
							<h5>
								<a href="single.html">Sadipisci velit sed quia non nuuam.</a>
							</h5>
							<p>By
								<a href="#" class="user-blog">james</a>
							</p>

							<p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.</p>
							<ul class="blog_list_agile_w3ls">
								<li>
									<a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
										173</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
										10</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
										5</a>
								</li>
							</ul>
							<h4>December 30,2017</h4>
						</div>

					</article>
				</div>
				<div class="col-lg-8 blog-sp" data-aos="zoom-in">
					<article class="blog-x row">
						<div class="col-md-6 blog-img">
							<a href="single.html">
								<img src="images/b1.jpg" alt="" class="img-responsive" />
							</a>
						</div>
						<div class="col-md-6 blog_info">
							<h5>
								<a href="single.html">Sadipisci velit sed quia non nuuam.</a>
							</h5>
							<p>By
								<a href="#" class="user-blog">james</a>
							</p>

							<p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.</p>
							<ul class="blog_list_agile_w3ls">
								<li>
									<a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
										173</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
										10</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
										5</a>
								</li>
							</ul>
							<h4>January 3,2018</h4>
						</div>

					</article>
					<article class="blog-x br-mar row">
						<div class="col-md-6 blog_info">
							<h5>
								<a href="single.html">Sadipisci velit sed quia non nuuam.</a>
							</h5>
							<p>By
								<a href="#" class="user-blog">james</a>
							</p>

							<p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.</p>
							<ul class="blog_list_agile_w3ls">
								<li>
									<a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
										173</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
										10</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
										5</a>
								</li>
							</ul>
							<h4>December 3,2017</h4>
						</div>
						<div class="col-md-6 blog-img img1">
							<a href="single.html">
								<img src="images/b3.jpg" alt="" class="img-responsive" />
							</a>
						</div>

					</article>
				</div> --}}

				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#">Previous</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">2</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>

		</div>
	</section>
	<!--//blog-->

@endsection
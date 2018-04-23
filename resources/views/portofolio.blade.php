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
		<li class="breadcrumb-item active">Projects</li>
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
	<!--/Projets-->
	<section class="services">
		<div class="container">
			<h3 class="tittle_w3ls">Projects</h3>
			<div class="row inner-sec-w3layouts-agileinfo">
				@foreach(\App\Portofolio::get() as $portofolio)
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g1.jpg">
							<div class="section_1_gallery_grid1">
								<img src="{{ url(Storage::url($portofolio->gambar)) }}" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>{{$portofolio->nama}}</h3>
									<p>{{$portofolio->isi}}</p>
								</div>
							</div>
						</a>
					</div>
			</div>
			@endforeach
		</div>
	</section>
	<!--//Projects-->

@endsection
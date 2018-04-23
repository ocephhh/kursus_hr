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
		<li class="breadcrumb-item active">Contact</li>
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
	<!--/contact-->
	<section class="services">
		<div class="container">
			<h3 class="tittle_w3ls">Contact Us</h3>
			<div class="row inner-sec-w3layouts-agileinfo">
				<div class="contact-map">

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
					    class="map" style="border:0" allowfullscreen=""></iframe>
				</div>
				<div class="address row">
					<div class="col-md-4 address-grid-wthree-agileits" data-aos="zoom-out">
						<div class="address-info">
							<div class="address-left">
								<span class="fas fa-phone-volume" aria-hidden="true"></span>
							</div>
							<div class="address-right">
								<h6>Phone Number</h6>
								<p>+1 234 567 8901,+1 234 567 8901</p>

							</div>

						</div>
					</div>
					<div class="col-md-4 address-grid-wthree-agileits" data-aos="zoom-out">
						<div class="address-info">
							<div class="address-left">
								<span class="far fa-envelope" aria-hidden="true"></span>
							</div>
							<div class="address-right">
								<h6>Email Address</h6>
								<p>Email :
									<a href="mailto:example@email.com"> mail@example.com</a>
								</p>
							</div>

						</div>
					</div>
					<div class="col-md-4 address-grid-wthree-agileits" data-aos="zoom-out">
						<div class="address-info">
							<div class="address-left">
								<span class="fas fa-map-marker-alt" aria-hidden="true"></span>
							</div>
							<div class="address-right">
								<h6>Location</h6>
								<p>San Francisco California, USA

								</p>
							</div>
						</div>
					</div>

				</div>
				<div class="contact_grid_right">
					<h6>Please fill this form to contact with us.</h6>
					<form action="#" method="post">
						<div class="contact_left_grid">
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required="">
							<input type="text" name="Subject" placeholder="Subject" required="">
							<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
							<input type="submit" value="Submit">
							<input type="reset" value="Clear">
							<div class="clearfix"> </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--//contact-->

@endsection
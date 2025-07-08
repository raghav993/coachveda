<?php include 'include/header.php'; ?>


<!-- Start Page Title Area -->
<div class="page-title-area">
	<div class="container">
		<div class="page-shape-wrap">
			<div class="page-title-content">
				<h2>Contact Us</h2>

				<ul>
					<li>
						<a href="index.html">
							Home
						</a>
					</li>

					<li class="active">
						Contact Us
					</li>
				</ul>
			</div>

			<img src="assets/images/page-bg-shape-1.png" alt="Image" class="shape shape-1" data-speed="0.04"
				data-revert="true">
			<img src="assets/images/page-bg-shape-7.png" alt="Image" class="shape shape-2" data-speed="0.04"
				data-revert="true">
		</div>
	</div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="section-title left-title">
					<span class="top-title">Contact Us</span>
					<h2>Get In Touch With Us Via <span>Contacts</span></h2>
				</div>

				<div class="contact-form">
					<form id="contactForm">
						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control" required
										data-error="Please enter your name" placeholder="Name">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" required
										data-error="Please enter your email" placeholder="Email">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<input type="text" name="phone_number" id="phone_number" required
										data-error="Please enter your number" class="form-control"
										placeholder="Phone No">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<input type="text" name="msg_subject" id="msg_subject" class="form-control" required
										data-error="Please enter your subject" placeholder="Subject">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<textarea name="message" class="form-control" id="message" cols="30" rows="6"
										required data-error="Write your message" placeholder="Your Message"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
								<label class="form-check-label" for="flexCheckDefault">
									I agree to the <a href="terms-conditions.html">Terms & conditions</a>
								</label>
							</div>

							<div class="col-lg-12 text-center">
								<button type="submit" class="default-btn">
									Send Your Message
								</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="contact-img">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Contact Area -->

<!-- Start Map Area -->
<div class="map-area">
	<iframe
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18876468.2003077!2d-113.72221585646197!3d54.7227051740391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sbd!4v1639561984704!5m2!1sen!2sbd"></iframe>
</div>
<!-- End Map Area -->

<?php include 'include/footer.php'; ?>
<?php include 'include/header.php'; ?>


<!-- Start Page Title Area -->
<div class="page-title-area">
	<div class="container">
		<div class="page-shape-wrap">
			<div class="page-title-content">
				<h2>Log In</h2>

				<ul>
					<li>
						<a href="index.html">
							Home
						</a>
					</li>

					<li class="active">
						Log In
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

<!-- Start Log In Area -->
<div class="user-area ptb-100">
	<div class="container">
		<div class="user-form-content">
			<h3>Log In</h3>

			<form class="user-form">
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label>Username or Email *</label>
							<input class="form-control" type="text" name="name">
						</div>
					</div>

					<div class="col-12">
						<div class="form-group">
							<label>Password *</label>
							<input class="form-control" type="password" name="password">
						</div>
					</div>

					<div class="col-12">
						<div class="login-action">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
								<label class="form-check-label" for="flexCheckDefault">
									Remember me
								</label>
							</div>

							<span class="forgot-login">
								<a href="my-account.html">Forgot Password?</a>
							</span>
						</div>
					</div>

					<div class="col-12">
						<button class="default-btn" type="submit">
							<span>
								Log In
								<i class="flaticon-next"></i>
							</span>
						</button>
					</div>

					<div class="col-12">
						<span class="or">Or</span>
					</div>

					<div class="col-lg-12">
						<a href="https://www.facebook.com/" target="_blank" class="or-login facebook">
							Login with Facebook
						</a>
					</div>

					<div class="col-lg-12">
						<a href="https://www.google.com/" target="_blank" class="or-login google">
							Login with Google
						</a>
					</div>

					<div class="col-12">
						<p class="create">Don't have an account? <a href="register.html">Join us </a></p>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Log In Area -->
<?php include 'include/footer.php'; ?>
<!
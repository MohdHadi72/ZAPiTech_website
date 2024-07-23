@include('Project.header')
<div class="page-wrapper">
 	
	<!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
  @include('Project.topbar')
 	<!-- Header Style One / Alternate -->

    <!-- End Main Header -->
	
	<!-- Contact Banner Section -->
    <section class="contact-banner-section">
		<div class="big-letter">Contact</div>
    	<div class="auto-container">
			<div class="row clearfix">
				<!-- Info Column -->
				<div class="info-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
					
						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner">
								<span class="icon"><img src="assetss/images/icons/info-1.png" alt="" /></span>
								<strong>Address</strong>
								55 Main Street, 2nd Block, New York
							</div>
						</div>
						
						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner">
								<span class="icon"><img src="assetss/images/icons/info-2.png" alt="" /></span>
								<strong>Email Us</strong>
								supportinfo@gmail.com
							</div>
						</div>
						
						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner">
								<span class="icon"><img src="assetss/images/icons/info-3.png" alt="" /></span>
								<strong>Mobile No</strong>
								+012 (345) 678, +880185022
							</div>
						</div>
						
						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner">
								<!-- Social Box -->
								<ul class="social-box">
									<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
									<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
									<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
									<li><a href="https://www.youtube.com/" class="fa fa-youtube-play"></a></li>
									<li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
									<li><a href="https://www.pinterest.com/" class="fa fa-pinterest-p"></a></li>
									<li><a href="https://www.google.com/" class="fa fa-send"></a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
				<!-- Images Column -->
				<div class="images-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column parallax-scene-1">
						<div class="image" data-depth="0.40">
							<img src="assetss/images/resource/contact.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    <!-- End Page Title / Style Three -->
	
	<!-- Map Section -->
	<section class="contact-map-section" style="display: none">
		<div class="outer-container">
			<!-- Map Boxed -->
			<div class="map-boxed">
				<!--Map Outer-->
				<div class="map-outer">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- End Map Section -->
	
	<!-- Contact Form Section -->
	<section class="contact-form-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Send Us Message</div>
				<h2><span>We’re Ready To Help You</span> <br> Send Us Message</h2>
			</div>
			
			<div class="inner-container">
				
				<!-- Contact Form -->
				<div class="contact-form">
					
					<!-- Contact Form -->
					<form method="post" action="https://html.themexriver.com/ximsa/sendemail.php" id="contact-form">
						<div class="row clearfix">
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="username" placeholder="Full Name" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="email" name="email" placeholder="Email Address" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="phone" placeholder="Phone Number" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="subject" placeholder="Subject" required>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<textarea class="" name="message" placeholder="Write Message"></textarea>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
								<button class="theme-btn btn-style-two"><span class="txt">Send Message <i class="fa fa-angle-right"></i></span></button>
							</div>
							
						</div>
					</form>
						
				</div>
				<!--End Comment Form -->
				
			</div>
		</div>
	</section>
	<!-- End Contact Form Section -->
	
 
@include('Project.footer')
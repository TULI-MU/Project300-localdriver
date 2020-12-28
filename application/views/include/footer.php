
<!--footer-->
<footer class="py-sm-5 py-4 px-md-5 px-3">
	<div class="container-fluid pt-lg-5">
		<div class="row">
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-5 footer-grid-agileits-w3ls1 text-left">
				<h3 class="mb-sm-5 mb-4">Locate Us</h3>	
				<ul class="w3ls-footer-bottom-list">
					<li> <span class="fas fa-phone"></span> 01746861166</li>
					<li> <span class="fas fa-fax"></span> 01882012013 </li>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-6 mb-sm-0 mb-5 footer-grid-agileits-w3ls text-left">
				<div class="tech-btm">
					<h3 class="mb-sm-5 mb-4">Latest Posts</h3>
					<div class="blog-grids row mb-3">
						<div class="col-4 pr-0 blog-grid-left">
							<a href="#">
								<img src="<?=base_url()?>asset/images/bc4.jpg" class="" alt="">
							</a>
						</div>
						<div class="col-8 blog-grid-right">

							
							<div class="sub-meta">
								<span>
									<i class="far fa-clock"></i> 26 november,2020</span>
							</div>
						</div>
						
					</div>
					<div class="blog-grids row mb-3">
						<div class="col-4 pr-0 blog-grid-left">
							<a href="#">
								<img src="<?=base_url()?>asset/images/11.jpg" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-8 blog-grid-right">

							
							<div class="sub-meta">
								<span>
									<i class="far fa-clock"></i> 27 november,2020</span>
							</div>
						</div>
						
					</div>
					<div class="blog-grids row">
						<div class="col-4 pr-0 blog-grid-left">
							<a href="#">
								<img src="<?=base_url()?>asset/images/15.jpg" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-8 blog-grid-right">

							
							<div class="sub-meta">
								<span>
									<i class="far fa-clock"></i> 28 november,2020</span>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- subscribe -->
			<div class="col-lg-3 col-sm-6 subscribe-main footer-grid-agileits-w3ls text-left">
				<div class="subscribe-main text-left">
					<div class="subscribe-form">
						<form action="#" method="post" class="subscribe_form">
							<input class="form-control" type="email" placeholder="Enter Your Email..." required="">
							<button type="submit" class="btn1 btn-primary submit"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
						</form>
				   </div>
				</div>
				<!-- //subscribe -->
				<div class="footer-social">
				<div class="copyrighttop">
				<h3 class="mb-sm-5 mb-4">Stay In Touch</h3>
					<ul>
						<li class="mr-1">
							<a class="facebook" href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
							</li>
					</ul>

				</div>
			</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="footer-cpy text-center pt-sm-5 mt-sm-5 mt-4 pt-3">
			<div class="w3layouts-agile-copyrightbottom">
				<p>2020 Local Driver All Rights Reserved | Design by
					<a>Tuli</a>
				</p>

			</div>
		</div>
		<!-- //copyright -->
	</div>
</footer>
<!-- //footer -->
			
<!-- login and register modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sign In to your account</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">User Name</label>
						<input type="text" class="form-control" placeholder="User Name" name="Name" id="recipient-name" required="">
					</div>
					<div class="form-group">
						<label for="password" class="col-form-label">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="Password" id="password" required="">
					</div>
					<div class="row sub-w3l my-3">
						<div class="col sub-agile">
							<input type="checkbox" id="brand1" value="">
							<label for="brand1" class="text-white">
								<span></span>Remember me?</label>
						</div>
						<div class="col forgot-w3l text-right">
							<a href="#" class="text-white">Forgot Password?</a>
						</div>
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control" value="Sign In">
					</div>
					<p class="text-center dont-do text-white mt-3">Don't have an account?
						<a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-white">
							Register Now</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel1">Register your account</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">User Name</label>
						<input type="text" class="form-control" placeholder="User Name" name="Name" id="recipient-rname" required="">
					</div>
					<div class="form-group">
						<label for="recipient-email" class="col-form-label">Email</label>
						<input type="email" class="form-control" placeholder="Email" name="Email" id="recipient-email" required="">
					</div>
					<div class="form-group">
						<label for="password1" class="col-form-label">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="Password" id="password1" required="">
					</div>
					<div class="form-group">
						<label for="password2" class="col-form-label">Confirm Password</label>
						<input type="password" class="form-control" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
					</div>
					<div class="sub-w3l">
						<div class="sub-agile">
							<input type="checkbox" id="brand2" value="">
							<label for="brand2" class="mb-3">
								<span></span>I Accept to the Terms & Conditions</label>
						</div>
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control" value="Register">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //login and register modal -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="<?=base_url()?>asset/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- carousel -->
	<script src="<?=base_url()?>asset/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 2,
						nav: false
					},
					1000: {
						items: 3,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->

	<!--slider-->
	<script src="<?=base_url()?>asset/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			// Slideshow 1
			$("#slider1").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 500,
				namespace: "centered-btns"
			});
		});
	</script>
	<!--//slider-->

	<!-- start-smoth-scrolling -->
	<script src="<?=base_url()?>asset/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/js/move-top.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>
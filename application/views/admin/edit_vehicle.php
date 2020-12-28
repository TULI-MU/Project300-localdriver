

<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5 col-md-6 offset-3">

<h3>Edit Vehicle_info 
</h3>
		<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	

	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your vehicle_name" value="<?php if(set_value('vehicle_name')){ echo set_value('vehicle_name');}else{ echo $vehicle[0]['vehicle_name'];}?>" name="vehicle_name"  >

	</div>

	<div class="error"><?=form_error('vehicle_name')?></div>

<div class="form-group">

		<input type="file"  name="picture"   >

	</div>

	
	
	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Submit" > 
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>




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
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
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
	<script src="js/responsiveslides.min.js"></script>
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
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
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
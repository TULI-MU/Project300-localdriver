

<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Contact Us</h1>
		<h5 class="heading mb-5 text-center">Local Driver</h5>
		<div class="row agile-contact-form">
			

			<div class="col-md-6 mt-md-0 mt-4 contact-form-right">
				<div class="contact-form-top">
					<h3>Send us a message</h3>
					<?=$this->session->flashdata('message');?>
				</div>
				<div class="agileinfo-contact-form-grid">
					<form action="" method="post">
						<input type="text" name="name" placeholder="Name" required="">
						<input type="text" name="subject" placeholder="Subject" required="">
						<input type="email" name="email" placeholder="Email" required="">
						<textarea name="message" placeholder="Message" required=""></textarea>
						<button type="submit" name="submit" value="1" class="btn1">Submit</button>
					</form>
				</div>
			</div>
		</div>
				

			</div>
		
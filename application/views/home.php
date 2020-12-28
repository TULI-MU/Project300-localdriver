

	
<!-- about -->
<section class="about py-5">
	<div class="container py-lg-5 py-3">
		<h3 class="heading text-capitalize text-center">Welcome</h3>
		<h5 class="heading mb-5 text-center">Local Driver</h5>
		<div class="about-head text-center ">
			<div class="row about-grids-top mb-5">
				<div class="col-lg-2 col-sm-4 col-6 about-grid p-0">
					<i class="fas fa-money-bill-alt" aria-hidden="true"></i>
					<h4>Low </h4>
				</div>
				<div class="col-lg-2 col-sm-4 col-6 about-grid p-0">
					<i class="fa fa-users" aria-hidden="true"></i>
					<h4>Safe & Secure</h4>
				</div>
				<div class="col-lg-2 col-sm-4 col-6 mt-sm-0 mt-5 about-grid p-0">
					<i class="fa fa-road" aria-hidden="true"></i>
					<h4>Traffic Roads</h4>
				</div>
				<div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
					<i class="fa fa-taxi" aria-hidden="true"></i>
					<h4>Local Cng</h4>
				</div>
				<div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
					<i class="fa fa-cogs" aria-hidden="true"></i>
					<h4>24/7 Service</h4>
				</div>
				<div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
					<i class="fa fa-smile" aria-hidden="true"></i>
					<h4>Customers</h4>
				</div>
			</div>
			
			</div>
		</div>
				
	</div>
</section>
<!-- //about -->

<!-- Why rickshaw -->
<section class="why">
	<div class="container-fluid p-md-5 p-3">
		<h3 class="heading text-capitalize text-center">Why rickshaw</h3>

		<h1>
			Most people in local places,especially women,feel comfortable traveling from one place to another by rickshaw at night or during the day.We are living in the age of modern technology. Now a day’s most of the people have internet facility.So,we will create a system where the general public can easily get the phone numbers of CNG,Auto,laguna,handbarrows(for carrying goods)and know the fare through registration
		</h1>



				<div class="team-effect">
					<img src="<?=base_url()?>asset/images/11.jpg" alt="img" class="img-fluid">
				</div>
		<h1 class="heading mb-5 text-center">Local Driver</h1>
					
		<div class="row why-grids">
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-4 grid1 text-center">
					<h4 class="mx-auto"><span>1</span></h4>
					<p class="mt-5">Top Rated Drivers</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-4 grid2 text-center">
					<h4 class="mx-auto"><span>2</span></h4>
					<p class="mt-5">Safety Journey</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-4 grid3 text-center">
					<h4 class="mx-auto"><span>3</span></h4>
					<p class="mt-5">Without Peak Pricing</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-4 grid4 text-center">
					<h4 class="mx-auto"><span>4</span></h4>
					<p class="mt-5">Fast And Secure</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-md-0 mb-4 grid5 text-center">
					<h4 class="mx-auto"><span>5</span></h4>
					<p class="mt-5">Lowest Rates</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-md-0 mb-4 grid6 text-center">
					<h4 class="mx-auto"><span>6</span></h4>
					<p class="mt-5">Best Quality Cabs</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-sm-0 mb-4 grid7 text-center">
					<h4 class="mx-auto"><span>7</span></h4>
					<p class="mt-5">Online Booking</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 grid8 text-center">
					<h4 class="mx-auto"><span>8</span></h4>
					<p class="mt-5">24/7 Cab Service</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Why rickshaw -->

<!-- team -->
<section class="wthree-row py-5">
	<div class="container py-lg-5 py-3">
		<h3 class="heading text-capitalize text-center">Our Drivers</h3>
		<h5 class="heading mb-5 text-center">Local Driver</h5>
		<div class="row text-center">


			<?php foreach ($driver as $row) {  ?>


				<div class="col-lg-3 col-sm-6 col-6 team-grids">
				<div class="team-effect">
					<img src="<?=base_url()?>image/<?=$row['picture']?>" alt="img" class="img-fluid">
				</div>
				<!-- team text -->
				<div class="footerv2-w3ls mt-3">
					<h4><?=$row['Name']?></h4>
					<p class="my-2"><?=$row['Email']?></p>
					<p><i class="fas fa-phone" aria-hidden="true"></i><?=$row['mobile']?></p>
				</div>
				<!-- //team text -->
				</div>
			
			<?php } ?>
			
			 
		</div>
	</div>
</section>
<!-- //team -->

<!-- Our prices -->
<section class="prices py-5">
	<div class="container py-lg-5 py-3">
		<h3 class="heading text-capitalize text-center">Our Pricing</h3>
		<h5 class="heading mb-5 text-center">Rickshaw Cng</h5>
		<div class="row pricing-grids">
			<div class="col-lg-3 col-md-6 price-grid">
				<h3 class="mb-4">Rickshaw -- <span class="">10-100taka</span></h3>
				<h4 class="my-3">Small fares for short rides</h4>
				<ul class="d-flex mt-3">
					<li class="mr-3">2 <i class="fas fa-male" aria-hidden="true"></i></li>
					<li class="mr-3">1 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 mt-md-0 mt-5 price-grid">
				<h3 class="mb-4"> Cng-- <span class="">10-500taka</span></h3>
				<h4 class="my-3">Small fares for short rides</h4>
				<ul class="d-flex mt-3">
					<li class="mr-3">2 <i class="fas fa-male" aria-hidden="true"></i></li>
					<li class="mr-3">2 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
					<li class="mr-3">1 <i class="fas fa-wifi" aria-hidden="true"></i></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5 price-grid">
				<h3 class="mb-4">Rickshaw -- <span class="">10-200taka</span></h3>
				<h4 class="my-3">Small fares for short rides</h4>
				<ul class="d-flex mt-3">
					<li class="mr-3">3 <i class="fas fa-male" aria-hidden="true"></i></li>
					<li class="mr-3">2 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
					<li class="mr-3">1 <i class="fas fa-wifi" aria-hidden="true"></i></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5 price-grid">
				<h3 class="mb-4">Handbarrow -- <span class="">100-500taka</span></h3>
				<h4 class="my-3">Small fares for short rides</h4>
				<ul class="d-flex mt-3">
					<li class="mr-3">4 <i class="fas fa-male" aria-hidden="true"></i></li>
					<li class="mr-3">3 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
					<li class="mr-3">1 <i class="fas fa-wifi" aria-hidden="true"></i></li>
				</ul>
			</div>
		</div>
	</div>
</section>


<!-- Booking -->
<section class="bookingform py-5">
	<div class="container py-md-5 py-3">
		<h1 class="heading text-capitalize text-center">Booking form</h1>
		<h5 class="heading mb-5 text-center">Local Driver</h5>
		<div class="row">
			<div class="col-lg-6 book-appointment p-sm-5 py-5 px-4">
			
				<div class="book-agileinfo-form">
					<form action="#" method="post">

						<h2 class="sub-head-w3ls">Booking Details</h2>

						<?$this->session->userdata('message')?>
						
						<div class="row ">

							
							<div class="col-md-12">
								<div class="agileits-btm-spc">
									<select name="vehicle_id" onchange="change_country(this.value)" class="form-control">
										<option value="">Select vehicle</option>

										<?php foreach ($vehicle as $row) { ?>

											<option <?php if(set_value('vehicle_id')==$row['v_id']){ echo 'selected'; } ?> value="<?=$row['v_id']?>"><?=$row['vehicle_name']?></option>
									 
											 
										<?php } ?>
										
									</select>
								</div>
								<div class="error"><?=form_error('vehicle_id')?></div>
							</div>
						</div>

						<div class="row ">

							
							<div class="col-md-12">
								<div class="agileits-btm-spc">
									<select name="place_id_1"  class="form-control">
										<option value="">Select Place From</option>

										<?php foreach ($place as $row) { ?>

											<option <?php if(set_value('place_id_1')==$row['p_id']){ echo 'selected'; } ?> value="<?=$row['p_id']?>"><?=$row['place_name']?></option>
									 
											 
										<?php } ?>
										
									</select>
								</div>
								<div class="error"><?=form_error('place_id_1')?></div>
							</div>
						</div>


						<div class="row ">

							
							<div class="col-md-12">
								<div class="agileits-btm-spc">
									<select name="place_id_2" class="form-control" >
										<option value="">Select Place To</option>

										<?php foreach ($place as $row) { ?>

											<option <?php if(set_value('place_id_2')==$row['p_id']){ echo 'selected'; } ?> value="<?=$row['p_id']?>"><?=$row['place_name']?></option>
									 
											 
										<?php } ?>
										
									</select>
								</div>
								<div class="error"><?=form_error('place_id_2')?></div>
							</div>
						</div>
						<div class="clear"></div>
						<div class="row main-agile-sectns">
							<div class="col-md-6 agileits-btm-spc form-text1">
								<input  type="date" name="pickup_date" class="form-control" placeholder="Pick-up Date" >
							</div>
							<div class="error"><?=form_error('pickup_date')?></div>
							<div class="col-md-6 agileits-btm-spc form-text2">
								<input type="time"  name="pickup_time" class="form-control" placeholder="Pick-up Time" value="">
							</div>
							<div class="error"><?=form_error('pickup_time')?></div>
						</div>
						<div class="row main-agile-sectns">
							<div class="col-md-6 agileits-btm-spc form-text1">
								<select  name="no_of_passengers"  class="form-control">
									<option value="">No.of Passengers</option>
									<option <?php if(set_value('no_of_passengers')=='1'){ echo 'selected'; } ?> value="1">1</option>   
									<option <?php if(set_value('no_of_passengers')=='2'){ echo 'selected'; } ?> value="2">2</option>
									<option <?php if(set_value('no_of_passengers')=='3'){ echo 'selected'; } ?> value="3">3</option>      
									<option <?php if(set_value('no_of_passengers')=='4'){ echo 'selected'; } ?> value="4">4</option>
									<option <?php if(set_value('no_of_passengers')=='5'){ echo 'selected'; } ?> value="5">5</option>
								</select>
								<div class="error"><?=form_error('no_of_passengers')?></div>
							
							</div>
							<div class="col-md-6 agileits-btm-spc form-text2">
						
							<div class="agileits-btm-spc form-text2">
								
							</div>
						</div>

						<?php if($this->session->userdata('id')){  ?>
						<input type="submit" name="submit" value="Book Now">

						<?php }else{   ?>

						<a href="<?=base_url()?>Login"><input type="button" name="submit" class="btn btn-danger" value="Book Now"></a>

						<?php } ?>
						 
					</form>
				</div>
			</div>
			<div class="col-lg-6 mt-md-5">
				<img src="images/car1.png" alt="" class="img-fluid" />
				<img src="images/car2.png" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</section>	
<!-- //Booking -->
		
	
<style>
	
.error{
color:red;
}
</style>
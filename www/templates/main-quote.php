<!-- Welcome Section -->
    <section id="welcome" class="welcome text-center container">
        <div id="get-quote-form" class="row">
	        <h1>Online Quote</h1>
	        <p>This online proposal is to give you a general idea of the cost of our services. We will need to arrange a time to visit you to confirm this and other details.</p>
	        <hr>

	        <form action="index.php?page=main-quote" method="post" enctype="multipart/form-data" id="main-quote-form" class="clearfix">
        		<div id="facility-details" class="form-div">
	        		<h3>Number of Staff and Facility Details:</h3>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staffNumber" value="1-5" <?php if (isset($_POST['staffNumber']) and $_POST['staffNumber'] == '1-5') echo ' checked'; ?>>
	        				1-5
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staffNumber" value="5-15" <?php if (isset($_POST['staffNumber']) and $_POST['staffNumber'] == '5-15') echo ' checked'; ?>>
	        				5-15
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staffNumber" value="15-30" <?php if (isset($_POST['staffNumber']) and $_POST['staffNumber'] == '15-30') echo ' checked'; ?>>
	        				15-30
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staffNumber" value="30-50" <?php if (isset($_POST['staffNumber']) and $_POST['staffNumber'] == '30-50') echo ' checked'; ?>>
	        				30-50
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staffNumber" value="50-100" <?php if (isset($_POST['staffNumber']) and $_POST['staffNumber'] == '50-100') echo ' checked'; ?>>
	        				50-100
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staffNumber" value="More than 100" <?php if (isset($_POST['staffNumber']) and $_POST['staffNumber'] == 'More than 100') echo ' checked'; ?>>
	        				More than 100
	        			</label>
	        		</div>
	        		<div class="form-group">
						<label>Area approximately in metres squared:</label>
						<div class="input-group">							    
						    <input type="text" name="area-in-metres" id="area-in-metres" value="">
							<span class="input-group-addon">m<sup>2</sup></span>
						</div>
						<span id="helpBlock" class="help-block">An average house is around 200m<sup>2</sup></span>
					</div>
					<?php echo $this->bootstrapAlert($this->staffNumError, 'danger') ?>
	        	</div>

        		<div id="service-calls" class="form-div">
        		<h3>Days of Service Calls (per week):</h3>
        			<div class="checkbox">
					  <label>
					    <input type="checkbox" name="daysOfWeek[]" value="Monday" <?php if (isset($_POST['daysOfWeek']) and $_POST['daysOfWeek'] == 'Monday') echo ' checked=checked'; ?>>
					    Monday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="daysOfWeek[]" value="Tuesday" <?php if (isset($_POST['daysOfWeek']) and $_POST['daysOfWeek'] == 'Tuesday') echo ' checked=checked'; ?>>
					    Tuesday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="daysOfWeek[]" value="Wednesday" <?php if (isset($_POST['daysOfWeek']) and $_POST['daysOfWeek'] == 'Wednesday') echo ' checked=checked'; ?>>
					    Wednesday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="daysOfWeek[]" value="Thursday" <?php if (isset($_POST['daysOfWeek']) and $_POST['daysOfWeek'] == 'Thursday') echo ' checked=checked'; ?>>
					    Thursday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="daysOfWeek[]" value="Friday" <?php if (isset($_POST['daysOfWeek']) and $_POST['daysOfWeek'] == 'Friday') echo ' checked=checked'; ?>>
					    Friday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="daysOfWeek[]" value="All Days" <?php if (isset($_POST['daysOfWeek']) and $_POST['daysOfWeek'] == 'All Days') echo ' checked=checked'; ?>>
					    All Days
					  </label>
					</div>
					<?php echo $this->bootstrapAlert($this->daysOfWeekError, 'danger') ?>
        		</div>

	        	<div id="dusting" class="form-div">
	        		<h3>Dusting (Dust all flat surfaces):</h3>
	        		<div class="radio">
					  <label>
					    <input type="radio" name="dusting" id="once-a-week" value="Once a Week" <?php if (isset($_POST['dusting']) and $_POST['dusting'] == 'Once a Week') echo ' checked'; ?>>
					    Once a Week
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="dusting" id="once-a-month" value="Once a Month" <?php if (isset($_POST['dusting']) and $_POST['dusting'] == 'Once a Month') echo ' checked'; ?>>
						Once a Month
					  </label>
					</div>
					<div class="form-group">
						<label for="other-requirements">Other Requirements:</label>
						<textarea name="dusting-textarea" id="dusting-textarea" cols="30" rows="2"></textarea>
					</div>
					<?php echo $this->bootstrapAlert($this->dustingError, 'danger') ?>
	        	</div>

	        	<div id="vacuum-cleaning" class="form-div">
	        	<h3>Vacuum Cleaning and/or Power Sweeping:</h3>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox" name="all-carpeted-areas" id="all-carpeted-areas" value="All Carpeted Areas">
	        				All Carpeted Areas
	        			</label>
	        		</div>
	        		<div class="form-group">
						<label for="other-requirements">Other Requirements:</label>
						<textarea name="carpet-textarea" id="carpet-textarea" cols="30" rows="2"></textarea>
					</div>
	        	</div>

	        	<div id="sweep-and-mop" class="form-div">
	        		<h3>Sweep and Mop:</h3>

	        		<div id="sweeping-surfaces">
	        			<h4>All hard surface floors: </h4>
		        		<div class="radio">
						  <label>
						    <input type="radio" name="surfaces" value="Vinyl" <?php if (isset($_POST['surfaces']) and $_POST['surfaces'] == 'Vinyl') echo ' checked'; ?>>
							Vinyl
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="surfaces" value="Tiles" <?php if (isset($_POST['surfaces']) and $_POST['surfaces'] == 'Tiles') echo ' checked'; ?>>
							Tiles						  
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="surfaces" value="Concrete" <?php if (isset($_POST['surfaces']) and $_POST['surfaces'] == 'Concrete') echo ' checked'; ?>>
							Concrete
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="surfaces" value="Wood" <?php if (isset($_POST['surfaces']) and $_POST['surfaces'] == 'Wood') echo ' checked'; ?>>
							Wood
						  </label>
						</div>
	        		</div>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox">
	        				Outside Entrance Way
	        			</label>
	        		</div>
	        		<?php echo $this->bootstrapAlert($this->surfacesError, 'danger') ?>
	        	</div>

	        	<div id="cafeteria" class="form-div">
	        		<h3>Clean the Cafeteria:</h3>
	        		<div id="dishes">
	        			<h4>Dishes</h4>
	        			<h4>On Every Call:</h4>
	        			<div class="checkbox">
		        			<label>
		        				<input type="checkbox" name="cafeteria[]" value="Collect Cups/Glasses from desks">
		        				Collect Cups/Glasses from desks
		        			</label>
	        			</div>
	        			<div class="checkbox">
		        			<label>
		        				<input type="checkbox" name="cafeteria[]" value="Handwash Dishes">
		        				Handwash Dishes
		        			</label>
	        			</div>
	        			<div class="checkbox">
		        			<label>
		        				<input type="checkbox" name="cafeteria[]" value="Load Dishwasher">
		        				Load Dishwasher
		        			</label>
	        			</div>
	        		</div>
					<div class="form-group">
						<label for="other-requirements">Other Requirements:</label>
						<textarea name="cafeteria-textarea" id="cafeteria-textarea" cols="30" rows="2"></textarea>
					</div>
					<?php echo $this->bootstrapAlert($this->cafeteriaError, 'danger') ?>
	        	</div>
	        	
	        	<div id="bathroom-area" class="form-div">
	        		<h3>Bathrooms:</h3>
	        		<h4>Toilets</h4>
	        		<div class="form-group">
	        			<label>How many?</label>
	        			<input type="text" id="toilets" name="toilets">
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="toilet-radio" value="Every Call" <?php if (isset($_POST['toilet-radio']) and $_POST['toilet-radio'] == 'Every Call') echo ' checked'; ?>>
	        				Every Call
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="toilet-radio" value="Once a Week" <?php if (isset($_POST['toilet-radio']) and $_POST['toilet-radio'] == 'Once a Week') echo ' checked'; ?>>
	        				Once a Week
	        			</label>
	        			<?php echo $this->bootstrapAlert($this->toiletError, 'danger') ?>
	        		</div>
	        		<h4>Showers:</h4>
	        		<div class="form-group">
	        			<label>How many?</label>
	        			<input type="text" id="showers" name="showers">
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="shower-radio" value="Every Week" <?php if (isset($_POST['shower-radio']) and $_POST['shower-radio'] == 'Every Call') echo ' checked'; ?>>
	        				Every Call
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="shower-radio" value="Once a Week" <?php if (isset($_POST['shower-radio']) and $_POST['shower-radio'] == 'Once a Week') echo ' checked'; ?>>
	        				Once a Week
	        			</label>
	        		</div>
	        	</div>

	        	<div id="supply-consumbles" class="form-div">
	        		<h3>Supply Consumables: </h3>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox" name="consumables" value="Toilet Paper">
	        				Toilet Paper
	        			</label>	
	        		</div>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox" name="consumables" value="Paper Towels">
	        				Paper Towels
	        			</label>	
	        		</div>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox" name="consumables" value="Rubbish Bags">
	        				Rubbish Bags
	        			</label>
	        		</div>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox" name="consumables" value="Cleaning Chemicals">
	        				Cleaning Chemicals
	        			</label>	
	        		</div>

	        		<h4>Use Green Products</h4>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="green-products" value="User Green Products where Possible">
	        				Where Possible
	        			</label>
	        		</div>
					<div class="radio">
	        			<label>
	        				<input type="radio" name="green-products" value="Only use Green Products">
	        				Only
	        			</label>
	        		</div>
	        		<?php echo $this->bootstrapAlert($this->supplyConsumablesError, 'danger') ?>
	        	</div>

	        	<div id="glass" class="form-div">
	        		<h3>Glass:</h3>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox">
	        				Spot clean glass doors
	        			</label>
	        		</div>
	        		<div class="form-group">
						<label for="other-requirements">Other Requirements:</label>
						<textarea name="carpet-textarea" id="cafeteria-textarea" cols="30" rows="2"></textarea>
					</div>
	        	</div>

	        	<div id="cupboard" class="form-div">
	        		<h3>Cleaning Cupboard: </h3>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="cleaning-cupboard" value="Yes">
	        				Yes
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="cleaning-cupboard" value="No">
	        				No
	        			</label>
	        		</div>
	        		<?php echo $this->bootstrapAlert($this->cleanCupboardError, 'danger') ?>
	        	</div>
				
				<div id="spring-clean" class="form-div">
	        		<h3>Spring Clean:</h3>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox" name="springClean[]" value="Clean Refrigerator Interior">
	        				Clean Refrigerator Interior
	        			</label>
	        		</div>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox" name="springClean[]" value="Clean Microwave Interior">
	        				Clean Microwave Interior
	        			</label>
	        		</div>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox" name="springClean[]" value="Wipe out Drawers">
	        				Wipe out Drawers
	        			</label>
	        		</div>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox" name="springClean[]" value="Clean Internal Partitions and Windows">
	        				Clean Internal Partitions and Windows
	        			</label>
	        		</div>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox" name="springClean[]" value="Clean Blinds">
	        				Clean Blinds
	        			</label>
	        		</div>
	        		<?php echo $this->bootstrapAlert($this->springCleanError, 'danger') ?>
	        		<div id="spring-clean-months">
	        			<h4>How many months?</h4>
	        			<div class="radio">
		        			<label>
		        				<input type="radio" name="how-many-months" value="Every 3 months" <?php if (isset($_POST['how-many-months']) and $_POST['how-many-months'] == 'Every 3 Months') echo ' checked'; ?>>
		        				Every 3 Months
		        			</label>
	        			</div>
	        			<div class="radio">
		        			<label>
		        				<input type="radio" name="how-many-months" value="Every 6 months" <?php if (isset($_POST['how-many-months']) and $_POST['how-many-months'] == 'Every 6 Months') echo ' checked'; ?>>
		        				Every 6 Months
		        			</label>
	        			</div>
	        			<div class="radio">
		        			<label>
		        				<input type="radio" name="how-many-months" value="Every 9 months" <?php if (isset($_POST['how-many-months']) and $_POST['how-many-months'] == 'Every 9 Months') echo ' checked'; ?>>
		        				Every 9 Months
		        			</label>
	        			</div>
	        			<div class="radio">
		        			<label>
		        				<input type="radio" name="how-many-months" value="Every 12 months" <?php if (isset($_POST['how-many-months']) and $_POST['how-many-months'] == 'Every 12 Months') echo ' checked'; ?>>
		        				Every 12 Months
		        			</label>
	        			</div>
	        		</div>
        			<div class="form-group">
						<label for="other-requirements">Other Requirements:</label>
						<textarea name="carpet-textarea" id="cafeteria-textarea" cols="30" rows="2"></textarea>
						<?php echo $this->bootstrapAlert($this->springCleanMonthsError, 'danger') ?>
					</div>
	        	</div>

	        	<div id="parking" class="form-div">
                    <h3>Parking:</h3>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="parking[]" value="Building has a Car Park">
                            Building has a Car Park
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="parking[]" value="No Parking Near By">
                            No Parking Near By
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="parking[]" value="Loading Zone Outside Building">
                            Loading Zone Outside Building
                        </label>
                    </div>
                    <?php echo $this->bootstrapAlert($this->parkingError, 'danger') ?>
                </div>

	        	<div>
	        		<input type="submit" name="get-main-quote" value="Get Quick Quote" class="btn">
	        	</div>
				
	        </form>
		</div>
	        <hr>
        </div>
    </section>

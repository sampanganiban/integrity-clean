<!-- Welcome Section -->
    <section id="welcome" class="welcome text-center container">
        <div id="get-quote-form" class="row">
	        <h1>Online Quote</h1>
	        <p>This online proposal is to give you a general idea of the cost of our services. We will need to arrange a time to visit you to confirm this and other details.</p>
	        <hr>

	        <form action="index.php?page=main-quote" method="post" id="main-quote-form" class="clearfix">
        		<div id="facility-details" class="form-div">
	        		<h3>Facility Details and Staff:</h3>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staffNumber" value="1-5">
	        				1-5
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staffNumber" value="5-15">
	        				5-15
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staffNumber" value="15-30">
	        				15-30
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staffNumber" value="30-50">
	        				30-50
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staffNumber" value="50-100">
	        				50-100
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staffNumber" value="More than 100">
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
	        	</div>
	        	<?php echo $this->bootstrapAlert($this->staffNumError, 'danger') ?>


        		<div id="service-calls" class="form-div">
        		<h3>Days of Service Calls (per week):</h3>
        			<div class="checkbox">
					  <label>
					    <input type="checkbox" name="daysOfWeek[]" value="Monday">
					    Monday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="daysOfWeek[]" value="Tuesday">
					    Tuesday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="daysOfWeek[]" value="Wednesday">
					    Wednesday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="daysOfWeek[]" value="Thursday">
					    Thursday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="daysOfWeek[]" value="Friday">
					    Friday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="daysOfWeek[]" value="All Days">
					    All Days
					  </label>
					</div>
        		</div>
	        	<div id="dusting" class="form-div">
	        		<h3>Dusting (Dust all flat surfaces):</h3>
	        		<div class="radio">
					  <label>
					    <input type="radio" name="dusting" id="once-a-week" value="Once a Week">
					    Once a Week
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="dusting" id="once-a-month" value="Once a Month">
						Once a Month
					  </label>
					</div>
					<div class="form-group">
						<label for="other-requirements">Other Requirements:</label>
						<textarea name="dusting-textarea" id="dusting-textarea" cols="30" rows="2"></textarea>
					</div>
	        	</div>
	        	<div id="vacuum-cleaning" class="form-div">
	        	<h3>Vacuum Cleaning and/or Power Sweeping:</h3>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox">
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
						    <input type="radio" name="surfaces" value="Vinyl">
							Vinyl
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="surfaces" value="Tiles">
							Tiles						  
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="surfaces" value="Concrete">
							Concrete
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="surfaces" value="Wood">
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
	        	</div>

	        	<div id="cafeteria" class="form-div">
	        		<h3>Clean the Cafeteria:</h3>
	        		<div id="dishes">
	        			<h4>Dishes</h4>
	        			<h4>On Every Call:</h4>
	        			<div class="checkbox">
		        			<label>
		        				<input type="checkbox" name="cafeteria[]" value="">
		        				Collect Cups/Glasses from desks
		        			</label>
	        			</div>
	        			<div class="checkbox">
		        			<label>
		        				<input type="checkbox" name="cafeteria[]" value="">
		        				Handwash Dishes
		        			</label>
	        			</div>
	        			<div class="checkbox">
		        			<label>
		        				<input type="checkbox" name="cafeteria[]" value="">
		        				Load Dishwasher
		        			</label>
	        			</div>
	        		</div>
					<div class="form-group">
						<label for="other-requirements">Other Requirements:</label>
						<textarea name="carpet-textarea" id="cafeteria-textarea" cols="30" rows="2"></textarea>
					</div>
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
	        				<input type="radio" name="toilet-radio" value="Every Call">
	        				Every Call
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="toilet-radio" value="Once a Week">
	        				Once a Week
	        			</label>
	        		</div>
	        		<h4>Showers:</h4>
	        		<div class="form-group">
	        			<label>How many?</label>
	        			<input type="text" id="showers" name="showers">
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="shower-radio" value="Every Week">
	        				Every Call
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="shower-radio" value="Once a Week">
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
	        		<div id="spring-clean-months">
	        			<h4>How many months?</h4>
	        			<div class="radio">
		        			<label>
		        				<input type="radio" name="how-many-months" value="Every 3 months">
		        				Every 3 Months
		        			</label>
	        			</div>
	        			<div class="radio">
		        			<label>
		        				<input type="radio" name="how-many-months" value="Every 6 months">
		        				Every 6 Months
		        			</label>
	        			</div>
	        			<div class="radio">
		        			<label>
		        				<input type="radio" name="how-many-months" value="Every 9 months">
		        				Every 9 Months
		        			</label>
	        			</div>
	        			<div class="radio">
		        			<label>
		        				<input type="radio" name="how-many-months" value="Every 12 months">
		        				Every 12 Months
		        			</label>
	        			</div>
	        		</div>
        			<div class="form-group">
						<label for="other-requirements">Other Requirements:</label>
						<textarea name="carpet-textarea" id="cafeteria-textarea" cols="30" rows="2"></textarea>
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
                </div>

	        	<div>
	        		<input type="submit" name="get-main-quote" value="Get Quick Quote" class="btn">	
	        	</div>
				
	        </form>
		</div>
	        <hr>
        </div>
    </section>

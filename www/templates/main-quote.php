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
	        				<input type="radio" name="staff-number">
	        				1-5
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staff-number">
	        				5-15
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staff-number">
	        				15-30
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staff-number">
	        				30-50
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staff-number">
	        				50-100
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="staff-number">
	        				More than 100
	        			</label>
	        		</div>
	        		<div class="form-group">
						<label>Area approximately in metres squared:</label>
						<div class="input-group">							    
						    <input type="text">
							<span class="input-group-addon">m<sup>2</sup></span>
						</div>
						<span id="helpBlock" class="help-block">An average house is around 200m<sup>2</sup></span>
					</div>
	        	</div>

        		<div id="service-calls" class="form-div">
        		<h3>Days of Service Calls (per week):</h3>
        			<div class="checkbox">
					  <label>
					    <input type="checkbox">
					    Monday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox">
					    Tuesday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox">
					    Wednesday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox">
					    Thursday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox">
					    Friday
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox">
					    All Days
					  </label>
					</div>
        		</div>
	        	<div id="dusting" class="form-div">
	        		<h3>Dusting (Dust all flat surfaces):</h3>
	        		<div class="radio">
					  <label>
					    <input type="radio" name="dusting" id="once-a-week">
					    Once a Week
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="dusting" id="once-a-month">
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
						    <input type="radio" name="surfaces">
							Vinyl
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="surfaces">
							Tiles						  
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="surfaces">
							Concrete
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="surfaces">
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
		        				<input type="checkbox">
		        				Collect Cups/Glasses from desks
		        			</label>
	        			</div>
	        			<div class="checkbox">
		        			<label>
		        				<input type="checkbox">
		        				Handwash Dishes
		        			</label>
	        			</div>
	        			<div class="checkbox">
		        			<label>
		        				<input type="checkbox">
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
	        				<input type="radio" name="toilet-radio">
	        				Every Call
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="toilet-radio">
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
	        				<input type="radio" name="shower-radio">
	        				Every Call
	        			</label>
	        		</div>
	        		<div class="radio">
	        			<label>
	        				<input type="radio" name="shower-radio">
	        				Once a Week
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

	        	<div id="spring-clean" class="form-div">
	        		<h3>Spring Clean:</h3>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox">
	        				Clean Refrigerator Interior
	        			</label>
	        		</div>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox">
	        				Clean Microwave Interior
	        			</label>
	        		</div>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox">
	        				Wipe out Drawers
	        			</label>
	        		</div>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox">
	        				Clean Internal Partitions and Windows
	        			</label>
	        		</div>
	        		<div class="checkbox">
	        			<label>
	        				<input type="checkbox">
	        				Clean Blinds
	        			</label>
	        		</div>
	        		<div id="spring-clean-months">
	        			<h4>How many months?</h4>
	        			<div class="radio">
		        			<label>
		        				<input type="radio" name="how-many-months">
		        				Every 3 Months
		        			</label>
	        			</div>
	        			<div class="radio">
		        			<label>
		        				<input type="radio" name="how-many-months">
		        				Every 6 Months
		        			</label>
	        			</div>
	        			<div class="radio">
		        			<label>
		        				<input type="radio" name="how-many-months">
		        				Every 6 Months
		        			</label>
	        			</div>
	        			<div class="radio">
		        			<label>
		        				<input type="radio" name="how-many-months">
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
	        				<input type="checkbox">
	        				Building has a Car Park
	        			</label>
        			</div>
        			<div class="checkbox">
	        			<label>
	        				<input type="checkbox">
	        				No Parking Near By
	        			</label>
        			</div>
        			<div class="checkbox">
	        			<label>
	        				<input type="checkbox">
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

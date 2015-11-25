<h1>Your Online Quote</h1>
<p>Thanks for filling out our online quote form.</p>

<h3>Facility Details and Staff:</h3>
<p>Number of Staff: 1-5 </p>
<p>Area approximately in square metres: DID NOT PROVIDE METRES m2</p>

<h3>Days of Service Calls (Per Week):</h3>
<p>Monday</p>

<h3>Dusting (Dust all flat surfaces):</h3>
<p>Once a Week</p>
<p>Other Requirements: DID NOT PROVIDE DUSTING REQUIREMENTS</p>

<h3>Vacuum Cleaning and/or Power Sweeping:</h3>
<?php if(isset($_POST['all-carpeted-areas'])): ?>
	<?php echo :?> <p>All Carpeted Areas</p>
</endif;?>
<p>Other Requirements: DID NOT PROVIDE CARPET REQUIREMENTS</p>

<h3>Sweep and Mop:</h3>
<h4>All hard surface floors: </h4>
<p>Vinyl</p>
<?php if(isset($_POST['outside-entrance-way'])): ?>
	<?php echo :?> <p>Outside Entrance Way</p>
</endif;?>

<h3>Clean the Cafeteria:</h3>
<h4>Dishes</h4>
<h4>On Every Call:</h4>
<p>Collect Cups/Glasses from desks</p>
<p>Other Requirements: DID NOT PROVIDE CAFETERIA REQUIREMENTS</p>

<h3>Bathrooms</h3>
<h4>Toilets</h4>
<p>How many: 8</p>
<p>Every Call</p>

<?php if(isset($_POST['shower-radio'])) : ?>
	<?php echo :?> 	
	<h4>Showers</h4>
	<p>How many: 4</p>
	<p>Clean Shower Every Call</p>
</endif;?>

<h3>Supply Consumables</h3>
<p>Toilet Paper</p>

<h4>Use Green Products</h4>
<p>Where Possible</p>

<?php if(isset($_POST['glass'])) :?>
	<?php echo : ?> 
	<h3>Glass</h3>
	<p>Spot Clean Glass Doors</p>
</endif;?>
<p>Other Requirements: DID NOT PROVIDE GLASS REQUIREMENTS</p>















<?php

use Mailgun\Mailgun;

class MainQuotePage extends Page {

	// Properties
	private $totalErrors = 0;

	// Properties for Online Quote form
	private $staffNumError;
	private $staffNumber;
	private $area;
	
	private $daysOfWeekError;
	private $daysOfWeek;

	private $dustingError;
	private $dusting;
	private $dustingExtra;

	private $cafeteriaError;
	private $cafeteria;
	private $cafeteriaExtra;
	
	private $surfacesError;
	private $surfaces;
	private $outsideEntranceWay;

	private $toiletError;
	private $toiletTime;
	private $toiletNum;

	private $showerError;
	private $showerCalls;
	private $showerNum;
	private $showers;

	private $allCarpetedAreas;
	private $carpetExtra;

	private $cleanCupboardError;
	private $cleanCupboard;

	private $supplyConsumablesError;
	private $supplyConsumables;

	private $greenProducts;
	private $greenProductsError;

	private $glass;
	private $glassExtra;

	private $springCleanError;
	private $springClean;
	private $springCleanExtra;

	private $springCleanMonthsError;
	private $springCleanMonths;

	private $parkingError;
	private $parking;


	public function contentHTML() {
		include 'templates/main-quote.php';
	}

	public function __construct($model) {

		// Use the parent constructor code
		parent::__construct($model);

		// Make sure there is a quote in the session, else redirect back to quote page
		if( !isset($_SESSION['quoteID']) ) {
			header('Location: index.php?page=quote');
		}

		// If the registration form has been submitted
		if( isset( $_POST['get-main-quote'] ) ) {

			$this->processQuickQuote();
		}
	}

	public function processQuickQuote() {

		// VALIDATION

		// FACILITY DETAILS AND STAFF
		
		// If the user has not selected a number of staff
		if( !isset($_POST['staffNumber']) ) {
			$this->staffNumError = 'Please provide staff and area details.';
			$this->totalErrors++;
		} else {
			// Save the number of staff selected by the user
			$this->staffNumber = $_POST['staffNumber'];
		}

		// Save area info
		$this->area = $_POST['area-in-metres'];

		// DAYS OF CALLING SERVICE
		if( !isset($_POST['daysOfWeek']) ) {
			$this->daysOfWeekError = 'Please select the days for Service Calls.';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->daysOfWeek = $_POST['daysOfWeek'];
			foreach ($this->daysOfWeek as $days) {
				echo $days;
			}
		}

		// DUSTING
		if( !isset($_POST['dusting']) ) {
			$this->dustingError = 'Please an option for Dusting.';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->dusting = $_POST['dusting'];
		}

		// DUSTING TEXTAREA
		$this->dustingExtra = $_POST['dusting-textarea'];

		// VACUUM CLEANING
		if( isset($_POST['all-carpeted-areas']) ) {
			$this->allCarpetedAreas = $_POST['all-carpeted-areas'];
		} else {
			$this->allCarpetedAreas = '';
		}

		// Save carpet textarea
		$this->carpetExtra = $_POST['carpet-textarea'];

		// CAFETERIA
		if( !isset($_POST['cafeteria']) ) {
			$this->cafeteriaError = 'Please select your options for the Cafeteria.';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->cafeteria = $_POST['cafeteria'];

			foreach($this->cafeteria as $cafOptions) {
				echo $cafOptions;
			}
		}

		// CAFETERIA TEXTAREA
		$this->cafeteriaExtra = $_POST['cafeteria-textarea'];

		// SWEEP AND MOP
		if( !isset($_POST['surfaces']) ) {
			$this->surfacesError = 'Please select a Surface.';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->surfaces = $_POST['surfaces'];
		}

		if(isset($_POST['outside-entrance-way'])) {
			// Save data for Outside Entrance Way
			$this->outsideEntranceWay = $_POST['outside-entrance-way'];
		} else {
			// Leave blank
			$this->outsideEntranceWay = '';
		}

		// Bathrooms
		// TOILET
		if( !isset($_POST['toilet-radio']) ) {
			$this->toiletError = 'Please add all details for toilets.';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->toiletTime = $_POST['toilet-radio'];
		}

		// Save toilet and shower number
		$this->toiletNum = $_POST['toilets'];
		$this->showerNum = $_POST['showers'];

		// Save or clear shower radio buttons
		if(isset($_POST['shower-radio'])) {
			$this->showerCalls = $_POST['shower-radio'];
		} else {
			$this->showerCalls = '';
		}

		// Save or clear the number of showers
		if(isset($_POST['showers'])) {
			$this->showers = $_POST['showers'];
		} else {
			$this->showers = '';
		}

		// Save the data for the supply consumables
		if( !isset($_POST['consumables']) ) {
			$this->supplyConsumablesError = 'Please provide options for your Supply Consumables';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->supplyConsumables = $_POST['consumables'];
			// Loop through each intance and display them
			foreach($this->supplyConsumables as $supply) {
				echo $supply;
			}
		}

		// Green product validation
		if(!isset($_POST['green-products'])) {
			$this->greenProductsError = 'Please provide option for using green products';
			$this->totalErrors++;
		} else {
			// Save the data from the green product radio buttons
			$this->greenProducts = $_POST['green-products'];
		}

		// Save the glass
		if(isset($_POST['glass'])) {
			$this->glass = $_POST['glass'];
		} else {
			$this->glass = '';
		}

		// Save the textarea if provide
		if(isset($_POST['glass-textarea'])) {
			$this->glassExtra = $_POST['glass-textarea'];
		} else {
			$this->glass = '';
		}

		// CLEANING CUPBOARD
		if( !isset($_POST['cleaning-cupboard']) ) {
			$this->cleanCupboardError = 'Please select Yes or No if your Cleaning Cupboard is available';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->cleanCupboard = $_POST['cleaning-cupboard'];
		}

		// SPRING CLEAN
		if( !isset($_POST['springClean']) ) {
			$this->springCleanError = 'Please provide options for Spring Cleaning.';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->springClean = $_POST['springClean'];
			foreach ($this->springClean as $springOptions) {
				echo $springOptions;
				}
			}

		// SPRING CLEAN MONTHS
		if( !isset($_POST['how-many-months']) ) {
			$this->springCleanMonthsError = 'Please select how often you want us to call.';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->springCleanMonths = $_POST['how-many-months'];
		}

		// Validate Other requirements for spring cleaning
		if(isset($_POST['springClean-textarea'])) {
			$this->springCleanExtra = $_POST['springClean-textarea'];
		} else {
			$this->springCleanExtra = '';
		}
		
		// PARKING
		if( !isset($_POST['parking']) ) {
			$this->parkingError = 'Please select details on parking.';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->parking = $_POST['parking'];
		}

		// If passed validation get the users info from the database
		if($this->totalErrors == 0) {
		// Process the daysOfWeek
		$daysOfWeek = '';
		echo '<ul>';foreach( $this->daysOfWeek as $day ) {
			$daysOfWeek .= '<li>'.$day.'</li>';
		} echo '</ul>';

		// Process the cafeteriaOptions
		$cafeteriaOptions = '';
		echo '<ul>';foreach($this->cafeteria as $option) {
			$cafeteriaOptions .= '<li>'.$option.'</li>';
		}echo '</ul>';

		// Process the Supply Consumables
		$supplyOptions = '';
		echo '<ul>';foreach($this->supplyConsumables as $supplyOption) {
			$supplyOptions .= '<li>'.$supplyOption.'</li>';
		} echo '</ul>';

		// Process the spring clean options
		$springCleanOptions = '';
		echo '<ul>'; foreach ($this->springClean as $spring) {
			$springCleanOptions .= '<li>'.$spring.'</li>';
		}
		
		// Grab contents from file and get the contents from it
		$template = file_get_contents('./templates/onlineQuote.php');

		// Store values taken from form and add them prepare them for email message
		$values = 
			array(
				'1-5' => $this->staffNumber, 
				'DID NOT PROVIDE METRES' => $this->area,
				'Monday' => $daysOfWeek,
				'Once a Week' => $this->dusting,
				'Other Requirements: DID NOT PROVIDE DUSTING REQUIREMENTS' => $this->dustingExtra,
				'All Carpeted Areas' => $this->allCarpetedAreas,
				'Other Requirements: DID NOT PROVIDE CARPET REQUIREMENTS' => $this->carpetExtra,
				'Vinyl' => $this->surfaces,
				'Outside Entrance Way' => $this->outsideEntranceWay,
				'Collect Cups/Glasses from desks' => $cafeteriaOptions,
				'Other Requirements: DID NOT PROVIDE CAFETERIA REQUIREMENTS' => $this->cafeteriaExtra,
				'8' => $this->toiletNum,
				'Every Call' => $this->toiletTime,
				'How many: NOT PROVIDED' => $this->showerNum,
				'Clean Shower: NOT PROVIDED' => $this->showerCalls,
				'Toilet Paper' => $supplyOptions,
				'Where Possible' => $this->greenProducts,
				'Glass: NOT PROVIDED' => $this->glass,
				'Other Requirements: DID NOT PROVIDE GLASS REQUIREMENTS' => $this->glassExtra,
				'Yes it is available!' => $this->cleanCupboard,
				'Clean Refrigerator Interior' => $springCleanOptions,
				'Every 3 Months' => $this->springCleanMonths,
				'Other Requirements: DID NOT PROVIDE SPRING CLEAN REQUIREMENTS' => $this->springCleanExtra,
				'Building has a Car Park' => $this->parking
				);

		$message = str_replace(array_keys($values), array_values($values), $template);

		// die($message);

		// Instantiate the client
		$mgClient = new Mailgun('key-a5d6c43600911540c7ff4033f03e4f38');
		$domain = "sandboxfcac969b25074c6f969079a248e252c4.mailgun.org";

		// Send to user
		$result = $mgClient->sendMessage($domain, array(
		    'from'    => 'Integrity Clean <mailgun@sandboxfcac969b25074c6f969079a248e252c4.mailgun.org>',
		    'to'      => $_SESSION['email'],
		    'subject' => 'Thank you for getting an online quote with us, we will contact you for further details',
		    'text'    => $message
		));

	}	
}
























}
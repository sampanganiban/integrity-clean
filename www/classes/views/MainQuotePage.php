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
	
	private $surfacesError;
	private $surfaces;

	private $cafeteriaExtra;

	private $toiletError;
	private $toiletTime;
	private $toiletNum;

	private $showerError;
	private $showerCalls;
	private $showerNum;

	private $allCarpetedAreas;
	private $carpetExtra;

	private $cleanCupboardError;
	private $cleanCupboard;

	private $supplyConsumablesError;
	private $supplyConsumables;

	private $springCleanError;
	private $springClean;

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
				echo '<p>'.$days.'<p>';
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

		$this->carpetExtra = $_POST['carpet-textarea'];

		// CAFETERIA
		if( !isset($_POST['cafeteria']) ) {
			$this->cafeteriaError = 'Please select your options for the Cafeteria.';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->cafeteria = $_POST['cafeteria'];
		}

		// CAFETERIA TEXTAREA
		$this->cafeteriaExtra = $_POST['carpet-textarea'];

		// SWEEP AND MOP
		if( !isset($_POST['surfaces']) ) {
			$this->surfacesError = 'Please select a Surface.';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->surfaces = $_POST['surfaces'];
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


		if(isset($_POST['shower-radio'])) {
			$this->showerCalls = $_POST['shower-radio'];
		} else {
			$this->showerCalls = '';
		}
		

		// SUPPLY CONSUMABLES
		if( !isset($_POST['consumables']) ) {
			$this->supplyConsumablesError = 'Please provide options for your Supply Consumables.';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->supplyConsumables = $_POST['consumables'];
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
			foreach ($this->springClean as $springCleanOptions) {
				echo '<p>'.$springCleanOptions.'</p>';
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
		
		// PARKING
		if( !isset($_POST['parking']) ) {
			$this->parkingError = 'Please select details on parking.';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->parking = $_POST['parking'];
		}

		// $data = ['staffNumber' => $this->staffNumber, 'areaInMetres' => $this->area];
		// die($data);

		// If passed validation get the users info from the database
		if($this->totalErrors == 0) {
			// $data = $this->model->getUserInfo();
			// $message = file_get_contents('./templates/onlineQuote.php');
			
			// // Instantiate the client
			// $mgClient = new Mailgun('key-a5d6c43600911540c7ff4033f03e4f38');
			// $domain = "sandboxfcac969b25074c6f969079a248e252c4.mailgun.org";

			// // Send to user
			// $result = $mgClient->sendMessage($domain, array(
			//     'from'    => 'Integrity Clean <mailgun@sandboxfcac969b25074c6f969079a248e252c4.mailgun.org>',
			//     'to'      => $_SESSION['email'],
			//     'subject' => 'Thank you for getting an online quote with us, we will contact you for further details',
			//     'text'    => $message
			// ));
		}
	}	
}


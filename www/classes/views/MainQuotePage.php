<?php

use Mailgun\Mailgun;

class MainQuotePage extends Page {

	// Properties
	private $totalErrors = 0;

	// Properties for Online Quote form
	private $staffNumError;
	private $staffNumber;
	
	private $daysOfWeekError;
	private $daysOfWeek;

	private $dustingError;
	private $dusting;

	private $cafeteriaError;
	private $cafeteria;
	
	private $surfacesError;
	private $surfaces;

	private $toiletError;
	private $toiletNum;

	private $showerError;
	private $showerNum;

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
			$this->staffNumError = 'Please select the amount of staff members in your facility.';
			$this->totalErrors++;
		} else {
			// Save the number of staff selected by the user
			$this->staffNumber = $_POST['staffNumber'];
		}

		// DAYS OF CALLING SERVICE
		if( !isset($_POST['daysOfWeek']) ) {
			$this->daysOfWeekError = 'error 2';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->daysOfWeek = $_POST['daysOfWeek'];
		}

		// DUSTING
		if( !isset($_POST['dusting']) ) {
			$this->dustingError = 'error 3';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->dusting = $_POST['dusting'];
		}

		// CAFETERIA
		if( !isset($_POST['cafeteria']) ) {
			$this->cafeteriaError = 'error 5';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->cafeteria = $_POST['cafeteria'];
		}

		// SWEEP AND MOP
		if( !isset($_POST['surfaces']) ) {
			$this->surfacesError = 'error 4';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->surfaces = $_POST['surfaces'];
		}

		// Bathrooms
		// TOILET
		if( !isset($_POST['toilet-radio']) ) {
			$this->toiletError = 'error 6';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->toiletNum = $_POST['toilet-radio'];
		}

		// SHOWER
		if( !isset($_POST['shower-radio']) ) {
			$this->showerError = 'error 7';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->showerNum = $_POST['shower-radio'];
		}

		// SUPPLY CONSUMABLES
		if( !isset($_POST['consumables']) ) {
			$this->supplyConsumablesError = 'Supply Consumables Error';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->supplyConsumables = $_POST['consumables'];
		}

		// CLEANING CUPBOARD
		if( !isset($_POST['springClean']) ) {
			$this->cleanCupboardError = 'error 7';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->cleanCupboard = $_POST['springClean'];
		}

		// SPRING CLEAN
		if( !isset($_POST['springClean']) ) {
			$this->springCleanError = 'error 7';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->springClean = $_POST['springClean'];
		}

		// SPRING CLEAN MONTHS
		if( !isset($_POST['how-many-months']) ) {
			$this->springCleanMonthsError = 'error 7';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->springCleanMonths = $_POST['how-many-months'];
		}
		
		// PARKING
		if( !isset($_POST['parking']) ) {
			$this->parkingError = 'Error for parking';
			$this->totalErrors++;
		} else {
			// Save the data selected by the user
			$this->parking = $_POST['parking'];
		}

		// // If passed validation get the users info from the database
		if($this->totalErrors == 0) {

		// Pass the variables to this function to capture the data
		$message = file_get_contents('./templates/onlineQuote.php');

		die($message);
		
		// 	$data = $this->model->getUserInfo();
				
		// 	// Insert the customer info from the database into mailgun to send an email
			
		// 	// Instantiate the client
		// 	$mgClient = new Mailgun('key-a5d6c43600911540c7ff4033f03e4f38');
		// 	$domain = "sandboxfcac969b25074c6f969079a248e252c4.mailgun.org";

		// 	// Send to user
		// 	$result = $mgClient->sendMessage($domain, array(
		// 	    'from'    => 'Integrity Clean <mailgun@sandboxfcac969b25074c6f969079a248e252c4.mailgun.org>',
		// 	    'to'      => $_SESSION['email'],
		// 	    'subject' => 'Thank you for getting an online quote with us, we will contact you for further details',
		// 	    'text'    => ''
		// 	));
		}
	}













}
<?php

use Mailgun\Mailgun;

class MainQuotePage extends Page {

	// Properties
	private $totalErrors = 0;

	// Properties for Online Quote form
	private $staffNumber;
	private $dusting;
	private $surfaces;
	private $toiletNum;
	private $toiletRadio;
	private $showerRadio;
	private $howManyMonths;

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

		// Validation

		// Make form sticky
		$this->$staffNumber   = trim($_POST['']);
		$this->$dusting       = trim($_POST['']);
		$this->$surfaces      = trim($_POST['']);
		$this->$toiletNum     = trim($_POST['']);
		$this->$toiletRadio   = trim($_POST['']);
		$this->$showerRadio   = trim($_POST['']);
		$this->$howManyMonths = trim($_POST['']);


		// Facility Details and Staff

		// Days of Service Calls

		// Dusting

		// Vacuum Cleaning

		// Sweep and Mop

		// Clean the cafeteria

		// Bathrooms

		// Glass

		// Spring Clean

		// Parking



		// If passed validation get the users info from the database
		if($this->totalErrors == 0) {
			$data = $this->model->getUserInfo();
				
			// Insert the customer info from the database into mailgun to send an email
			
			// Instantiate the client
			$mgClient = new Mailgun('key-a5d6c43600911540c7ff4033f03e4f38');
			$domain = "sandboxfcac969b25074c6f969079a248e252c4.mailgun.org";

			// Send to user
			$result = $mgClient->sendMessage($domain, array(
			    'from'    => 'Integrity Clean <mailgun@sandboxfcac969b25074c6f969079a248e252c4.mailgun.org>',
			    'to'      => $_SESSION['email'],
			    'subject' => 'Thank you for getting an online quote with us, we will contact you for further details',
			    'text'    => ''
			));
		}
	}













}
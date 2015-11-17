<?php

use Mailgun\Mailgun;

class MainQuotePage extends Page {

	// Properties
	private $totalErrors = 0;

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

		// If passed validation get the users info from the database
		if($this->totalErrors == 0) {
			$data = $this->model->getUserInfo();
				
			// Once you get the customer info use it to fill in the info for sending an email
		}
	}



}
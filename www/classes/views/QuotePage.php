<?php

class QuotePage extends Page {

	// Properties
	private $name;
	private $company;
	private $email;

	private $nameError;
	private $emailError;
	private $companyError;
	// private $placeOrderSuccess;
	// private $placeOrderFail;
	private $totalErrors = 0;
	
	// Methods
	public function __construct($model) {

		// User the parent constructor code
		parent::__construct($model);

		// If the order form has been submitted
		if(isset($_POST['get-quote'])) {

			// Send to function that will process the quote form
			$this->processQuote();

		}

	}

	// Load the order content
	public function contentHTML() {

		include 'templates/quote.php';

	}

	public function processQuote() {

		// Create variable the field inputs and make them sticky
		$this->name    = trim($_POST['name']);
		$this->email   = trim($_POST['email']);
		$this->company = trim($_POST['company']);

		// If the first name has the required lengths and symbols
		if( strlen($this->name) < 2 ) {
			$this->nameError = 'Your name must be at least 2 characters long';
			$this->totalErrors++;
		} elseif( strlen($this->name) > 20 ) {
			$this->nameError = 'Your name must not be longer than 20 characters';
			$this->totalErrors++;
		} elseif( !preg_match('/^[a-zA-Z \-]{2,20}$/', $this->name) ) {
			$this->nameError = 'Your name must only consist of letters in the alphabet, spaces and hyphens';
			$this->totalErrors++;
		}

		// If the email is valid
		if( strlen($this->email) < 6 || strlen($this->email) > 254 ) {
			$this->emailError = 'Email is an invalid length';
		} elseif( !filter_var( $this->email, FILTER_VALIDATE_EMAIL ) ) {
			$this->emailError = 'Invalid Email format. example@example.com';
		}

		// If the company name has the required lengths and symbols
		if( strlen($this->company) < 2 ) {
			$this->companyError = 'Your company name must be at least 2 characters long';
			$this->totalErrors++;
		} elseif( strlen($this->company) > 20 ) {
			$this->companyError = 'Your company must not be longer than 20 characters';
			$this->totalErrors++;
		} elseif( !preg_match('/^[a-zA-Z \-]{2,20}$/', $this->company) ) {
			$this->companyError = 'Your company must only consist of letters in the alphabet, spaces and hyphens';
			$this->totalErrors++;
		}

		

		// If there are no errors, then continue to place their order into the database
		if( $this->totalErrors == 0 ) { 
			$result = $this->model->placeQuote();

			// If result is good then tell the user if their order was successful or not
			if( $result ) {
				
				// Redirect the user
				header('Location: index.php?page=main-quote');

				// $this->placeOrderSuccess = 'Thank you for placing an order with Mrs Molly Baking!';
			} else {
				// $this->placeOrderFail = 'Sorry, something went wrong when placing your order, please try in a few minutes.';
			}

		}

	}















}

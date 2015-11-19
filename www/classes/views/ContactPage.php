<?php

use Mailgun\Mailgun;

class ContactPage extends Page {

	// Properties
	private $totalErrors = 0;

	// Contact form properties
	private $name;
	private $email;
	private $message;
	private $contactNameError;
	private $contactEmailError;
	private $contactMessageError;
	private $contactSuccess;
	private $contactFail;

	// Methods
	public function __construct($model) {

		// User the parent constructor code
		parent::__construct($model);

		// If the contact form has been submitted
		if(isset($_POST['send-message'])) {
			// Send to function that will process the contact form
			$this->processContactForm();
		}

	}

	public function contentHTML() {

		// Load the contact content
		include 'templates/contact.php';

	}

	public function processContactForm() {

		// Create variable the field inputs and make them sticky
		$this->name    = trim($_POST['name']);
		$this->email   = trim($_POST['email']);
		$this->message = trim($_POST['message']);

		// If the first name has the required lengths and symbols
		if( strlen($this->name) < 2 ) {
			$this->contactNameError = 'Your first name must be at least 2 characters long';
			$this->totalErrors++;
		} elseif( strlen($this->name) > 20 ) {
			$this->contactNameError = 'Your first name must not be longer than 20 characters';
			$this->totalErrors++;
		} elseif( !preg_match('/^[a-zA-Z \-]{2,20}$/', $this->name) ) {
			$this->contactNameError = 'Your first name must only consist of letters in the alphabet, spaces and hyphens';
			$this->totalErrors++;
		}

		// If the email is valid
		if( strlen($this->email) < 6 || strlen($this->email) > 254 ) {
			$this->contactEmailError = 'Email is an invalid length';
		} elseif( !filter_var( $this->email, FILTER_VALIDATE_EMAIL ) ) {
			$this->contactEmailError = 'Invalid Email format. example@example.com';
		}

		// If the message is valid
		if( strlen($this->message) < 10 ) {
			$this->contactMessageError = 'Sorry your message is too short, your message should be at least 10 characters';
			$this->totalErrors++;
		} elseif( strlen($this->message) > 2000 ) {
			$this->contactMessageError = 'Sorry, your message is too long, can not be longer than 2000 characters';
			$this->totalErrors++;
		}


		// If there are no errors, then continue to place their order into the database
		if( $this->totalErrors == 0 ) { 
			// $result = $this->model->sendEnquiry();

			// Instantiate the client
			$mgClient = new Mailgun('key-a5d6c43600911540c7ff4033f03e4f38');
			$domain = "sandboxfcac969b25074c6f969079a248e252c4.mailgun.org";

			// Send to user
			$result = $mgClient->sendMessage($domain, array(
			    'from'    => 'Integrity Clean <mailgun@sandboxfcac969b25074c6f969079a248e252c4.mailgun.org>',
			    'to'      => '<' . $this->email . '>',
			    'subject' => 'Thank you for sending your enquiry to Integrity Clean',
			    'text'    =>  'Your message to Integrity Clean :'.$this->message
			));

			// Send to admin
			$result = $mgClient->sendMessage($domain, array(
			    'from'    => $this->name.' : '.$this->email.'<mailgun@sandboxfcac969b25074c6f969079a248e252c4.mailgun.org>',
			    'to'      => '<samanthaisabelle.panganiban@gmail.com>',
			    'subject' => 'Customer Enquiry',
			    'text'    => 'Customer Enquiry: '.$this->message
			));

			// If result is good then tell the user if their order was successful or not
			if( $result ) {
				$this->contactSuccess = 'Thank you for sending your message, we will try our best to get back to you.';
			} else {
				$this->contactFail = 'Sorry, something went wrong when sending your message, please try in a few minutes.';
			}

		}

	}


	

}
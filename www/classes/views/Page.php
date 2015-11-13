<?php

class Page {

	// Properties for the page info
	public $title;
	public $description;
	public $model;

	// Properties for the login form on each page in the footer
	private $usernameError;
	private $passwordError;
	private $loginError;
	private $username;
	private $totalErrors = 0;

	// Constructor
	public function __construct($model) {
		$this->model = $model;

		// Get the page data
		$this->model->getPageInfo();

		// If the user has submitted the form
		if( isset($_POST['login']) ) {

			// Process the login form
			$this->processLoginForm();

		}
	}

	// Function to build the HTML
	public function buildHTML() {

		// Load the header
		include 'templates/header.php';

		// Load the content
		$this->contentHTML();

		// Load the footer
		include 'templates/footer.php';

	}

	// Function to display alert messages
	public function bootstrapAlert( $message, $type ) {
		if( $message == '' ) { return; }

		echo '<div class="alert alert-'.$type.'">';
		echo $message;
		echo '</div>';
	}

	// METHODS FOR THE LOGIN FORM ON THE FOOTER
	public function processLoginForm() {

		// Save the login form data
		$this->username = trim($_POST['username']);

		// Validate the form before attempting to log in
		if( trim($_POST['username']) == '' ) {
			$this->usernameError = 'You must provide a username';
			$this->totalErrors++;
		}

		if( $_POST['password'] == '' ) {
			$this->passwordError = 'You must provide a password';
			$this->totalErrors++;
		}

		// If there are no errors
		if( $this->totalErrors == 0 ) {
			// Use the model to check if the user has the right credentials
			$this->model->attemptLogin();

			// If this code runs then the user was not redirected
			// therefore they did not have correct login credentials
			$this->loginError = 'Username or password incorrect';

		}

	}

}

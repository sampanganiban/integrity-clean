<?php

class Model {
	
	// Properties
	protected $dbc;
	public $title;
	public $description;

	// Constructor to connect to the database
	public function __construct() {

		// Connect to the database
		$this->dbc = new mysqli('localhost', DB_USER, DB_PASS, DB_NAME);

	}

	// Methods
	public function getPageInfo() {

		// Obtain the name of the requested page
		$requestedPage = $this->filter($_GET['page']);

		// Prepare the query
		$sql = "SELECT title, description FROM pages WHERE name = '$requestedPage'";

		// Run the query
		$result = $this->dbc->query($sql);

		// Convert the result into an associative array
		$pageData = $result->fetch_assoc();

		// Save the title and description in the properties above
		$this->title       = $pageData['title'];
		$this->description = $pageData['description'];
	}

	// Methods for logging in
	public function attemptLogin() {

		// Extract the data from the POST array
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Filter the data
		$username = $this->dbc->real_escape_string( $username );

		// Prepare SQL to find a user and get the hashed password
		$sql = "SELECT id, username, email, password, privilege FROM users WHERE username = '$username' ";

		// Run the SQL
		$result = $this->dbc->query($sql);

		// Make sure there is a result
		if( $result->num_rows == 0 ) {
			return;
		}

		// Extract the data from the result
		$data = $result->fetch_assoc();

		// Use the password compat library
		require 'vendor/password.php';

		// Compare the passwords
		if( password_verify( $password, $data['password'] ) ) {

			// Credentials are correct
			$_SESSION['username']  = $username;
			$_SESSION['privilege'] = $data['privilege'];
			$_SESSION['userID']    = $data['id'];

			// Redirect the user to the account page
			header('Location: index.php?page=account');

		}

	}

	// Filter the inputs and values
		protected function filter( $value ) {
		return $this->dbc->real_escape_string( $value );
	}
}

<?php

class RegisterModel extends Model {

	public function checkUsernameExists( $username ) {

	// Filter the username for malicious code
	$username = $this->filter( $username );

	// Prepare SQL
	$sql = "SELECT username FROM users WHERE username = '$username'";

	// Run the query
	$result = $this->dbc->query( $sql );
		
		// If there is a result
		if( $result->num_rows > 0 ) {
			// Account with that username exists
			return true;
		} else {
			// Account with that username does NOT exist
			return false;
		}
  	}

  	public function checkEmailExists( $email ) {
		// Filter the email address to make the SQL safe
		$email = $this->filter( $email );

		// Prepare SQL
		$sql = "SELECT email FROM users WHERE email = '$email'";

		// Run the SQL
		$result = $this->dbc->query( $sql );

		// If there is a result from the database
		return $result->num_rows ? true : false;
	}

	public function registerNewAccount( $username, $email, $password ) {

		// Filter the data
		$username = $this->filter($username);
		$email    = $this->filter($email);

		// Hash the password
		require 'vendor/password.php';

		$hashedPassword = password_hash( $password, PASSWORD_BCRYPT );

		// Prepare SQL for insert
		$sql = "INSERT INTO users VALUES (NULL, '$username', '$email', '$hashedPassword', 'user')";

		// Run the SQL
		$this->dbc->query($sql);

		// Get ID of the brand new user
		$userID = $this->dbc->insert_id;

		// Log user in by saving their details into the session
		$_SESSION['username']  = $username;
		$_SESSION['privilege'] = 'user';
		$_SESSION['userID']    = $userID;

	}


}

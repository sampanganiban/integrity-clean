<?php

class QuoteModel extends Model {

	// Function that will enter the personal details of a customer to fill out the quote form
	public function placeQuote() {

		// Filter the data
		$name    = $this->filter($_POST['name']);
		$email   = $this->filter($_POST['email']);
		$company = $this->filter($_POST['company']);

		// Prepare the SQL to insert the order
		$sql = "INSERT INTO quote VALUES (NULL, '$name', '$company', '$email', NULL )";

		// Run the SQL
		$this->dbc->query($sql);

		// If the query failed
		if( $this->dbc->affected_rows == 1 ) {
			return true;
		}	

		return false;
	
	}
	
}
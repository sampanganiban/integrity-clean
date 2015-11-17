<?php

class MainQuoteModel extends Model {

	public function getUserInfo() {

		$quoteID = $_SESSION['quoteID'];

		// Prepare the SQL
		$sql = "SELECT id, name, email, time_quote_placed FROM quote WHERE id = $quoteID";

		// Run the query
		$result = $this->dbc->query($sql);

		// Make sure there is a result
		if( $result->num_rows == 0 ) {
			return;
		}

		// Extract the data
		$result->fetch_assoc();
	}
}
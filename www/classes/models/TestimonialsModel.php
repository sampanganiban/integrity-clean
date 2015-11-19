<?php

class TestimonialsModel extends Model {

	public function addReview() {

		// Filter the data
		$name   = $this->filter($_POST['reviewUsername']);
		$review = $this->filter($_POST['reviewMessage']);

		// Prepare SQL add the review
		$sql = "INSERT INTO reviews VALUES (NULL, '$name', '$review', NULL)";

		// Run the query
		$this->dbc->query($sql);

		// If the query worked
		if( $this->dbc->affected_rows == 1 ) {
			return true;
		}	

		return false;

	}
	
}
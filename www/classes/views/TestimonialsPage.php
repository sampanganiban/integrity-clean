<?php

class TestimonialsPage extends Page {

	// Properties
	private $totalErrors = 0;

	// Properties for Reviews
	private $name;
	private $nameError;
	private $reviewMessage;
	private $reviewMessageError;
	private $submitReviewError;
	private $submitReviewSuccess;

	public function contentHTML() {

		include 'templates/testimonials.php';

	}

	// Methods
	public function __construct($model) {
		parent::__construct($model);

		// If the Review form has been submitted
		if(isset($_POST['submit-review'])) {

			// Process the form
			$this->processReview();
		}
	}

	public function processReview() {

		// Make the form sticky
		$this->name 		  = trim($_POST['reviewUsername']);
		$this->reviewMessage  = trim($_POST['reviewMessage']);

		// Validation for name
		if( strlen($this->name) < 2 ) {
			$this->nameError = 'Your first name must be at least 2 characters long';
			$this->totalErrors++;
		} elseif( strlen($this->name) > 30 ) {
			$this->nameError = 'Your first name must not be longer than 30 characters';
			$this->totalErrors++;
		} elseif( !preg_match('/^[a-zA-Z \-]{2,20}$/', $this->name) ) {
			$this->nameError = 'Your first name must only consist of letters in the alphabet, spaces and hyphens';
			$this->totalErrors++;
		}

		// Validation for message
		if( strlen($this->reviewMessage) < 10 ) {
			$this->reviewMessageError = 'Sorry your review is too short, your review should be at least 10 characters';
			$this->totalErrors++;
		} elseif( strlen($this->reviewMessage) > 2000 ) {
			$this->reviewMessageError = 'Sorry, your review is too long, can not be longer than 2000 characters';
			$this->totalErrors++;
		}

		// If there were no errors
		if( $this->totalErrors = 0 ) {
			$result = $this->model->addReview();
			
			// Let the user know if adding their review was successful
			if( $result ) {
				$this->submitReviewSuccess = 'Thank you for adding your review into Integrity Clean!';
			} else {
				$this->submitReviewError = 'Sorry, something went wrong when adding your review, please try in a few minutes.';
			}

		}









	}

}
<?php

class AccountPage extends Page {

	// Properties
	private $totalErrors = 0;

	// Properties for changing password
	private $currentPasswordError;
	private $newPasswordError;
	private $confirmPasswordError;
	private $passwordChangeSuccess;
	private $passwordChangeFail;

	// Methods
	public function __construct($model) {
		parent::__construct($model);

		// If a user submits the changing password form
		if(isset($_POST['change-password'])) {
			$this->processPasswordChange();
		}

		// // If the user us an admin
		// if( isset($_SESSION['privilege']) && $_SESSION['privilege'] == 'admin' ) {

		// 	// If the admin has submitted the deleting order button
		// 	if( isset($_POST['delete-order']) ) {
		// 		$this->processDeleteOrder();
		// 	}

		// 	// If the admin has submitted the deleting message button
		// 	if( isset($_POST['delete-message']) ) {
		// 		$this->processDeleteMessage();
		// 	}

		// 	// If the admin has clicked the update menu button
		// 	if( isset($_POST['edit-menu'])) {
		// 		$this->processMenuEdit();
		// 	}

		// }

	}

	public function contentHTML() {
		
		include 'templates/account.php';
	
		// If user is an admin
		if( $_SESSION['privilege'] == 'admin' ) {

			include 'templates/admin.php';

		}

	}

	private function processPasswordChange() {

		// Create variables for passwords
		$currentPassword = $_POST['current-password'];
		$newPassword	 = $_POST['new-password'];
		$confirmPassword = $_POST['confirm-password'];

		// Validate the form
		if( strlen($currentPassword) == 0 ) {
			$this->currentPasswordError = 'This is required';
			$this->totalErrors++;
		} elseif( !$this->model->checkPassword($currentPassword) ) {
			$this->currentPasswordError = 'Incorrect password';
			$this->totalErrors++;
		}

		if( strlen($newPassword) < 8 ) {
			$this->newPasswordError = 'Your new password needs to be longer than 8 characters';
			$this->totalErrors++;
		}

		if( $confirmPassword != $newPassword ) {
			$this->confirmPasswordError = 'Does not match the new password';
			$this->totalErrors++;
		}

		// If no errors
		if( $this->totalErrors == 0 ) {

			// Update the password
			$result = $this->model->updatePassword();

			// If updating the password was a success
			if( $result ) {
				$this->passwordChangeSuccess = 'Successfully changed your password!';
			} else {
				$this->passwordChangeFail = 'Something went wrong updating your password';
			}

		}

	}

}




































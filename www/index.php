<?php

// Set time for the site
date_default_timezone_set("Pacific/Auckland");

// Start the session
session_start();

// Impliment config file
require '../config.php';

// Determine what page the user wants
// If the user has chosen a certain page display that, if not just display the home page
$_GET['page'] = isset($_GET['page']) ? $_GET['page'] : 'home';

// Require some classes
require 'classes/views/Page.php';
require 'classes/models/Model.php';

// Create a switch based on the page requested
switch($_GET['page']) {

	// Homepage
	case 'home':
		require 'classes/models/HomeModel.php';
		require 'classes/views/HomePage.php';
		$model = new HomeModel();
		$page = new HomePage($model);
	break;

	// About page
	case 'about':
		require 'classes/models/AboutModel.php';
		require 'classes/views/AboutPage.php';
		$model = new AboutModel();
		$page = new AboutPage($model);
	break;

	// Services page
	case 'services':
		require 'classes/models/ServicesModel.php'; 
		require 'classes/views/ServicesPage.php';
		$model = new ServicesModel();
		$page = new ServicesPage($model);
	break;

	// Quick Quote page
	case 'quote':
		require 'classes/models/QuoteModel.php'; 
		require 'classes/views/QuotePage.php';
		$model = new QuoteModel();
		$page = new QuotePage($model);
	break;

	// Register page
	case 'register':
		require 'classes/models/RegisterModel.php';
		require 'classes/views/RegisterPage.php';
		$model = new RegisterModel();
		$page = new RegisterPage($model);
	break;

	// Account page
	case 'account':
		require 'classes/models/AccountModel.php';
		require 'classes/views/AccountPage.php';
		$model = new AccountModel();
		$page = new AccountPage($model);
	break;

	// Testimonials page
	case 'testimonials' :
		require 'classes/models/TestimonialsModel.php';
		require 'classes/views/TestimonialsPage.php';
		$model = new TestimonialsModel();
		$page = new TestimonialsPage($model);
	break;

	// Contact page
	case 'contact':
		require 'classes/models/ContactModel.php';
		require 'classes/views/ContactPage.php';
		$model = new ContactModel();
		$page = new ContactPage($model);
	break;

	default:
		require 'classes/models/Error404Model.php';
		require 'classes/views/Error404Page.php';
		$model = new Error404Model();
		$page = new Error404Page( $model );
	break;

}

// Load the content for each page
$page->buildHTML();

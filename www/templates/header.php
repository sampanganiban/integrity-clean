<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $this->model->description; ?>">
    <meta name="author" content="">
 
    <title><?php echo $this->model->title; ?></title>

    <link href="css/main.css" rel="stylesheet" >
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/grayscale.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif] navbar-shrink-->

</head>

<body data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top 
    <?php
        // Display the changing nav bar when the page is not the homepage
        if( $_GET['page'] == 'home' ) : ?> top-nav-collpase
    <?php endif; ?>" role="navigation">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php?page=home">
                    <span class="light">Integrity</span> Clean
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav" id="nav-bar-links">
                    <li>
                        <a href="index.php?page=about">About Us</a>
                    </li>
                    <li>
                        <a href="index.php?page=services">Our Services</a>
                    </li>
                    <li>
                        <a href="index.php?page=quote">Quick Quote</a>
                    </li>
                    <li>
                        <a href="index.php?page=testimonials">Testimonials</a>
                    </li>
                    <li>
                        <a href="index.php?page=contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Intro Header -->
    <?php
        if($_GET['page'] == 'home' ) : ?>
            <header class="intro">
                <div class="intro-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <img src="./img/logo/desktop-logo.png" alt="">
                                <h1 id="intro-text">Our Name, Our Policy</h1>
                                <img src="./img/logo/logo-no-text.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </header>;
        <?php endif;
    ?>        

    <main class="clearfix">



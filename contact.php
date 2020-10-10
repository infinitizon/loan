<?php
require_once './library/config.php';
require_once './library/functions.php';



?>
<!DOCTYPE HTML>

<html lang="en">


<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width,initial-scale=1">


		
		<meta property="og:title" content="<?php echo $site_name; ?> - Online lending offers loans for auto, home improvement and practically anything else, at low rates for those with good credit. "/>
<meta property="og:url" content="http://www.<?php echo $site_domain; ?>" />
<meta property="og:image" content="http://www.<?php echo $site_domain; ?>/images/logo.png" />
<meta property="og:site_name" content="<?php echo $site_name; ?>" />

<meta name="description" content="<?php echo $site_name; ?> Online lending offers loans for auto, home improvement and practically anything else, at low rates for those with good credit." />
<meta name="keywords" content="<?php echo $site_name; ?> ,excellent credit, car loan, home improvement financing, timeshare financing " />

  <title><?php echo $site_name; ?> - Contact Us</title>

<!--Bootstrap -->

<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">

<!--Bootstrap-slider -->

<link rel="stylesheet" href="assets/css/bootstrap-slider.min.css" type="text/css">

<!--OWL Carousel slider-->

<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">

<!--Custome Style -->

<link rel="stylesheet" href="assets/css/style.css" type="text/css">

<!--FontAwesome Font Style -->

<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- Fav and touch icons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">

<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">

<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">

<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">

<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">

<!-- Google-Font-->

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->

</head>

<body>

<!-- Header -->
<?php include 'menu.php';?>
   

<!-- Intro -->

<section class="inner-intro section-padding dark-overlay">

  <div class="container">

    <div class="inner-text white-text z-index text-center">

      <h1>Contact Us</h1>

      <nav>

        <ol class="breadcrumb">

          <li class="breadcrumb-item"><a href="#">Home</a></li>

          <li class="breadcrumb-item active">Contact Us</li>

        </ol>

      </nav>

    </div>

  </div>

</section>

<!-- /Intro --> 



<!-- Contact-us -->

<section class="section-padding">

<div class="container">

	<div class="row">

	  <div class="col-lg-8">

		<div class="section-header m-0 p-0">

		  <div class="section-title">Get In Touch</div>

		  <h2>Reach out to us & we will respond as soon as we can.</h2>

		</div>

		<div class="contact-form">
<form method="post" action="mail.php" >
		  <div class="row">

			<div class="col-md-6">

			  <div class="form-group">

				<input type="text" name="fname" class="form-control" placeholder="First Name">

			  </div>

			</div>

			<div class="col-md-6">

			  <div class="form-group">

				<input type="text" name="lname" class="form-control" placeholder="Last Name">

			  </div>

			</div>

		  </div>

		  <div class="row">

			<div class="col-md-6">

			  <div class="form-group">

				<input type="email"  name="email" class="form-control" placeholder="Email Address">

			  </div>

			</div>

			<div class="col-md-6">

			  <div class="form-group">

				<input type="text"  name="phone" class="form-control" placeholder="Phone Number">

			  </div>

			</div>

		  </div>

		  <div class="form-group">

			<textarea class="form-control"  name="message" placeholder="Message Content"></textarea>

		  </div>

		  <div class="form-group">

			<input type="submit" value="Send Message" class="btn">

		  </div>

</form>
		</div>

	  </div>

	  <div class="col-lg-4">

		<div class="info-box">

		  <div class="box-head">

			<h5>Contact Details</h5>

		  </div>

		  <div class="box-body">

			<div class="info-list">

			  <h6>Address</h6>

			  <p><?php echo $site_address; ?></p>

			</div>

			<div class="info-list">

			  <h6>Email</h6>

			  <p><a href="mailto:<?php echo $site_email; ?>"><?php echo $site_email; ?></a></p>


			</div>

			<div class="info-list">

			  <h6>Phone</h6>

			  <p><a href="callto:<?php echo $site_phone; ?>"><?php echo $site_phone; ?></a></p>


			</div>

		  </div>

		</div>

	  </div>

	</div>

</div>

</section>

<!-- /Contact-us --> 



<!-- Map -->

<section class="map-wrap">

 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.798865209656!2d-1.8999314841939121!3d52.4827
 77379807175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bc8e437482cd%3A0x9d65ce353d980964!2s1%20Colmore%20Row%2C%20B
 irmingham%20B3%202BJ%2C%20UK!5e0!3m2!1sen!2sng!4v1583255706404!5m2!1sen!2sng" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

</section>

<!-- Map --> 



<?php include 'footer.php';?>
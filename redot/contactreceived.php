<!DOCTYPE html>
<html>

<!-- #BeginTemplate "Template.dwt" -->

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Chamuze :: start saving now</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="toner, toners, catridge, office consumable, equipements" />
<meta name="description" content="Chamuze is a foremost supplier of office consumable equipment. We are committed to making use of technology to solve your company’s supply issues.." />

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

<link href="styles/fonts.css" rel="stylesheet" />
<link href="styles/bootstrap.min.css" rel="stylesheet" />
<link href="styles/jquery-ui.min.css" rel="stylesheet" />
<link href="styles/myglyphicons2.css" rel="stylesheet" />
<link href="styles/font-awesome.css" rel="stylesheet" />
<link href="styles/site.css" rel="stylesheet" />
<link href="styles/animate.css" rel="stylesheet" />

<!-- #BeginEditable "styles" -->

	<link href="styles/innerStyles.css" rel="stylesheet">

<!-- #EndEditable -->
</head>
<body>
<header>
	<div class="container">
		<nav class="navbar navbar-expand-lg">
               <a class="navbar-brand" href="/">
                    <img class="img-fluid" src="images/logo.png" />
               </a>
               <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item active">
                              <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="about.php"> About Us</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="services.php"> Services</a>
                         </li>
                         <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Products
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="products.php"> Products</a>
                                   <a class="dropdown-item" href="faqs.php"> FAQs</a>
                              </div>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="gallery.php"> Gallery</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="contact.php"> Contact</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="blogs.php"> Blog</a>
                         </li>
                    </ul>
                    <div class="my-2 my-lg-0">
                         
                    </div>
               </div>
          </nav>
	</div>
     </header>
     <main>
<!-- #BeginEditable "body" -->

	<div id="innerBanner">
		<div class="container">
			<h2>Contact Received</h2>
			<p>get in touch with us</p>
		</div>
	</div>
	
	<div id="innerCon">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<h2><span class="glyphicons glyphicons-building"></span> Office Location</h2>
					<p><span class="fa fa-home"></span> Address: 4, Salvation Street, Opebi, Ikeja, Lagos, Nigeria.</p>
					<p><span class="fa fa-print"></span> FAX Address: P.O. Box 644, Ebute Metta</p>
					<p><span class="fa fa-phone"></span> Telephone: +234 802 952 1532‬</p>
					<p><span class="fa fa-envelope"></span> Email: info@chamuze.com</p>
					
					<br>
					<h4>Connect with Us</h4>
					<p><span class="fa fa-facebook"></span> @premiumtonercatridges</p>
					<p><span class="fa fa-instagram"></span> @premiumtoners</p>
					<p><span class="fa fa-linkedin"></span> @premiumtoners</p>

				</div>
				<div class="col-lg-7">
					<?php
					if(isset($_POST['email'])) {
					     
					    // EDIT THE 2 LINES BELOW AS REQUIRED
					    $email_to = "orders@premiuninkcartridges.net";
					    $email_subject = "Chamuze Contact Form";
					     
					     
					    function died($error) {
					        // your error code can go here
					        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
					        echo "These errors appear below.<br /><br />";
					        echo $error."<br /><br />";
					        echo "Please go back and fix these errors.<br /><br />";
					        die();
					    }
					     
					    // validation expected data exists
					    if(!isset($_POST['name']) ||
					        !isset($_POST['email']) ||
					        !isset($_POST['subject']) ||
					        !isset($_POST['message'])) {
					        died('We are sorry, but there appears to be a problem with the form you submitted.');       
					    }
					     
					    $name = $_POST['name']; // required
					    $email = $_POST['email']; // required
					    $subject = $_POST['subject']; // not required
					    $message = $_POST['message']; // required
					     
					    $error_message = "";
					    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
					  if(!preg_match($email_exp,$email)) {
					    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
					  }
					    $string_exp = "/^[A-Za-z .'-]+$/";
					  if(!preg_match($string_exp,$name)) {
					    $error_message .= 'The Names you entered does not appear to be valid.<br />';
					  }
					  if(strlen($message) < 2) {
					    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
					  }
					  if(strlen($error_message) > 0) {
					    died($error_message);
					  }
					    $email_message = "Form details below.\n\n";
					     
					    function clean_string($string) {
					      $bad = array("content-type","bcc:","to:","cc:","href");
					      return str_replace($bad,"",$string);
					    }
					     
					    $email_message .= "Name: ".clean_string($name)."\n";
					    $email_message .= "Email: ".clean_string($email)."\n";
					    $email_message .= "Subject: ".clean_string($subject)."\n";
					    $email_message .= "Comments: ".clean_string($message)."\n";
					     
					     
					// create email headers
					//I changed this $email to $name 
					$headers = 'From: '.$email."\r\n".
					'Reply-To: '.$email."\r\n" .
					'X-Mailer: PHP/' . phpversion();
					@mail($email_to, $email_subject, $email_message, $headers);  
					?>
					
					<h2>Thank you for your mail</h2>
					<p>Your email has been received</p>
					
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>

<!-- #EndEditable -->
	</main>
	<footer>
     	<div class="container">
     		<div class="row">
     			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
     				<p>&copy;<?php echo date("Y"); ?> all rights reserved. Chamuze | Follow Us <a href="https://www.facebook.com/PremiumTonersCartridge" title="Facebook"><span class="fa fa-facebook"></span></a> <a href="https://www.instagram.com/premiumtoners" title="Instagram"><span class="fa fa-instagram"></span></a> <a href="https://www.linkedin.com/company/premium-toner-catridges" title="LinkedIn"><span class="fa fa-linkedin"></span></a>
</p>
     			</div>
     			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-right">
     				<p>Developed by <a href="http://maxystuff.co.uk/" title="REDOT DIGITAL">REDOT DIGITAL</a> </p>
     			</div>
     		</div>
     	</div>
     </footer>
	 <script type="text/javascript" src="scripts/jquery-3.3.1.min.js"></script>
     <script type="text/javascript" src="scripts/popper.min.js"></script>
     <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
     <script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
     <script type="text/javascript" src="scripts/list.min.js"></script>
     <script type="text/javascript" src="scripts/slick.js"></script>
     <script type="text/javascript" src="scripts/myScripts.js"></script>
     <script type="text/javascript" src="scripts/wow.min.js"></script>
     <script type="text/javascript">
          var wow = new WOW(
               {
                    boxClass: 'wow',      // animated element css class (default is wow)
                    animateClass: 'animated', // animation css class (default is animated)
                    offset: 0,          // distance to the element when triggering the animation (default is 0)
                    mobile: true,       // trigger animations on mobile devices (default is true)
                    live: true,       // act on asynchronously loaded content (default is true)
                    callback: function (box) {
                         // the callback is fired every time an animation is started
                         // the argument that is passed in is the DOM node being animated
                    },
                    scrollContainer: null // optional scroll container selector, otherwise use window
               }
          );
          wow.init();
     </script>
     <!-- #BeginEditable "scripts" -->

	<!-- #EndEditable -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

<!-- #EndTemplate -->

</html>

<?php
// Start the session to store the user's cookie preference
session_start();

// Check if the user has already accepted or declined cookies
if (isset($_COOKIE['cookie_consent'])) {
    $cookieConsent = $_COOKIE['cookie_consent'];
} else {
    $cookieConsent = '';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // If the user has accepted cookies, set a cookie to remember the consent
    if (isset($_POST['accept_cookies'])) {
        setcookie('cookie_consent', 'accepted', time() + (365 * 24 * 60 * 60), '/'); // 1 year expiry
        $_SESSION['cookie_consent'] = 'accepted'; // Store in session for immediate use
    } elseif (isset($_POST['decline_cookies'])) {
        setcookie('cookie_consent', 'declined', time() - 3600, '/'); // Expired immediately
        $_SESSION['cookie_consent'] = 'declined'; // Store in session for immediate use
    }

    // Reload the page to update the banner visibility
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Aricens</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css?id=<?php echo uniqid();?>" rel="stylesheet">
<link href="css/responsive.css?id=<?php echo uniqid();?>" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png?id=15" type="image/x-icon">
<link rel="icon" href="images/favicon.png?id=15" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
        .cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 16px;
        }
        .cookie-banner button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
        }
        .cookie-banner button.decline {
            background-color: #f44336;
        }
        img.mobilelogo {
    max-width: 44vw;
}
    </style>
</head>

<body>
    


<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header header-style-two">
    	
        <!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="upper-inner clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo "><a href="index.php"><img src="/images/aricelogo.png?id=5" alt="" title=""></a></div>
                    </div>
                    
					<div class="upper-right clearfix">
                    	
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-e-mail-envelope"></span></div>
                            <ul>
                            	<li><a href="contact.php">info@aricens.com</a></li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-phone-receiver"></span></div>
                            <ul>
								<!--li>+44 1231231234</li-->
                            </ul>
                        </div>
						
						<!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="fa fa-map-marker"></span></div>
                            <ul>
								<li>Derby, United Kingdom</li>
                            </ul>
                        </div>
                        
						<!--div class="social-box">
							<ul class="social-icon-one">
								<li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
								<li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
								<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
							</ul>
						</div-->
                    </div>
                    
                </div>
            </div>
        </div>
        <!--End Header Upper-->

		<!-- Header Lower  -->
    	<div class="header-lower">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <div class="nav-outer clearfix">
                    
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class=""><a href="index.php">Home</a>
										
									</li>
									<li class=""><a href="about.php">About Us</a>
										
									</li>
									<li class=""><a href="services.php">Services</a>
										
									</li>
									<li class=""><a href="contact.php">Contact Us</a>
										
									</li>
									
								</ul>
							</div>
							
						</nav>
                    </div>
					<div class="outer-box  laptop d-none d-md-block  d-lg-block">																		<div class="language"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="contact.php"><span class="flag-icon"><img src="images/icons/flag-icon.png?id=99"  alt=""/></span>Contact us</a>													</div>											</div>
					
					<div class="outer-box mobile d-md-none d-lg-none ">
						
						
						<div class="language"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="contact.php"><span class="flag-icon"><img src="/images/aricelogo.png?id=5" class='mobilelogo' alt=""/></span></a>
							
						</div>
						
					</div>
					
                </div>
            </div>
        </div>
		

    </header>
    <!--End Main Header -->
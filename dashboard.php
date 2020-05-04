<?php 
	session_start();
	require './php_script/connect.inc.php';
	if(!$_SESSION['acc_id'])
	{
		header("location: login.php");
	}
	else
	{
		$acc_id = $_SESSION['acc_id'];
		$mysql_query = "SELECT `balance` from $mysql_db.$mysql_tb WHERE `acc_no`='$acc_id'";
		$result = $conn->query($mysql_query);
		$count=$result->num_rows;
		if($count==1)
		{
			while($row = $result->fetch_assoc())
				$balance = $row['balance'];
		}
	}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title> ICBC-WIRE |     Dashboard</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="n.png" type="image/x-icon">
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/bootstrap.css">
    <!--Font Awesome Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/all.min.css">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/owl.carousel.css">




    <!--Main Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/style.css">

    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet"   href="assets/frontend/css/magnific-popup.css">

    <link rel="stylesheet" type="text/css" href="assets/frontend/css/animate.css">
    <link href="assets/frontend/css/color.css" rel="stylesheet">

</head>

<body class="body-class">
<!--Start Preloader-->
<div class="site-preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!--End Preloader-->

<!-- Main Menu Area Start -->
<header id="mainHeader" class="header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <div class="container">
            <a class="navbar-brand" href="">
                ICBC-WIRE <BR>ONLINE BANK
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '86ebe60f-2ff3-4564-aba7-c8dc360803cb', f: true }); done = true; } }; })();</script>

<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transfer</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./account/own.php">Own bank</a>
                            <a class="dropdown-item" href="./account/tb.php">Others Bank</a>
                             </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="./account/statement.php">Account Statement</a></li>
                  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php echo $_SESSION['first_name']; ?>&nbsp;<?php echo $_SESSION['last_name']; ?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                                      
                            <a class="dropdown-item" href="logout.php"  onclick="event.preventDefault();
                                        document.getElementById('logout').submit();">Log Out</a>
                            <form id="logout" action="logout.php" method="POST">
                                <input type="hidden" name="_token" value="qgg5EqZA3kNXphirY8kJY0ky4EvZMLKTa3oHQlNn">                            </form>

                        </div>
                    </li>
                </ul>
                <div class="viewPlan">
                    <a href="#">
                   ¥ <?php echo $balance; ?>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Main Menu Area End -->


    <section id="welcomeArea" style="background: url(assets/image/breadcrumb.jpg) no-repeat top;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="topcontent-bank">
                    <h1>   DASHBOARD</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
 <center>  <h2>
                          Acct. Id  #<?php echo htmlspecialchars($_SESSION['acc_id']); ?>
                        </h2>
<br><br>
				Email Address  &nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $_SESSION['email_id']; ?>
				<br><br>
				Date of Join   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $_SESSION['doj']; ?>
				<br><br>
				Contact Number   &nbsp;: +86-<?php echo $_SESSION['mobile_no']; ?>
				<br><br>
                        <div class="sectionSeparator"></div></center>

                    </div>
                </div>
            </div>

<section id="paymentMethod">
        <div class="container">
           
            <div class="row calculate justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="box">

<div class="viewPlan">
<center style=color:white;><h2>Current Balance</h2></center>
                    <a href="dashboard.php">
                    ¥ <?php echo $balance; ?>                 </a>
<br><br><br><center style=color:white;><h2>Transactions</h2></center>
                    <a href="./account/statement.php">
                    All Time Transactions                 </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<br><br>
<br><br>

                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- Footer Area Start -->
<footer id="footer">
    <div class="container">
        <div class="row newslatterBox">
            <div class="col-12">
                <div class="box d-flex">
                    <div class="left">
                        <h2>
                            Join Our Newsletter
                        </h2>
                        <div class="sectionSeparator"></div>
                    </div>
                    <div class="right">
                        <form action="process.php" method="post">
                            <input type="hidden" name="_token" value="EpBKm2KvBKbPeeNLLZT5YTHQY8fNicPVfyaW3Ah2">                            <input type="text" name="email" placeholder="Enter your email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="box">
                    <div class="logo">
                        <a href="index.html">
                            ICBC-WIRE
                        </a>
                    </div>
                    <p>
                         We bring the right people together to challenge established thinking and drive transformation. We will show the way to successive.
                    </p>
                    <div class="social_links">
                        <ul>


                                                            <li>
                                    <a href="https://www.facebook.com">
                                        <i title="facebook" class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://twitter.com">
                                        <i title="twitter" class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://plus.google.com/discover">
                                        <i title="Google Plus" class="fa fa-google-plus-official"></i>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
<p><?php
							 $_SERVER['REMOTE_ADDR'];
							echo 'Your IP ADDRESS : '.$user_ip;
						?></p>
                </div>
            </div>

            <div class="col-lg-4">

            </div>
            <div class="col-lg-3">
                <div class="box box4">
                    <h2 >
                        Contact Us                    </h2>
                                            <p style="padding-top: 10px">
                            Shanghai, China
                        </p>

                                            <p style="padding-top: 10px">
                            software@fiddlershub.com
                        </p>

                                            <p style="padding-top: 10px">
                            +48183576590
                        </p>

                                    </div>
            </div>
        </div>

    </div>
    <div class="copyright">
        <p class="text-center">
            © 2020 ICBC-WIRE copyright. All rights reserved
        </p>
    </div>
</footer>


<!--Start ClickToTop-->
<div class="totop">
    <a href="#top"><i class="fa fa-arrow-up"></i></a>
</div>
<!--End ClickToTop-->


<!--jQuery JS-->
<script src="assets/frontend/js/jquery.min.js"></script>
<!--Bootstrap JS-->
<script src="assets/frontend/js/bootstrap.min.js"></script>
<script src="frontend/js/popper.js"></script>
<script src="assets/frontend/js/owl.carousel.min.js"></script>

<!--YTPlayer-->


<!-- main js -->
<script src="assets/frontend/js/main.js"></script>
    <script src="assets/frontend/js/jquery.magnific-popup.js"></script>

    <script>

        // banner content animation
        $(".hero-area").on("translate.owl.carousel", function() {
            $(".hero-content h3").removeClass("animated fadeIn").css("opacity", "0"),
                $(".hero-content h2").removeClass("animated flipInX").css("opacity", "0"),
                $(".hero-content p").removeClass("animated fadeIn").css("opacity", "0"),
                $(".hero-content a").removeClass("animated flipInX").css("opacity", "0")
        }),
            $(".hero-area").on("translated.owl.carousel", function() {
                $(".hero-content h3").addClass("animated fadeIn").css("opacity", "1"),
                    $(".hero-content h2").addClass("animated flipInX").css("opacity", "1"),
                    $(".hero-content p").addClass("animated fadeIn").css("opacity", "1"),
                    $(".hero-content a").addClass("animated flipInX").css("opacity", "1")
            });

        //======================================
        //========== magnificPopup video ============
        //======================================
        $('.mfp-iframe').magnificPopup({
            type: 'video'
        });
        $('.image-popup').magnificPopup({
            type: 'image'
        });


    </script>
    <script>
        $('.hero-area').owlCarousel({
            loop:true,
            dots: true,
            mouseDrag: true,
            autoplay: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplayTimeout: 10000,
            smartSpeed: 1000,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });

        // Partner Slider
        $('.single-partners').owlCarousel({
            loop:true,
            dots: false,
            autoplay: true,
            margin:30,
            smartSpeed: 1500,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });

    </script>
<script type="text/javascript" src="assets/frontend/js/toastr.min.js"></script>
</body>
</html>

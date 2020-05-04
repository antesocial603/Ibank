<?php 
	session_start();
	require '../php_script/connect.inc.php';
	if(!$_SESSION['acc_id'])
	{
		header("location: login.php");
	}
	else
	{
		
			if(!empty($_POST['newpassword1'])&&!empty($_POST['newpassword2']))
			{
				$newpassword1 = $_POST['newpassword1'];
				$newpassword2 = $_POST['newpassword2'];
				if($newpassword1!=$newpassword2)
					echo "<center> <p style='padding: 5px;background-color:red;'> Both the password didnot match! Please enter Again.</p>	</center>";
				else
				{
					$acc_id = $_SESSION['acc_id'];
					$newpassword = $newpassword1;
					$query = "UPDATE $mysql_tb SET `password`='$newpassword' WHERE `acc_no`='$acc_id'";
					$result = $conn->query($query);
					if(!$result)
						echo "<center> <p style='padding: 5px;background-color:red;'> Something Went Wrong. Please try again.</p>	</center>";	
					else
					{
						session_destroy();
						echo "<center> <p style='padding: 5px;background-color:red;'> Password Changed Successfully. Please log in Again.</p>	</center>";
						header('Refresh: 2; url=../login.php');
					}
				}
			}
		
	}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title> iBanking |     Change Password</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="http://preview.thesoftking.com/thesoftking/ibanking/assets/image/favicon.png" type="image/x-icon">
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="http://preview.thesoftking.com/thesoftking/ibanking/assets/user/css/bootstrap.css">
    <!--Font Awesome Stylesheet-->
    <link rel="stylesheet" type="text/css" href="http://preview.thesoftking.com/thesoftking/ibanking/assets/user/css/all.min.css">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="http://preview.thesoftking.com/thesoftking/ibanking/assets/user/css/animate.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--YTPlayer  Stylesheet-->
    <link rel="stylesheet" type="text/css" href="http://preview.thesoftking.com/thesoftking/ibanking/assets/user/css/YTPlayer.min.css">

    <!--Main Stylesheet-->
    <link rel="stylesheet" type="text/css" href="http://preview.thesoftking.com/thesoftking/ibanking/assets/user/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://preview.thesoftking.com/thesoftking/ibanking/assets/user/css/video.css">
    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href="http://preview.thesoftking.com/thesoftking/ibanking/assets/user/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="http://preview.thesoftking.com/thesoftking/ibanking/assets/user/css/toastr.min.css">
    <link href="http://preview.thesoftking.com/thesoftking/ibanking/assets/user/css/color.php?color=1672B7" rel="stylesheet">
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

<header class="header-area">
    <nav class="navbar sticky-top navbar-expand-lg main-menu">
        <div class="container">

            <a class="navbar-brand" href="http://preview.thesoftking.com/thesoftking/ibanking">
                <img src="http://preview.thesoftking.com/thesoftking/ibanking/assets/image/logo.png"  style="max-width: 220px; max-height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a class="nav-link" href="http://preview.thesoftking.com/thesoftking/ibanking/user/dashboard">Dashboard</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transfer</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="http://preview.thesoftking.com/thesoftking/ibanking/user/transfer/balance">Own bank</a>
                            <a class="dropdown-item" href="http://preview.thesoftking.com/thesoftking/ibanking/user/transfer/balance/other-bank">Others Bank</a>
                            <a class="dropdown-item" href="http://preview.thesoftking.com/thesoftking/ibanking/user/e-currency">E-currency</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="http://preview.thesoftking.com/thesoftking/ibanking/user/account/statement">Account Statement</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://preview.thesoftking.com/thesoftking/ibanking/user/e-deposit">E-deposit</a></li>

                    <li class="nav-item"><a class="nav-link" href="http://preview.thesoftking.com/thesoftking/ibanking/user/our-branch">Our Branch</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">emeka</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <a class="dropdown-item" href="http://preview.thesoftking.com/thesoftking/ibanking/user/profile">Account Settings</a>
                            <a class="dropdown-item" href="http://preview.thesoftking.com/thesoftking/ibanking/user/change/password">Change Password</a>
                            <a class="dropdown-item" href="http://preview.thesoftking.com/thesoftking/ibanking/user/logout"  onclick="event.preventDefault();
                                        document.getElementById('logout').submit();">Log Out</a>
                            <form id="logout" action="http://preview.thesoftking.com/thesoftking/ibanking/user/logout" method="POST">
                                <input type="hidden" name="_token" value="l5zfXQBfVCekfF6FkeXeUTmhwZyfCnujRJMh3tJo">                            </form>

                        </div>
                    </li>
                </ul>
                <div class="viewPlan">
                    <a href="#">
                        0 INR
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
    <section id="welcomeArea" style="background: url(http://preview.thesoftking.com/thesoftking/ibanking/assets/image/breadcrumb.jpg) no-repeat top; background-size: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="topcontent">
                    <h1>    Change Password</h1>
                </div>
            </div>
        </div>

    </div>
</section>






    <section id="paymentMethod">
        <div class="container">
           
            <div class="row calculate justify-content-center">
                <div class="col-md-10 col-lg-12">
                    <div class="box">

                        <form action="http://preview.thesoftking.com/thesoftking/ibanking/user/profile/password" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="l5zfXQBfVCekfF6FkeXeUTmhwZyfCnujRJMh3tJo">                            <div class="row">
                              
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">New Password</label>
                                  
<input type="password" class="form-control" name="newpassword1" 
placeholder="New Password"  required></input>
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="control-label" for="readOnlyInput">Confirm Password</label>
<input type="password" class="form-control" name="newpassword2" placeholder="Confirm Password"  required></input>
                                </div>

                            </div>
                            <div class="tile-footer">
                                <button class="btn mr_btn_solid" style="  width: 100%!important; margin-bottom: 20px;" type="submit">Change</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Footer Area Start -->
<footer id="footer">
    <div class="container">

        <div class="copyright">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">

                        <div class="banding">
                            <p >
                        © 2019 iBanking. All rights reserved
                            </p>
                    </div>


                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="box w-100 text-right">
                        <div class="social_links">
                            <ul>
                                                                    <li>
                                        <a href="https://www.facebook.com/thesoftking">
                                            <i title="facebook" class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                                                    <li>
                                        <a href="https://twitter.com/thesoftking">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->


<!--Start ClickToTop-->
<div class="totop">
    <a href="#top"><i class="fa fa-arrow-up"></i></a>
</div>
<!--End ClickToTop-->


<script src="http://preview.thesoftking.com/thesoftking/ibanking/assets/user/js/jquery.min.js"></script>
<!--Bootstrap JS-->
<script src="http://preview.thesoftking.com/thesoftking/ibanking/assets/user/js/bootstrap.min.js"></script>
<script src="http://preview.thesoftking.com/thesoftking/ibanking/assets/user/js/popper.js"></script>



<!-- main js -->
<script type="text/javascript" src="http://preview.thesoftking.com/thesoftking/ibanking/assets/user/js/toastr.min.js"></script>
<script>
    
    jQuery(window).on('load', function () 
    
    {

        /*---------------------------------------------------
            Site Preloader
        ----------------------------------------------------*/
        var $sitePreloaderSelector = $('.site-preloader');
        $sitePreloaderSelector.fadeOut(500);


    });
</script>

<!-- main js -->

</body>

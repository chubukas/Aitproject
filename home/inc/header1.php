<?php 
session_start();

if (isset($_GET["regx"])) {
    $_SESSION["harsh"] = $_GET["regx"];
    // echo $_SESSION["harsh"];
}else{
    $_SESSION["harsh"] = "00000";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:site_name" content="AIT Capitol Holdings">
	<meta property="og:title" content="Invest With AIT Capitol Holdings" />
	<meta name="description" content="Invest With AIT Capitol Holdings, it's totally different from its competitors trying to achieve something special starting with the...">
	<meta property="og:description" content="Invest With AIT Capitol Holdings, it's totally different from its competitors trying to achieve something special starting with the...">
	<meta property="og:type" content="website" />

    <!-- Title -->
    <title>AIT Capitol Holdings</title>

    <!-- Favicon -->
     <link rel="icon" href="./img/logo.png" />
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '7f79e0b3025501d26999331f8c9d1566d230cfe5';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>




</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area"id="index">

        <!-- Navbar Area -->
        <div class="cryptos-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cryptosNav">

                        <!-- Logo -->
                        <a class="nav-brand d-md-none" href="home"><img src="img/logo.png" alt="" width="100px"/></a>

                        <a class="nav-brand d-none d-md-block" href="home"><img src="img/logo.png" alt="" width="200px"/></a>

    

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#index">Home</a></li>
                                    <li><a href="#aboutUs">About-us</a></li>
                                    <li><a href="#plans">Plans</a></li>
                                    <li><a href="#testimonials">Testimonials</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>

                             
                                    <?php if (isset($_SESSION["role"])) {
                                        echo '  <a href="../account" class=" btn btn-link btn-sm text-primary">
                                                    <i class="fa fa-user"> </i> Dashboard
                                                </a>';
                                    }else{
                                        echo '
                                            <a href="../register" class="btn btn-secondary btn-md mx-4 text-white">Register</a>
                                            <a href="../login" class="btn btn-primary btn-md mx-4 text-white">Login</a>
                                        ';
                                    } ?>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


   
<?php include 'inc/modals.php'; ?>
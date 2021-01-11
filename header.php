<?php
session_start();
if (isset($_SESSION["userID"])) {
    $userID = $_SESSION["userID"];
}
?>

<head>
    <meta charset="utf-8">
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<!-- Main Header-->
<header class="main-header">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                </div>

                <div class="nav-outer pull-right clearfix">

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
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="order.php">Order Now</a></li>

                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="team.php">Our Team</a></li>
                                        <li><a href="price.php">Price</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-grid.php">Blog Grid</a></li>
                                        <li><a href="blog-classic.php">Blog Classic</a></li>
                                        <li><a href="blog-single.php">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.php">Our Products</a></li>
                                        <li><a href="shop-single.php">Product Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li <?php echo isset($_SESSION["userID"]) ? "class='dropdown'" : "";  ?>><a href="<?php echo isset($_SESSION["userID"]) ? "index.php" : "sign-in.php";  ?>"><?php echo isset($_SESSION["userID"]) ? "Profile" : "Sign In";  ?></a>

                                    <?php echo isset($_SESSION["userID"]) ? "<ul> <li><a href='shop.php'>Profile</a></li>
                                        <li><a href='signout.php'>Sign Out</a></li></ul>" : "";  ?>


                                </li>
                            </ul>
                        </div>

                    </nav>

                    <!-- Main Menu End-->

                    <!--Button Box-->
                    <div class="outer-box clearfix">




                    </div>
                    <!--Button Box-->

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="order.php">Order Now</a></li>

                            <li class="dropdown"><a href="#">Pages</a>
                                <ul>
                                    <li><a href="team.php">Our Team</a></li>
                                    <li><a href="price.php">Price</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog-grid.php">Blog Grid</a></li>
                                    <li><a href="blog-classic.php">Blog Classic</a></li>
                                    <li><a href="blog-single.php">Blog Single</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Shop</a>
                                <ul>
                                    <li><a href="shop.html">Our Products</a></li>
                                    <li><a href="shop-single.html">Product Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

</header>
<!--End Main Header -->
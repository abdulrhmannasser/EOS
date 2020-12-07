


<!DOCTYPE HTML>
<html>
<head>

    <title>Watches an E-Commerce online Shopping Category Flat Bootstrap Responsive Website Template| 404 :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="../parsley.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../parsley.min.js"></script>
    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script src="js/jquery.easydropdown.js"></script>
    <script src="js/simpleCart.min.js"> </script>
    <style>
        @import url(http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
        .droid-arabic-naskh{font-family: 'Droid Arabic Naskh', serif;}
        body{font-family:  'Droid Arabic Naskh', serif;}
        ::-webkit-input-placeholder { /* WebKit browsers */
            direction: rtl;
        }
    </style>
</head>
<body>
<div class="men_banner">
    <div class="container">
        <div class="header_top" >
            <div class="header_top_left">
                <div class="box_11"><a href="cart.php">
                        <h4><p>السله </p><img src="images/bag.png" alt=""/><div class="clearfix"> </div></h4>
                    </a></div>
                <div class="clearfix"> </div>
            </div>
            <div class="header_top_right">
                <ul class="header_user_info">
                    <a class="login" href="login.php">
                        <i class="user"> </i>
                        <li class="user_desc"><?php

                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }
                            if (isset($_SESSION["uun"]))
                            {
                                $un=$_SESSION["uun"];
                                echo "$un" ;
                            }

                            else echo "حسابي";

                            ?>
                        </li>

                    </a>

                    <div class="clearfix"> </div>

                </ul>
                <ul class="header_user_info">

                <a class="login" href="process/logout.php">

                        <li class="user_desc"><?php

                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }
                            if (isset($_SESSION["uun"]))
                            {
                                $un=$_SESSION["uun"];
                                echo "تسجيل خروج" ;
                            }


                            ?></li>
                    </a>

                    <div class="clearfix"> </div>
                </ul>

                <?php
                //session_start();
                if (isset($_SESSION["un"]))

                    echo "
                <ul class=\"header_user_info\">
                    <a class=\"login\">
                        <i class=\"user\"> </i>
                        <li class=\"user_desc\"><a class=\"login\" href=\"process/logout.php\">Logout</a>

                            
                            </li>
                    </a>
                    <div class=\"clearfix\"> </div>
                </ul>"; ?>
                <!-- start search-->
                <div class="search-box">
                    <div id="sb-search" class="sb-search">
                        <form method="get" action="search.php">
                            <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                            <input class="sb-search-submit" type="submit" value="">
                            <span class="sb-icon-search"> </span>
                        </form>
                    </div>
                </div>
                <!----search-scripts---->
                <script src="js/classie1.js"></script>
                <script src="js/uisearch.js"></script>
                <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                </script>
                <!----//search-scripts---->
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>


        </div>

        <div style="margin :0px;padding:0px;>

            <div style="margin :0px;padding:0px;">
                <a href="index.php"><img src="images/logo.png" height="140px"  width="700px" align="left" "> </a>

            </div>
            <div class="menu" style="margin :0px;padding:0px;" >
                <ul class="megamenu skyblue">
                    <?php
                    include "../dbinfo.php";
                    $cn=mysqli_connect(Host,UN,PW,DBname);
                    $rslt=mysqli_query($cn,"select * from categories");
                    while ($arr2=mysqli_fetch_array($rslt))
                    {
                        $cat_id=$arr2[0];
                        ?>
                            <li><a class="color2" href="fcategory.php?fcat=<?php echo $cat_id?>" ><?php echo "$arr2[1]" ; ?></a>
                            <div class="megapanel">
                            <div class="row">
                            <div class="col1">
                            <div class="h_nav">
                            <ul>
                        <?php
                        $cn1=mysqli_connect(Host,UN,PW,DBname);

                        $rslt1=mysqli_query($cn1,"call view_brandscat($cat_id)") or die("Error: " . mysqli_error($cn1));

                        while ($arr1=mysqli_fetch_array($rslt1))
                        {
                            $scat_id= $arr1[0];
                            ?>
                            <li><h4><a href=<?php echo"category.php?cat=$scat_id&fcat=$cat_id"?> > <?php echo $arr1[1] ?></a></h4></li>

                         <?php } ?>

                        </div>
                        </div>
                        </div>
                        </div>
                        </li>
                        <?php  }

                        ?>
                    <li><a  href="../vendor/login.php">  تسجيل كتاجر </a></li>
                    <div class="clearfix">  </div>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>




</body>
</html>
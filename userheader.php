<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("location:user_login.php");
}
?>
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                <h1><a href="#">Fashion <span>Fiesta</span></a></h1>
            </div>
            <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
                <div class="cart box_1">
                    <a href="show_cart.php">
                        <h3> <div class="total">
                                <span class="simpleCart_total">
                                    <?php if (isset($_SESSION['products'])) {

                                    $arr = (array)$_SESSION['products'];
                                    echo count($arr);

                                    ?></span><?php
                                }
    ?>

                            <img src="images/cart.png" alt=""/></div></h3>  </a><?php if (!isset($_SESSION['products'])) {

                        ?>

                        <p><a href="#" class="simpleCart_empty">Empty Cart</a></p><?php
                    }
                    ?>



                </div>
            </div>
            <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
                <span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
                <p>Call me</p>
            </div>
            <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i
                            class="glyphicon glyphicon-search"> </i> </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="head-top" style="background-color:purple ;">
            <div class="n-avigation">

                <nav class="navbar nav_bottom" role="navigation">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                                data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"
                                  style="color: whitesmoke;!important;background-color: whitesmoke!important;"></span>
                            <span class="icon-bar"
                                  style="color: whitesmoke;!important;background-color: whitesmoke!important;"></span>
                            <span class="icon-bar"
                                  style="color: whitesmoke;!important;background-color: whitesmoke!important;"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li><a href="userhome.php">Home</a></li>

                                    <li><a href="show_cart.php">MyCart</a></li>
                                    <li><a href="myorders.php">MyOrders</a></li>
                                    <li><a href="userchangepassword.php"> User change password</a></li>
                                    <li><a href="lo.php"> Logout</></li>
                        </ul>



                    </div><!-- /.navbar-collapse -->

                </nav>
            </div>
        </div>
    </div>
</div>

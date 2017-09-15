<?php
session_start();
if(!isset( $_SESSION["username"]))
{
    header("location:admin_login.php");
}
?>

<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                <h1><a href="index.html">Fashion <span>Fiesta</span></a></h1>
            </div>
            <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
                <div class="cart box_1">
                    <a href="checkout.html">
                        <h3> <div class="total">
                                <span class="simpleCart_total"></span></div>
                            <img src="images/cart.png" alt=""/></h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

                </div>
            </div>
            <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
                <span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
                <p>Call me</p>
            </div>
            <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: purple;">
        <div class="head-top" >
            <div class="n-avigation">

                <nav class="navbar nav_bottom" role="navigation">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar" style="color: whitesmoke;!important;background-color: whitesmoke!important;"></span>
                            <span class="icon-bar" style="color: whitesmoke;!important;background-color: whitesmoke!important;"></span>
                            <span class="icon-bar" style="color: whitesmoke;!important;background-color: whitesmoke!important;"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li><a href="adminhome.php">Home</a></li>
                            <li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown">Manage Co-Admin
                                    <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="add_admin.php">Add Admin</a> </li>
                                    <li><a href="view_admin.php">View Admin</a> </li>
                                </ul>
                            <li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown">Manage category
                                    <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="add_category.php">Add Category</a> </li>
                                    <li><a href="view_category.php">View Category</a> </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown">Manage subcategory
                                    <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="add_subcategory.php">Add Subcategory</a> </li>
                                    <li><a href="view_subcategory.php">View Subcategory</a> </li>
                                </ul>
                            </li>   <li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown">Manage Brands
                                    <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="add_brands.php">Add Brands</a> </li>
                                    <li><a href="view_brand.php">View Brands</a> </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown">Manage Products
                                    <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="add_product.php">Add Products</a> </li>
                                    <li><a href="view_product.php">View products</a> </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown">Settings
                                    <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
                            <li><a href="adminchangepassword.php">Change Password</a></li>
                            <li><a href="viewcontacts.php">User Messages</a></li>
                            <li><a href="logout_admin.php">Logout</a></li>
                        </ul>
                            </li>
                        </ul>

                    </div><!-- /.navbar-collapse -->

                </nav>
            </div>


            <div class="clearfix"> </div>
            <!---pop-up-box---->
            <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
            <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
            <!---//pop-up-box---->
            <div id="small-dialog" class="mfp-hide">
                <div class="search-top">
                    <div class="login">
                        <form action="#" method="post">
                            <input type="submit" value="">
                            <input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">

                        </form>
                    </div>
                    <p>	Shopping</p>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });

                });
            </script>
            <!---->
        </div>
    </div>
</div>






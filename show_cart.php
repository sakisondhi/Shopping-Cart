<?php


$arr = array();
if (isset($_SESSION['products'])) {

    $arr =(array) $_SESSION['products'];
} else {

   // header("location:index.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "headerfiles.html";
    ?>

</head>
<body >

<?php

if(isset($_SESSION['email']))
{
    include "userheader.php";
}
else {
    include "public_header.php";
}
require "cart.php";
?>
            <div class="container">
        <h1>SHOW CART</h1>


        <table class="table">

            <tr>
                <th>Sr.no.</th>
                <th>Product_name</th>
                <th>Photo</th>
                <th>Price</th>

                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Control</th>
            </tr>
            <?php
            for ($i = 0; $i < count($arr); $i++) {
              $atemp= (array) $arr[$i];
             $t=   $atemp['qty'] * $atemp['price']
                ?>
                <tr>
                    <th><?php echo $i + 1; ?></th>
                    <th><?php echo $atemp['product_name']; ?></th>
                    <th><img src="<?php echo $atemp['photo']; ?>" height="100" width="100"></th>
                    <th><?php echo $atemp['price']; ?></th>

                    <th><?php echo $atemp['qty'];?></th>
                    <th><?php echo $t; ?></th>
                    <th><a href="delete_cart_product.php?q=<?php echo  $atemp['productid'] ?>">Delete</a></th>
                </tr>

                <?php
            }
            ?>
            <tr>
                <td colspan="5"></td>
                <td><a href="index.php"><input type="button" class="btn btn-success btn-lg" value="CONTINUE"></a></td>
                <td><a href="pay_cart.php"><input type="button" class="btn btn-info btn-lg" value="PROCEED "></a></td>
            </tr>
        </table>






    </div>

<?php
include "footer.html";
?>
</body>

</html>

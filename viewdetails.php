<?php
include "cart.php";
include "connection.php";
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

    $oid=$_REQUEST["q"];

    $query="select * from orderdetail inner JOIN products on orderdetail.productid=products.productid where `orderdetail`.orderid=".$oid;
    $result=mysqli_query($con,$query);
    ?>
</head>
<body>
<?php
include "userheader.php";?>
<div class="new-products">
    <div class="container">
        <h3>Manage Pending Orders</h3>


<table class="table table-responsive">

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

           $count=0;
            while ( $row=mysqli_fetch_array($result)) {
                $pname=$row['productname'];
                $photo=$row['photo1'];
                $price=$row['price'];
                $qty=$row['qty'];
                ?>
                <tr>
                    <th><?php echo ++$count; ?></th>
                    <th><?php echo $pname; ?></th>
                    <th><img src="<?php echo $photo;  ?>" height="100" width="100"></th>
                    <th><?php echo $price; ?></th>

                    <th><?php echo $qty; ?></th>
                    <th><?php echo $qty * $price ?></th>

                </tr>

                <?php
            }
            ?>

</table>
    </div>
</div>
<?php
include "footer.html";
?>
</body>
</html>

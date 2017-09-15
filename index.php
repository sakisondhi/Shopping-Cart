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
<body>
<?php
include "public_header.php";
include "connection.php";
?>
<div class="container-fluid">
    <div class="c-btm">
        <div class="content-top1">
            <div class="container">
                <?php
                $productsquery = "SELECT * FROM `products` INNER JOIN category on products.categoryid = category.`category id` INNER JOIN subcategory on products.subcategoryid=subcategory.subcategoryid WHERE   products.discount > 20 order by category.`super category`,category.`category name`,products.discount ";

                $productsresult = mysqli_query($con, $productsquery);

                while ($productsrow = mysqli_fetch_array($productsresult)) {

                $discount = $productsrow[7];
                $newprice = $productsrow[6] - ($productsrow[6] * ($discount / 100));
                ?>

<!--                --><?php
//
//                if ($countrow % 2 == 0) {
//                ?>
<!--                <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">-->
<!--                    --><?php
//                    }
//                    else
//                    {
//                    ?>
                    <div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
<!--                        --><?php
//                        }
//                        ?>


                        <div class="col-md1 simpleCart_shelfItem">
                            <span href="#" style="position: absolute;padding: 10px;top: -5px;right: 0;border-radius: 100%;color:white;background-color: darkorange;" >Offer <?php echo $discount; ?> %</span>
                            <a href="quickview.php?productid=<?php echo $productsrow[0]; ?>">
                                <img class="img-responsive" style="height:260px;width: 200px;"
                                     src="<?php echo $productsrow[2]; ?>" alt=""/>
                            </a>
                            <h3>
                                <a ref="quickview.php?productid=<?php echo $productsrow[0]; ?>"><?php echo $productsrow[1]; ?></a>
                            </h3>
                            <div class="price">


                                <h4 class="item_price">
                                    <del> &#x20b9; <?php echo $productsrow[6]; ?></del>
                                </h4>
                                <h5 class="item_price">&#x20b9; <?php echo $newprice; ?></h5>
                                <a href="add_to_cart.php?productid=<?php echo $productsrow[0]; ?>" class="item_add">Add To
                                    Cart</a>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                        <br>
                    </div>
                    <?php
                    }
                    ?>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </div>

    <?php
    include "footer.html";
    ?>
</body>
</html><?php

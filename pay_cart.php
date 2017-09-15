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
include "cart.php";
include "public_header.php";

$arr = array();
$arr = $_SESSION['products'];
?>


    <div class="container">

        <h1><u>Pay</u></h1>
        <form id="form1" action="http://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="business" value="vmmeducation@gmail.com"/>
            <input type="hidden" name="upload" value="1"/>
            <input type="hidden" name="cmd" value="_cart"/>
            <table  class="table">

                <tr>
                    <th>Sr.no.</th>
                    <th>Product_name</th>
                    <th>Photo</th>
                    <th>Price (INR)</th>

                    <th>Quantity</th>
                    <th>Subtotal</th>

                </tr>
                <?php
                $total = 0;
                for ($i = 0; $i < count($arr); $i++) {
                    $total += $arr[$i]->qty * $arr[$i]->price;
                    ?>
                    <tr>
                        <th><?php echo $i + 1; ?></th>
                        <th><?php echo $arr[$i]->product_name ?></th>
                        <th><img src="<?php echo $arr[$i]->photo ?>" height="100" width="100"></th>
                        <th><?php echo $arr[$i]->price ?></th>

                        <th><?php echo $arr[$i]->qty ?></th>
                        <th><?php echo $arr[$i]->qty * $arr[$i]->price ?></th>

                    </tr>

                    <?php
                }
                ?>
                <tr>
                    <th colspan="5" class="text-right">Grand Total</th>
                    <th><?php echo $total ?></th>
                </tr>

                <tr>
                    <td colspan="5"></td>
                    <input type="hidden" name="item_name_1" value="Shopping Bill Payment"/>
                    <input name="amount_1" type="hidden" value="<?php echo $total ?>" id="sp1"/>
                    <td><input type="submit" class="btn btn-primary" value="Pay"></td>
                </tr>
                <input type="hidden" name="return" value="http://localhost/online%20shopping/success.php"/>
                <input type="hidden" name="cancel_return" value="http://localhost/online%20shopping/success.php"/>
                <input type="hidden" name="notify_url" value="http://localhost/online%20shopping/success.php"/>
            </table>
        </form>


        <?php
        $_SESSION['total'] = $total;

        ?>
    </div>

<?php
include "footer.html";
?>
</body>

</html>

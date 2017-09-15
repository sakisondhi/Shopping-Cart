<?php
include "cart.php";
session_start();
include("connection.php");
$quantity=1;
$pid=$_REQUEST['productid'];
$query="select * from products where productid='".$pid."'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$pname=$row['productname'];
$photo=$row['photo1'];
$price=$row['price'];
$discount=$row['discount'];

if($discount>0)
{
    $price=$price-($price* ($discount/100));
}
$arr=array();
$num=0;
$arr1=array();

if(isset($_SESSION['products']))
{
    $arr=$_SESSION['products'];
    $total=count($arr);

    $ar1 = (array)$_SESSION['products'];
    $count = count($ar1);
    $flag = false;
    foreach ($ar1 as $items) {
        if ($pid == $items->get_pro_id()) {
            $flag = 1;
            $totalqty = $items->get_qty() + $quantity;
            $items->set_qty($totalqty);
            break;
        }
    }
    if ($flag == 1) {



    } else {
        $arr[$total]=new cart($total,$pid,$pname,$photo,$price,$quantity);

    }

}
else
{
    $arr[$num]=new cart($num,$pid,$pname,$photo,$price,$quantity);
}
print_r($arr);
$_SESSION['products']=$arr;
header("location:show_cart.php");
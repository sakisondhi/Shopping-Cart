<?php
include "cart.php";
include "connection.php";
session_start();
$id=$_REQUEST['q'];
$arr=array();
$arr=$_SESSION['products'];
$arr1=array();
$num=0;
for($i=0;$i<count($arr);$i++)
{
   if($id !=$arr[$i]->productid)
   {
       $arr1[$num]=$arr[$i];
       $num++;
   }
}
$_SESSION['products']=$arr1;
header("Location:show_cart.php");



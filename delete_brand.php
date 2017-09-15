<?php
$brandid=$_REQUEST["bname"];
include "connection.php";
include "adminheader.php";
$s="delete from brands                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    where brandid ='$brandid'";
if (mysqli_query($con,$s));
{
    header("location:view_brand.php");
}
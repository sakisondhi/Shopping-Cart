<?php
$cid=$_REQUEST["tbcid"];
$name=$_REQUEST["tbname"];
$email=$_REQUEST["tbemail"];
$mobileno=$_REQUEST["tbmobile"];
$query=$_REQUEST["tbquery"];
include "connection.php";
$query1="select * from contacts";
$result=mysqli_query($con,$query1);
$insertquery = "insert into contacts value(NULL ,'$name','$email','$mobileno','$query','unread')";
if (mysqli_query($con, $insertquery))
{
    echo "contact added";
}
?>

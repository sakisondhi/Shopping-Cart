<?php
$brandname=$_REQUEST["tbbname"];
$brandlogo=$_REQUEST["logo"];
$bid=$_REQUEST["bname"];


include "connection.php";

$insertquery="update  brands set brandname='$brandname',brandlogo='$brandlogo' where brandid=$bid";
if (mysqli_query($con,$insertquery))
{
    echo "details updated";
}

?>
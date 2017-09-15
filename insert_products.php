<?php
$productname=$_REQUEST["tbpname"];
$price=$_REQUEST["tbprice"];
$discount=$_REQUEST["tbdiscount"];
$subcatid=$_REQUEST["tbsubcategory"];
$categoryid=$_REQUEST["tbcategory"];
$description=$_REQUEST["tbdesc"];




$temp1=$_FILES["photo1"]["tmp_name"];
$name1=$_FILES["photo1"]["name"];
$logo1="productphoto/$name1";
move_uploaded_file($temp1,$logo1);



$temp2=$_FILES["photo2"]["tmp_name"];
$name2=$_FILES["photo2"]["name"];
$logo2="productphoto/$name2";
move_uploaded_file($temp2,$logo2);



$temp3=$_FILES["photo3"]["tmp_name"];
$name3=$_FILES["photo3"]["name"];
$logo3="productphoto/$name3";
move_uploaded_file($temp3,$logo3);


$temp4=$_FILES["photo4"]["tmp_name"];
$name4=$_FILES["photo4"]["name"];
$logo4="productphoto/$name4";
move_uploaded_file($temp4,$logo4);

$brandid=$_REQUEST["tbbname"];

include "connection.php";

$insertquery = "insert into products value( null,'$productname','$logo1','$logo2','$logo3','$logo4','$price',
'$discount','$description',  '$brandid','$subcatid','$categoryid')";
echo $insertquery;

if (mysqli_query($con, $insertquery))
{
    echo "product added";
    header("location:add_product.php?msg=product added");

}
?>
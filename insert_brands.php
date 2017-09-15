<?php

$brandname = $_REQUEST["tbbname"];
$temp = $_FILES["logo"]["tmp_name"];
$name = $_FILES["logo"]["name"];
$logo = "brand_photos/$name";
move_uploaded_file($temp, $logo);

include "connection.php";
$query = "select * from brands";
$flag = 0;
$result = mysqli_query($con, $query);
$insertquery = "insert into brands value(null,'$brandname','$logo')";
if (mysqli_query($con, $insertquery)) {
    echo "brands added";
    header("location:add_brands.php?msg=Brands added");
}
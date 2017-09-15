<?php
include "adminheader.php";
$uname=$_SESSION["username"];
$currentpassword=$_REQUEST["tbcurrentpass"];
$newpassword=$_REQUEST["tbnewpass"];
$confirmpassword=$_REQUEST["tbcpass"];
if($newpassword!=$confirmpassword)
{
    header("location:adminchangepassword.php?msg=new password and confirm password do not match");
}
else {
    include "connection.php";
    $flag == 0;
    $select = "select * from admin";
    $result = mysqli_query($con, $select);
    while ($row = mysqli_fetch_array($result)) {
        if ($row[0] == $uname && $row[1] == $currentpassword) {
            $flag = 1;
            break;
        }
    }
    if ($flag == 1) {
        $update = "update admin set password='$newpassword' where username='$uname'";
        if (mysqli_query($con, $update)) {
            header("location:adminchangepassword.php?msg=password update");
        }
    } else {
        header("location:adminchangepassword.php?msg=invalid old password");
    }
}


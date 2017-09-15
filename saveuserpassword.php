<?php
include "userheader.php.php";
$email=$_SESSION["tbemail"];
$currentpassword=$_REQUEST["tbcurrentpass"];
$newpassword=$_REQUEST["tbnewpass"];
$confirmpassword=$_REQUEST["tbcpass"];
if($newpassword!=$confirmpassword)
{
    header("location:userchangepassword.php?msg=new password and confirm password do not match");
}
else {
    include "connection.php";
    $flag == 0;
    $select = "select * from signup";
    $result = mysqli_query($con, $select);
    while ($row = mysqli_fetch_array($result)) {
        if ($row[0] == $email && $row[1] == $currentpassword) {
            $flag = 1;
            break;
        }
    }
    if ($flag == 1) {
        $update = "update signup set password='$newpassword' where email='$tbemail'";
        if (mysqli_query($con, $update)) {
            header("location:userchangepassword.php?msg=password update");
        }
    } else {
        header("location:userchangepassword.php?msg=invalid old password");
    }
}



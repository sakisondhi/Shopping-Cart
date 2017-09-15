<?php
$uname=$_REQUEST["tbuname"];
$password=$_REQUEST["tbpass"];
$confirmpassword=$_REQUEST["tbcpass"];
$email=$_REQUEST["tbemail"];
$gender=$_REQUEST["gender"];
$usertype=$_REQUEST["tbusertype"];
$fullname=$_REQUEST["tbfullname"];
$query="select * from admin";

    include "connection.php";
    $flag=0;
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)) {
        if ($row[0] == $uname) {
            $flag = 1;
            break;

        }}

        if ($flag == 1)
        {
            echo "$uname is already exist";
        }
        else if ($password != $confirmpassword)
        {


            echo "password and confirm password doesn't match";

        } else
            {

            $insertquery = "insert into admin value('$uname','$password','$email','$fullname','$gender','$usertype')";
        }
        if (mysqli_query($con, $insertquery))
        {
            echo "admin added";
        }
        ?>

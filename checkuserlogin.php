<?php
$email=$_REQUEST["tbemail"];
$password=$_REQUEST["tbpass"];

$query="select * from signup";
include "connection.php";
$flag=0;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
    if($row[0]==$email && $row[1]==$password)
    {
        $flag = 1;
        break;
    }
}
if($flag==1) {

    session_start();
    $_SESSION["email"]=$email;
    header("location:userhome.php");

}
else
{

    header("location:user_login.php?msg=Invalid email Or Password");
}
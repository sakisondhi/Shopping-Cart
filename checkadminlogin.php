<?php
$uname=$_REQUEST["tbuname"];
$password=$_REQUEST["tbpass"];

$query="select * from admin";
include "connection.php";
$flag=0;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
    if($row[0]==$uname && $row[1]==$password)
    {
        $flag = 1;
        break;
    }
}
if($flag==1) {

    session_start();
    $_SESSION["username"]=$uname;
    header("location:adminhome.php");

}
else
{

    header("location:admin_login.php?msg=Invalid Username Or Password");
}
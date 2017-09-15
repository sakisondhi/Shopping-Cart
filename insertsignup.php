<?php
$email=$_REQUEST["tbemail"];
$password=$_REQUEST["tbpass"];
$confirmpassword=$_REQUEST["tbcpass"];
$name=$_REQUEST["tbname"];
$mobileno=$_REQUEST["tbmobile"];
$shippingaddress=$_REQUEST["tbaddress"];

$query="select * from signup";

include "connection.php";
$flag=0;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)) {
    if ($row[0] == $email) {
        $flag = 1;
        break;

    }}

if ($flag == 1)
{
    echo "$email is already exist";
}
else if ($password != $confirmpassword)
{


    echo "password and confirm password doesn't match";

} else
{

    $insertquery = "insert into signup value('$email','$password', '$confirmpassword','$name','$mobileno','$shippingaddress')";
}
if (mysqli_query($con, $insertquery))
{
    echo "user added";
}
?>


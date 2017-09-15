<!doctype html>
<html lang="en">
<head><?php
include "headerfiles.html";   
    ?>
    
</head>
<body>
<?php include "userheader.php" ?>
<div class="new-products">
    <div class="container">
        <h3>Manage Pending Orders</h3>

        <table class="table table-responsive table-bordered">
            <th>Order Id</th>
            <th>Date of Order</th>
            <th>Email</th>
            <th>Total Amount</th>
            <th>Status</th>
            <?php
$email=$_SESSION['email'];
            include "connection.php";
            $sqlquery="select * from `order` where email='$email' order by orderid desc";
            $result=mysqli_query($con,$sqlquery);
            while($row=mysqli_fetch_array($result))
            {
                echo"<tr>";
                echo"<td>$row[0]</td>";
                echo"<td>$row[1]</td>";
                echo"<td>$row[2]</td>";
                echo"<td>$row[3]</td>";

                if($row[4]==0)
                {
                    echo "<td>pending</td>";
                }
                else
                {
                    echo "<td>Dispatched</td>";
                }

                echo"<td><a href='viewdetails.php?q=$row[0]'>View Details</a></td>";

                echo"</tr>";
            }

            ?>
        </table>
    </div>
</div>
<?php include 'footer.html'?>
</body>
</html>
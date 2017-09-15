<!doctype html>
<html lang="en">
<head><?php
    include "headerfiles.html";
    ?>

</head>
<body>
<?php include "adminheader.php" ?>
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

            include "connection.php";
            $sqlquery="select * from `order` where status=0 Order by orderid desc";
            $result=mysqli_query($con,$sqlquery);
            while($row=mysqli_fetch_array($result))
            {
                echo"<tr>";
                echo"<td>$row[0]</td>";
                echo"<td>$row[1]</td>";
                echo"<td>$row[2]</td>";
                echo"<td>$row[3]</td>";

                    echo "<td>pending</td>";

                echo"<td><a href='viewdetails.php?q=$row[0]'>View Details</a></td>";
                echo"<td><form action='orderactionpage.php' method='post'>
<input type='hidden' value='$row[0]' name='oid'>
<input type='hidden' value='1' name='tbstatus'>
<input type='hidden'value='$row[2]' name='tbemail'>
<input type='submit' value='Dispatch Now !!' class='btn btn-success'>

</form> </td>";

                echo"</tr>";
            }

            ?>
        </table>
        <h3>Manage Dispatched Orders</h3>
        <table class="table table-responsive table-bordered">
            <th>Order Id</th>
            <th>Date of Order</th>
            <th>Email</th>
            <th>Total Amount</th>
            <th>Status</th>
            <?php

            include "connection.php";
            $sqlquery="select * from `order` where status=1 Order by orderid desc";

            $result=mysqli_query($con,$sqlquery);
            while($row=mysqli_fetch_array($result))
            {
                echo"<tr>";
                echo"<td>$row[0]</td>";
                echo"<td>$row[1]</td>";
                echo"<td>$row[2]</td>";
                echo"<td>$row[3]</td>";

                echo "<td>Dispatched</td>";

                echo"<td><a href='viewdetails.php?q=$row[0]'>View Details</a></td>";
                echo"<td><form action='orderactionpage.php' method='post'>
<input type='hidden' value='$row[0]' name='oid'>
<input type='hidden' value='2' name='tbstatus'>
<input type='hidden'value='$row[2]' name='tbemail'>
<input type='submit' value='Delivered!!' class='btn btn-success'>

</form> </td>";

                echo"</tr>";
            }

            ?>
        </table>
    </div>
</div>
<?php include 'footer.html'?>
</body>
</html>
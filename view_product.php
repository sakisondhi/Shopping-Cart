<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "headerfiles.html";
    ?>
</head>
<body>
<?php
include "adminheader.php";
?>
<div class="container-fluid">
    <h1 class="text-center">View Products</h1>
    <table class="table table-bordered table-responsive table-hover">
        <th>product id</th>
        <th>product name</th>
        <th> photo1</th>
        <th>photo2</th>
        <th>photo3</th>
        <th>photo4</th>
        <th>price</th>
        <th>discount</th>
        <th>description</th>
        <th>select category</th>
        <th>select subcategory</th>
        <th> select brand</th>
        <th colspan='2'>Controls</th>
        <?php
        include "connection.php";
        $sqlselect="select * from products";
        $result=mysqli_query($con, $sqlselect);
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td> $row[0]</td>";
            echo "<td> $row[1]</td>";
            echo "<td><img src='$row[2]'height=50> </td>";
            echo "<td><img src='$row[3]'height=50></td>";
            echo "<td><img src='$row[4]'height=50></td>";
            echo "<td> <img src='$row[5]'height=50></td>";
            echo "<td>  $row[6]</td>";
            echo "<td> $row[7]</td>";
            echo "<td> $row[8]</td>";
            echo "<td> $row[9]</td>";
            echo "<td> $row[10]</td>";
            echo "<td> $row[11]</td>";

            echo"<td><a href='edit_product.php?pname=$row[0]'>Edit</a></td>";
            echo"<td><a href='delete_product.php?pname=$row[0]'>Delete</a></td>";

            echo "</tr>";
        }
        ?>

    </table>
</div>

<?php
include "footer.html";
?>
</body>
</html>
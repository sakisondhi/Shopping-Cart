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
    <h1 class="text-center">View Subategory</h1>
    <table class="table table-bordered table-responsive table-hover">
        <th>subcategory id</th>
        <th> Subcategory Name</th>
        <th>Category id</th>
        <?php
        include "connection.php";
        $sqlselect="select * from subcategory";
        $result=mysqli_query($con, $sqlselect);
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td> $row[0]</td>";
            echo "<td> $row[1]</td>";
            echo "<td> $row[2]</td>";

            echo"<td><a href='edit_subcategory.php?subname=$row[0]'>Edit</a></td>";
            echo"<td><a href='delete_subcategory.php?subname=$row[0]'>Delete</a></td>";

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
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
<div class="container"><div class="col-md-6 col-md-offset-3">
        <form action="insert_subcategory.php" method="post">
            <div class="form-group">
                <label>select category </label>
               <select name="tbcategory" required class="form-control">
                   <option value="">Select Category</option>
                   <?php
                   include "connection.php";
                   $select= "select * from category";
                   $result=mysqli_query($con,$select);
                   while ($row=mysqli_fetch_array($result)) {
                       echo "<option value='$row[0]'>$row[1]</option>";
                   }
                   ?>
               </select>
            </div>
            <div class="form-group">
                <label>subcategory name</label>
                <input type="text" name="subcategory" id="subcategory" class="form-control" data-rule-required="true" data-rule-msg="This field is required">
                <div class="form-group">
                    <input type="submit" value="Add Subcategory" class=" btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include "footer.html";
?>
</body>
</html>

<?php
$subcategoryid= $_REQUEST["subname"];
include "connection.php";
include "adminheader.php";
$s = "select * from subcategory where subcategoryid=$subcategoryid";
$result = mysqli_query($con, $s);
$row = mysqli_fetch_array($result);
?>
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
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <form action="save_subcategory.php" method="post">
            <div class="form-group">
                <label>select category </label>
                <select name="tbcategory" required  value="<?php echo $row[1]; ?>" class="form-control">
                    <option value="">Select Category</option>
                    <?php
                    include "connection.php";
                    $select= "select * from subcategory";
                    $result=mysqli_query($con,$select);
                    while ($row=mysqli_fetch_array($result)) {
                        echo "<option value='$row[0]'>$row[1]</option>";
                    }
                    ?>
                </select>
                <input type="hidden" name="subid" id="subid" class="form-control">
            </div>
            <div class="form-group">
                <label>subcategory name</label>
                <input type="text" name="subcategory" value="<?php echo $row[2]; ?>"id="subcategory" class="form-control" data-rule-required="true" data-rule-msg="This field is required">
                <div class="form-group">
                    <input type="submit" value="Edit Subcategory" class=" btn btn-primary">
            </div>
        </form>
    </div>
</div>
<?php
include "footer.html";
?>
</body>
</html>
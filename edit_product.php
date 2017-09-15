<?php
$productid = $_REQUEST["pname"];
include "connection.php";
include "adminheader.php";
$s = "select * from products where `productid`=$productid";
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
    <div class="col-lg-8">
        <div class="col-md-6 col-md-offset-3">
            <form action="save_product.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>product name </label>
                    <input type="hidden" name="pname" id="" class="form-control" value="<?php echo $row[0]; ?>">
                    <input type="text" name="productname" id="" class="form-control" value="<?php echo $row[1]; ?>">
                </div>
                <div class="form-group">
                    <label>photo1</label>
                    <img src="<?php echo $row[2]; ?>" height="50">
                    <input type="file" name="photo1" id="photo1" class="form-control"
                           data-rule-required="true" data-rule-msg="This field is required">
                </div>
                <div class="form-group">
                    <label>photo2</label>
                    <img src="<?php echo $row[3]; ?>" height="50">
                    <input type="file" name="photo2" id="photo2" class="form-control"
                           data-rule-required="true" data-rule-msg="This field is required">
                </div>
                <div class="form-group">
                    <label>photo3</label>
                    <img src="<?php echo $row[4]; ?>" height="50">
                    <input type="file" name="photo3" id="photo3" class="form-control"
                           data-rule-required="true" data-rule-msg="This field is required">
                </div>
                <div class="form-group">
                    <label>photo4</label>
                    <img src="<?php echo $row[5]; ?>" height="50">
                    <input type="file" name="photo4" id="photo4" class="form-control"
                           data-rule-required="true" data-rule-msg="This field is required">
                </div>
                <div class="form-group">
                    <label>price</label>
                    <input type="text" name="tbprice" value="<?php echo $row[6]; ?>" id="tbprice" class="form-control"
                           data-rule-required="true" data-rule-msg="This field is required">
                </div>
                <div class="form-group">
                    <label>discount</label>
                    <input type="text" name="tbdiscount" value="<?php echo $row[7]; ?>" id="tbdiscount"
                           class="form-control" data-rule-required="true" data-rule-msg="This field is required">
                </div>
                <div class="form-group">
                    <label>description</label>
                    <input type="text" name="tbdesc" value="<?php echo $row[8]; ?>" id="tbdesc" class="form-control"
                           data-rule-required="true" data-rule-msg="This field is required">
                </div>
                <div class="form-group">
                    <label>select category </label>
                    <select name="tbcname" required value="<?php echo $row[9]; ?>" class="form-control">
                        <option value="">Select Category</option>
                        <?php
                        include "connection.php";
                        $select = "select * from category";
                        $result1 = mysqli_query($con, $select);
                        while ($row1 = mysqli_fetch_array($result1)) {
                            echo "<option value='$row1[0]'>$row1[1]</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>select subcategory </label>
                    <select name="subcategory" required value="<?php echo $row[9]; ?>" class="form-control">
                        <option value="">Select Category</option>
                        <?php
                        include "connection.php";
                        $select2 = "select * from subcategory";
                        $result2 = mysqli_query($con, $select2);
                        while ($row2 = mysqli_fetch_array($result2)) {
                            echo "<option value='$row2[0]'>$row2[1]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>select brand </label>
                    <select name="tbbname" required value="<?php echo $row[10]; ?>" class="form-control">
                        <option value="">Select Category</option>
                        <?php
                        include "connection.php";
                        $select3 = "select * from brands";
                        $result3 = mysqli_query($con, $select3);
                        while ($row3 = mysqli_fetch_array($result3)) {
                            echo "<option value='$row3[0]'>$row3[1]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="edit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>


    </div>
</div>
<?php
include "footer.html";
?>
</body>
</html>
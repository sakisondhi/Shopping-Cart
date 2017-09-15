<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/myscript.js"></script>
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
        <form action="insert_products.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>product name</label>
                <input type="text" name="tbpname" id="tbpname" class="form-control" data-rule-required="true"
                       data-rule-msg="This field is required">
                <div class="form-group">
                    <div class="form-group">
                        <label>photo1</label>
                        <input type="file" name="photo1" required>
                    </div>
                    <div class="form-group">
                        <label>photo2</label>
                        <input type="file" name="photo2" required>
                    </div>
                    <div class="form-group">
                        <label>photo3</label>
                        <input type="file" name="photo3" required>
                    </div>
                    <div class="form-group">
                        <label>photo4</label>
                        <input type="file" name="photo4" required>
                    </div>
                    <label>Price</label>
                    <input type="text" name="tbprice" id="tbprice" class="form-control">
                </div>
                <div class="form-group">
                    <label>discount</label>
                    <input type="text" name="tbdiscount" id="tbdiscount" class="form-control">
                </div>
                <div class="form-group">
                    <label>select category</label>
                    <select name="tbcategory" required class="form-control" data-rule-required="true"
                            data-rule-msg="This field is required" onchange="getsub(this.value)">
                        <option value="select option">select option</option>
                        <?php
                        include "connection.php";
                        $s = "SELECT * FROM `category`";
                        $res = mysqli_query($con, $s);

                        while ($row = mysqli_fetch_array($res)) {

                            echo "<option value='$row[0]' >$row[1]</option>";
                        }
                        ?>
                    </select>
                </div>
                <label>select subcategory</label>
                <select name="tbsubcategory" id="tbsubcategory" required class="form-control" data-rule-required="true"
                        data-rule-msg="This field is required">
                    <option value="select option">select option</option>

                </select>
            </div>
            <div class="form-group">
                <label>select brand</label>
                <select name="tbbname" required class="form-control" data-rule-required="true"
                        data-rule-msg="This field is required">
                    <option value="select option">select option</option>
                    <?php
                    include "connection.php";
                    $s = "select * from brands";
                    $res = mysqli_query($con, $s);

                    while ($row = mysqli_fetch_array($res)) {

                        echo "<option value='$row[0]' >$row[1]</option>";
                    }
                    ?>
                </select>

            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="tbdesc" required class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Add Product" class=" btn btn-primary">
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

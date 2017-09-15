<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
include "headerfiles.html";
?>
<body style="background-color: honeydew">
<?php
include "adminheader.php";
?>
<div class="container"><div class="col-md-6 col-md-offset-3">
        <form action="insert_category.php" method="post">
            <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="tbcname" id="tbcname"  class="form-control " data-rule-required="true" data-rule-msg="This field is required">

            </div>
            <div class="form-group">
                <label>Select Super Category</label>
                <select name="tbscategory" required class="form-control" data-rule-required="true" data-rule-msg="This field is required">
                <option value="select option">select option</option>
                <option value="men">Men</option>
                <option value="women">Women</option>
                <option value="kids">Kids</option>
                <input type="submit" value="Add Category" class=" btn btn-primary">
                </select>
            </div>
        </form>
    </div>
</div>
<?php
include "footer.html";
?>
</body>
</html>

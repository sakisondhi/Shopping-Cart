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
<body style="background-color: linen">
<?php
include "adminheader.php";
?>
<div class="container"><div class="col-md-6 col-md-offset-3">
        <form action="insert_brands.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Brand Name</label>
                <input type="text" name="tbbname" id="tbbname"  class="form-control " data-rule-required="true" data-rule-msg="This field is required">

            </div>
            <div class="form-group">
                <label>Brand Logo</label>
                <input type="file" name="logo" required >
            </div>
            <div class="form-group">
                <input type="submit" value="add brand" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<?php
include "footer.html";
?>
</body>
</html>

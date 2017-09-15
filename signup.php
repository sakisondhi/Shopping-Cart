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
<body >
<?php
include "public_header.php";
?>
<div class="container"><div class="col-md-6 col-md-offset-3">
        <form action="insertsignup.php" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="tbemail" required class="form-control" data-rule-required="true" data-rule-msg="This field is required">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="tbpass" required class="form-control " data-rule-required="true" data-rule-msg="This field is required">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="tbcpass" required class="form-control" data-rule-required="true" data-rule-msg="This field is required">
            </div>

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="tbname" required class="form-control" data-rule-required="true" data-rule-msg="This field is required">
            </div>
            <div class="form-group">
                <label>Mobile no.</label>
                <input type="number" name="tbmobile" required class="form-control" data-rule-required="true" data-rule-msg="This field is required">
            </div>
            <div class="form-group">
                <label>Shipping Address no.</label>
                <input type="textarea" name="tbaddress" required class="form-control" data-rule-required="true" data-rule-msg="This field is required">
            </div>
            <div class="form-group">
                <input type="submit" value="signup" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<?php
include "footer.html";
?>
</body>
</html>
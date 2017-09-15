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
        <form action="saveuserpassword.php" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="tbemail" required class="form-control" value="<?php echo $_SESSION["email"];?>"  readonly>
            </div>
            <div class="form-group">
                <label>Current Password</label>
                <input type="password" name="tbcurrentpass" required class="form-control">
            </div>
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="tbnewpass" required class="form-control">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="tbcpass" required class="form-control">
            </div>
            <div class="form-group">
                <?php

                if(isset($_REQUEST["msg"]))
                {
                    echo $_REQUEST["msg"];
                }
                ?>
                <input type="submit" value="change password" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<?php
include "footer.html";
?>

</body>
</html>
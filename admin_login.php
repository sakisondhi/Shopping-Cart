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
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <form action="checkadminlogin.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="tbuname" required class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="tbpass" required class="form-control">
            </div>
            <div class="form-group">
                <?php
                if (isset($_SESSION["msg"])) {
                    echo $_SESSION["msg"];
                }
                ?>
                <input type="submit" value="Login" class="btn btn-primary">
            </div>
    </div>
    </form>
</div>
<?php
include "footer.html";
?>

</body>
</html>
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
<body style="background-color: lightgoldenrodyellow" >
<?php
include "adminheader.php";
?>
<div class="container"><div class="col-md-6 col-md-offset-3">
        <form action="insertadmin.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="tbuname"  class="form-control " data-rule-required="true" data-rule-msg="This field is required">

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
                <label>Email</label>
                <input type="email" name="tbemail" required class="form-control" data-rule-required="true" data-rule-msg="This field is required">
            </div>
            <div class="form-group">
                <label>Fullname</label>
                <input type="text" name="tbfullname" required class="form-control" data-rule-required="true" data-rule-msg="This field is required">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="radio" name="gender" value="Male" checked>Male
                <input type="radio" name="gender" value="Female">Female
            </div>
            <div class="form-group">

                <label>Usertype</label>
                <select name="tbusertype" required class="form-control" data-rule-required="true" data-rule-msg="This field is required">
                <option value="admin">Admin</option>
                <option value="power user">Power User</option>
                </select>
            </div>
                <div class="form-group">
                <input type="submit" value="add admin" class=" btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include "footer.html";
?>

</body>
</html
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "headerfiles.html";
    ?>
</head>
<body>
<?php
include "public_header.php";
?>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <form action="insertcontact.php" method="post">
            <div class="form-group">
                <input type="hidden" name="tbcid" id="cid" class="form-control " >
            </div>
            <div class="form-group">
            <label>Name</label>
                <input type="text" name="tbname"  id="tbname" class="form-control " data-rule-required="true" data-rule-msg="This field is required">
             </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="tbemail" id="tbemail" class="form-control " data-rule-required="true" data-rule-msg="This field is required">
            </div>
            <div class="form-group">
                <label>Mobile no.</label>
                <input type="number" name="tbmobile" id="tbmobile" class="form-control " data-rule-required="true" data-rule-msg="This field is required">
            </div>

            <div class="form-group">
                <label> Query</label>
                <input type="textarea" name="tbquery" id="tbquery"  class="form-control " data-rule-required="true" data-rule-msg="This field is required">
            </div>

            <div class="form-group">
                <input type="submit" value="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<?php
include "footer.html";
?>
</body>
</html>
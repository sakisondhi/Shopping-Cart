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
include "userheader.php";

?>
<div class="container">

    <h1 class="text-center"> Welcome <?php echo $_SESSION["email"];?> to user panel</h1>
    <?php
    ?>
</div>
<?php
include "footer.html";
?>
</body>
</html>
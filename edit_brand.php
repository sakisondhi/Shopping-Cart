<?php
$brandid = $_REQUEST["bname"];
include "connection.php";
include "adminheader.php";
$s = "select * from brands where brandid=$brandid";
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
    <div class="col-md-6 col-md-offset-3">
        <form action="save_brand.php" method="post">
            <div class="form-group">
                <label>Brand Name </label>
                <input type="text" name="tbbname"  value="<?php echo $row[1]; ?>" required class="form-control">
                <input type="hidden" name="bname" value="<?php echo $row[0]; ?>" >
            </div>
            <div class="form-group">

                <label>Brand Logo</label>
                <select name="logo" required class="form-control">

                    <option value="logo"  <img src="<?php if ($row[2] == "select option") {echo "selected";} ?>">>Select option</option>
                    <option value="logo" <img src="<?php if ($row[2] == "addidas") {echo "selected";} ?>">>Addidas</option>
                    <option value="logo" <img src="<?php if ($row[2] == "benetton"){echo "selected";} ?>">>Benetton</option>
                 <option value="logo"  <img src="<?php if ($row[2] == "puma"){echo "selected";} ?>">>Puma</option>
                 <option value="logo" <img src="<?php if ($row[2] == "nike"){echo "selected";} ?>">>Nike</option>

                </select>
                <input type="submit" value="edit">
            </div>
        </form>
    </div>
</div>
<?php
include "footer.html";
?>
</body>
</html>
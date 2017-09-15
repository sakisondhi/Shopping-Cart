<?php
$categoryid = $_REQUEST["cname"];
include "connection.php";
include "adminheader.php";
$s = "select * from category where `category id`=$categoryid";
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
        <form action="save_category.php" method="post">
            <div class="form-group">
                <label>Category Name </label>
                <input type="text" name="tbcname"  value="<?php echo $row[1]; ?>" required class="form-control">
                <input type="hidden" name="cid" value="<?php echo $row[0]; ?>" >
            </div>
            <div class="form-group">

                <label>Selct Super Category</label>
                <select name="tbscategory" required class="form-control">
                    <option value="select option" <?php if ($row[2] == "select option") {echo "selected";} ?>>Select option
                    </option>
                    <option value="men" <?php if ($row[2] == "men") {echo "selected";} ?>>Men
                    </option>
                    <option value="women" <?php if ($row[2] == "women") {echo "selected";} ?>>Women
                    </option>
                    <option value="kids" <?php if ($row[2] == "kids") {echo "selected";} ?>>Kids
                    </option>
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
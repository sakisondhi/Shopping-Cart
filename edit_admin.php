<?php
$uname = $_REQUEST["username"];
include "connection.php";
include "adminheader.php";
$s = "select * from admin where username='$uname'";
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
        <form action="save_admin.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="tbuname" readonly value="<?php echo $row[0]; ?>" required class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="tbemail" value="<?php echo $row[2]; ?>" required class="form-control">
            </div>
            <div class="form-group">
                <label>Fullname</label>
                <input type="text" name="tbfullname" value="<?php echo $row[3]; ?>" required class="form-control">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="radio" name="gender" value="Male" <?php if ($row[4] = "male") {echo "checked";} ?>>Male

                <input type="radio" name="gender" value="Female" <?php if ($row[4] = "female") {echo "checked";} ?>>Female
            </div>
            <div class="form-group">
                <label>Usertype</label>
                <select name="tbusertype" required class="form-control">
                    <option value="admin" <?php if ($row[5] == "admin") {echo "selected";} ?>>Admin
                    </option>
                    <option value="power user" <?php if ($row[5] == "power user") {echo "selected";} ?>>Power User
                    </option>
                </select>
                <input type="submit" value="edit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

<?php
include "headerfiles.html";
?>
</body>
</html>
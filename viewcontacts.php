<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="js/jquery.min.js"></script>
    <?php
    include "headerfiles.html";
    ?>
    <script>
        function showmodal(obj, obj1, obj2) {


            document.getElementById("hfid").value = obj;
            document.getElementById("tbemail").value = obj1;
            document.getElementById("hfname").value = obj2;


        }

    </script>
</head>
<body>


<?php include "adminheader.php";

?>

<?php

$s1 = "select * from contacts where status='unread'";

include "connection.php";

$result = mysqli_query($con, $s1);


if (mysqli_num_rows($result) > 0) {
    echo "<h1 class='text-center'> Unread Messages</h1>";

    $s = '<table class="table table-bordered">';
    $s = $s . "<tr>";
    $s = $s . "<th>contac id</th>";
    $s = $s . "<th>name</th>";

    $s = $s . "<th>Email</th>";

    $s = $s . "<th>phoneno</th>";

    $s = $s . "<th>message</th>";

    $s = $s . "<th>Reply</th>";
    $s = $s . "</tr>";
    $count = 0;

    while ($row = mysqli_fetch_array($result)) {
        $s = $s . "<tr>";
        $s = $s . "<td>" . ++$count . "</td>";
        $s = $s . "<td>" . $row[1] . "</td>";
        $s = $s . "<td>" . $row[2] . "</td>";
        $s = $s . "<td>" . $row[3] . "</td>";
        $s = $s . "<td>" . $row[4] . "</td>";

        $s = $s . "<td><a href='#' data-toggle='modal' data-target='#myModal'  onclick='showmodal(\"" . $row[0] . "\" , \"" . $row[2] . "\" , \"" . $row[1] . "\")' ><img src=\"images/reply.png\" width=\"30\" height=\"30\"></a></td>";
//    $s=$s.'<td><a href="deleteadmin.php?username='.$row1[0].'"><img src="images/reply.png" width="30" height="30"><a></td>';

        $s = $s . "</tr>";


    }

    $s = $s . "</table>";


    echo $s;
} else {

    echo "<h2 class='text-center text-danger'>No Unread Messsages</h2>";
}

?>


<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Admin Reply</h4>
            </div>
            <div class="modal-body">
                <form action="sendemail.php" method="post">
                    <table class="table">
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                <input type="email" id="tbemail" name="tbemail" readonly class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Messsage
                            </td>
                            <td>
                                <textarea name="tbmsg" id="tbmsg" class="form-control"></textarea>

                                <input type="hidden" name="hfid" id="hfid">
                                <input type="hidden" name="hfname" id="hfname">
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>
                                <input type="submit" class="btn btn-primary btn-block" value="Reply">

                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<br><br><br><br><br><br><br><br><br>
<?php

include "footer.html";
?>


</body>
</html>
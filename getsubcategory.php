<select name="tbsubcategory" id="tbsubcategory" required class="form-control" data-rule-required="true" data-rule-msg="This field is required" >
    <option value="select option">select option</option>
    <?php
    include "connection.php";
    $cid=$_REQUEST["cid"];
    $s="SELECT * FROM `subcategory` WHERE `category id`=$cid";
    $res=mysqli_query($con,$s);

    while ($row=mysqli_fetch_array($res))
    {

        echo "<option value='$row[0]' >$row[1]</option>";
    }
    ?>
</select>
<?php
session_start();
$ar1 = array();
$ar2 = array();
$temp = array();
$num = 0;
$a = 0;
$id = $_GET['q'];
if (isset($_SESSION['cart'])) {
    $ar1 = $_SESSION['cart'];
    $count = count($ar1);
    for ($i = 0; $i < $count; $i++) {
        $ar2 = (array)$ar1[$i];
        $srno = $ar2['srno'];
        if ($id != $srno) {
            $temp[$num] = $ar1[$i];
            $num++;
        }
    }
}
$_SESSION['cart'] = $temp;
?>
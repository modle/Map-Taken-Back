<?php
    require_once("db_connect.php");

    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $own=$_REQUEST['own'];
    $weaponType=$_REQUEST['type'];

    $sql=   "UPDATE " . $weaponType . " SET " .
            "own= '" . $own . "' WHERE id = '" . $id . "';";
    echo($sql);
    mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    header('Location: index.php');
?>

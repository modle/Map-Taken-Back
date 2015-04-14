<?php
    $sql = 'SELECT *
            FROM armory';
    $armoryTableResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory table error');
?>
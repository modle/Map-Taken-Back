<?php
    $sql = "SELECT *
            FROM huntingreward hr
            JOIN item i ON hr.itemId=i.itemId
            WHERE monsterId=$monsterId
            ORDER BY id";
    $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; carve table error');
?>
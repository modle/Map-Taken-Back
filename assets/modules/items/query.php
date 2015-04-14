<?php
    if ($itemName){
        $sql = 'SELECT *
                FROM item
                WHERE name like "%' . $itemName . '%"
                AND type not like "Armor"
                AND type not like "Weapon"
                ORDER BY name
                LIMIT 100';
        $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; item table error');
    }
?>
<?php
    $sql = 'SELECT a.* , i.name, i.rare
            FROM armorstats as a
            JOIN item as i on a.itemId=i.itemId
            WHERE i.name like "%' . $armorName . '%"
            AND i.rare BETWEEN ' . $minRaritySelect . ' AND ' . $maxRaritySelect . '
            AND hunterTypeId = ' . $typeFilterId . '
            ORDER by a.armorId, i.rare';

    $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armor table error');
?>
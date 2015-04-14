<?php
    $sql = 'SELECT armorSet
                , hunterTypeId
                , sum(defense) defense
                , sum(maxDefense) maxDefense
                , sum(fireRes) fireRes
                , sum(thunderRes) thunderRes
                , sum(dragonRes) dragonRes
                , sum(waterRes) waterRes
                , sum(iceRes) iceRes
                , sum(slot) slot
                , i.rare
            FROM armorstats AS a
                JOIN item AS i ON a.itemId=i.itemId
            WHERE i.name LIKE "%' . $armorName . '%"
            AND i.name NOT LIKE ""
            AND i.rare BETWEEN ' . $minRaritySelect . ' AND ' . $maxRaritySelect . '
            AND hunterTypeId = ' . $typeFilterId . '
            GROUP BY a.armorSet, a.hunterType, i.rare
            ORDER BY a.armorSet';

    $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armor table error');
?>
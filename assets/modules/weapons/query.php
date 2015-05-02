<?php
    $weaponSearch=str_replace('\'','&#39;',$weaponSearch);

    //if($awaken)
        $sql = 'SELECT *
            FROM weapondata
            WHERE instr(name,"' . $weaponSearch . '")>0
            AND rare BETWEEN ' . $minRaritySelect . ' AND ' . $maxRaritySelect . '
            AND element LIKE \'%' . $elemFilter . '%\'
            AND (' . $createFilter . '=0 OR created=' . $createFilter .')
            AND (' . $finalFilter . '=0 OR final=' . $finalFilter . ')
            AND (0=' . $weaponType . ' OR weapontypeid=' . $weaponType . ')
            ORDER BY weaponId';


    $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; weapon table error');
?>
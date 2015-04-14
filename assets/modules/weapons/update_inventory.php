<?php
    if((isset($_POST['own'.$weaponsRow['weaponId']])) && $_POST['own'.$weaponsRow['weaponId']]==1){
        //add to armory table
        $sql = "INSERT IGNORE INTO armory (weaponId, weaponTypeId, name, created, final, rare)
                VALUES(
                    '$weaponsRow[weaponId]'
                    ,'$weaponsRow[weaponTypeId]'
                    ,'$weaponsRow[name]'
                    ,'$weaponsRow[created]'
                    ,'$weaponsRow[final]'
                    ,'$weaponsRow[rare]'
                    )";
        $armoryInsert = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory error');
    }

    //check armory for weapon id
    //$sql = 'SELECT *
    //        FROM armory
    //        WHERE id=' . $weaponsRow['id'];
    //$armoryResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory error');
    //$armoryRow=mysqli_fetch_array($armoryResult);
?>
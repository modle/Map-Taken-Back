<?php
    if((isset($_POST['wish'.$weaponsRow['id']])) && $_POST['wish'.$weaponsRow['id']]==1){
        //add to wishlist
        $sql = "INSERT IGNORE INTO wishlist (id, weaponTypeId, name, created, final, rare)
                VALUES(
                    '$weaponsRow[id]'
                    ,'$weaponsRow[weaponTypeId]'
                    ,'$weaponsRow[name]'
                    ,'$weaponsRow[created]'
                    ,'$weaponsRow[final]'
                    ,'$weaponsRow[rare]'
                    )";
        $wishlistInsert = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory error');
    }

    //$sql = 'SELECT *
    //        FROM wishlist
    //        WHERE id=' . $weaponsRow['id'];
    //$wishlistResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; wishlist error');
    //$wishlistRow=mysqli_fetch_array($wishlistResult);
?>
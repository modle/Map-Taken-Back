<?php
    if(isset($_POST['wishDelete'])){
        $sql = "DELETE FROM wishlist
                WHERE id=$_POST[wishDelete]";
        $resultWishDelete = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; wish delete error');
    }
?>
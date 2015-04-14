<?php

    if(isset($_POST['postCheck'])) {
        $itemName=$_POST['itemName'];

        if(isset($_POST['sourceLoad'])){
            $sourceLoad=$_POST['sourceLoad'];
        }else{
            $sourceLoad=null;
        }
    } else {
        $itemName=null;
        $sourceLoad=null;
    }
?>
<?php
    //initialization
    $itemName=null;
    $sourceLoad=null;

    if(isset($_SESSION['items'])) {
        $itemName=$_SESSION['items']['itemName'];

        if(isset($_SESSION['items']['sourceLoad'])){
            $sourceLoad=$_SESSION['items']['sourceLoad'];
        }else{
            $sourceLoad=null;
        }
    } 
?>
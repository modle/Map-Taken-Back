<?php
    //initialization
    $itemName=null;
    //$sourceLoad=null;
    $materialSearchId=null;
    $materialName=null;

    if(isset($_SESSION['items']) && !isset($_SESSION['weapons']['materialSearch'])){
        $itemName=$_SESSION['items']['itemName'];

        //if(isset($_SESSION['items']['sourceLoad'])){
        //    $sourceLoad=$_SESSION['items']['sourceLoad'];
        //}
        if(isset($_SESSION['items']['materialSearch'])){
            $materialSearchId=$_SESSION['items']['materialSearch'];
        }
    }

    if(isset($_SESSION['weapons']['materialSearch'])) {
        $materialSearchId=$_SESSION['weapons']['materialSearch'];
        unset($_SESSION['weapons']['materialSearch']);
    }
?>
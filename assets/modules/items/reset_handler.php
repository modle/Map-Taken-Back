<?php
    if(isset($_POST['ResetButton'])){
        unset($_SESSION['items']);
        $itemName=null;
        $sourceLoad=null;
    }
?>
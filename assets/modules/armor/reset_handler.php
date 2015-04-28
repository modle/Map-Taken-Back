<?php
    if(isset($_POST['ResetButton'])){
        //set defaults
        unset($_SESSION['armor']);

        $minRaritySelect=1;
        $maxRaritySelect=10;
        $armorName=null;
        $bladeCheck = "checked";
        $gunCheck = "";
        $bothCheck = "";
        $typeFilterId = "1";
        $skillLoad=null;
    }
?>
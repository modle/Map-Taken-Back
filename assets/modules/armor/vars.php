<?php
    //initialization
    $minRaritySelect=1;
    $maxRaritySelect=10;
    $armorName=null;
    $bladeCheck = "checked";
    $gunCheck = "";
    $bothCheck = "";
    $typeFilterId = "1";
    $skillLoad=null;
    
    if(isset($_SESSION['armor'])) {
        $minRaritySelect=$_SESSION['armor']['minRaritySelect'];
        $maxRaritySelect=$_SESSION['armor']['maxRaritySelect'];
        $armorName=$_SESSION['armor']['armorName'];

        if(isset($_SESSION['armor']['skillLoad'])){
            $skillLoad=$_SESSION['armor']['skillLoad'];
        }else{
            $skillLoad=null;
        }

        $typeFilterId=$_SESSION['armor']['type'];
        switch($typeFilterId) {
            case "0": $bothCheck = "checked"; break;
            case "1": $bladeCheck = "checked"; break;
            case "13": $gunCheck = "checked"; break;
        }

    } 
?>
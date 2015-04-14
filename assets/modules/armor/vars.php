<?php
    $bothCheck = "";
    $bladeCheck = "";
    $gunCheck = "";

    if(isset($_POST['postCheck'])) {
        $minRaritySelect=$_POST['minRaritySelect'];
        $maxRaritySelect=$_POST['maxRaritySelect'];
        $armorName=$_POST['armorName'];

        if(isset($_POST['skillLoad'])){
            $skillLoad=$_POST['skillLoad'];
        }else{
            $skillLoad=null;
        }

        $typeFilterId=$_POST['type'];
        switch($typeFilterId) {
            case "0": $bothCheck = "checked"; break;
            case "1": $bladeCheck = "checked"; break;
            case "13": $gunCheck = "checked"; break;
        }

    } else {
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
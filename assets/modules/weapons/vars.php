<?php
    $allCheck = "";
    $rawCheck = "";
    $firCheck = "";
    $watCheck = "";
    $thuCheck = "";
    $iceCheck = "";
    $draCheck = "";
    $parCheck = "";
    $poiCheck = "";
    $sleCheck = "";
    $blaCheck = "";

    //*****************************************
    //POST VARIABLE CHECK
    //*****************************************

    if(isset($_POST['postCheck'])) {
        //this calls every post

        //weapon path
        if(isset($_POST['weaponPath'])){
            $weaponPath=$_POST['weaponPath'];
        } else {
            $weaponPath=null;
        }

        //weapons
        if($_POST['createShow']==1){ $createCheck='checked'; $createFilter=1;
        } else { $createCheck=''; $createFilter=0;}

        if($_POST['finalShow']==1){ $finalCheck='checked'; $finalFilter=1;
        } else { $finalCheck=''; $finalFilter=0;}

        if($_POST['awakenShow']==1){ $awakenCheck='checked'; $awakenFilter=1;
        } else { $awakenCheck=''; $awakenFilter=0;}


        if(isset($_POST['searchClick'])){
            $weaponSearch=str_replace('\'','&#39;',$_POST['searchClick']);
        } else {$weaponSearch=str_replace('\'','&#39;',$_POST['weaponName']);}

        if(isset($_POST['weaponImage'])) {
            $weaponType=$_POST['weaponImage'];
        } else {$weaponType=$_POST['weaponType'];
        }

        if(isset($_POST['minRaritySelect'])) {
            $minRaritySelect=$_POST['minRaritySelect'];
            $maxRaritySelect=$_POST['maxRaritySelect'];
        } else {
            $minRaritySelect=1;
            $maxRaritySelect=10;
        }

        if(isset($_POST['elementImage'])) {
            $elemFilter=$_POST['elementImage'];
        } else {
            $elemFilter=$_POST['elem'];
        }

        switch($elemFilter) {
            case "%": $allCheck = "checked"; break;
            case "RAW": $rawCheck = "checked"; break;
            case "FIR": $firCheck = "checked"; break;
            case "WAT": $watCheck = "checked"; break;
            case "THU": $thuCheck = "checked"; break;
            case "ICE": $iceCheck = "checked"; break;
            case "DRA": $draCheck = "checked"; break;
            case "PAR": $parCheck = "checked"; break;
            case "POI": $poiCheck = "checked"; break;
            case "SLE": $sleCheck = "checked"; break;
            case "BLA": $blaCheck = "checked"; break;
        }

    } else {
        //this only calls on load, sets defaults

        //armory and wishlist
        $weaponPath=null;

        //weapons
        $createCheck='';
        $createFilter=0;
        $finalCheck='';
        $finalFilter=0;
        $awakenCheck=null;
        $awakenFilter=0;
        $weaponSearch=null;
        $weaponType=1;

        $minRaritySelect=1;
        $maxRaritySelect=10;
        $elemFilter='%';
        $allCheck = "checked";
    }
    //*****************************************
    //END POST VARIABLE CHECK SECTION
    //*****************************************

?>
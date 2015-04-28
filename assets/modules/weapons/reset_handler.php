<?php
    if(isset($_POST['ResetButton'])){
        //set defaults

        unset($_SESSION['weapons']);
        $weaponPath=null;

        $weaponCheck='checked';

        $weaponSearch=null;
        $weaponType=1;

        $createCheck='';
        $createFilter=0;
        $finalCheck='';
        $finalFilter=0;
        $awakenCheck=null;
        $awakenFilter=0;

        $minRaritySelect=1;
        $maxRaritySelect=10;
        $elemFilter='%';
        $allCheck="checked";
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
    }
?>
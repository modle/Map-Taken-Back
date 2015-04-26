<?php
    //initialization
    $monsterId=88;
    $elemsCheck=null;
    $toolsCheck=null;
    $poisonCheck=null;
    $blastCheck=null;
    $elemsFilter=1;
    $toolsFilter=1;
    $poisonFilter=0;
    $blastFilter=0;

    if(isset($_SESSION['monsters'])) {
        $monsterId=$_SESSION['monsters']['monsterDropdown'];
        if($_SESSION['monsters']['elemsShow']==1){ $elemsCheck='checked'; $elemsFilter=1;}
        if($_SESSION['monsters']['toolsShow']==1){ $toolsCheck='checked'; $toolsFilter=1;}
        if($_SESSION['monsters']['poisonShow']==1){ $poisonCheck='checked'; $poisonFilter=1;}
        if($_SESSION['monsters']['blastShow']==1){ $blastCheck='checked'; $blastFilter=1;}
    } 
?>
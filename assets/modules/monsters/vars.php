<?php
    //initialization
    $monsterId=88;

    if(isset($_SESSION['monsters'])) {
        $monsterId=$_SESSION['monsters']['monsterDropdown'];
    } 
?>
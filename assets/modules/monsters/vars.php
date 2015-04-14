<?php
    if(isset($_POST['postCheck'])) {
        $monsterName=$_POST['monsterName'];
        $monsterId=$_POST['monsterDropdown'];
    } else {
        $monsterName=null;
        $monsterId=88;
    }
?>
<?php
    if(isset($_POST['ResetButton'])){
        unset($_SESSION['skills']);
        $skillName=null;
        $armorLoad=null;
        $equipSlotId=0;
    }
?>
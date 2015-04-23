<?php
    //initialization
    $skillName=null;
    $armorLoad=null;
    $equipSlotId=0;

    if(isset($_SESSION['skills'])) {
        $skillName=$_SESSION['skills']['skillName'];

        if(isset($_SESSION['skills']['armorLoad'])){
                $armorLoad=$_SESSION['skills']['armorLoad'];
            }else{
                $armorLoad=null;
            }
        $equipSlotId=$_SESSION['skills']['equipSlot'];
    } 
?>
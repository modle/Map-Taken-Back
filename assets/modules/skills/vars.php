<?php
    if(isset($_POST['postCheck'])) {
        $skillName=$_POST['skillName'];

        if(isset($_POST['armorLoad'])){
                $armorLoad=$_POST['armorLoad'];
            }else{
                $armorLoad=null;
            }

        $equipSlotId=$_POST['equipSlot'];

    } else {
        $skillName=null;
        $armorLoad=null;
        $equipSlotId=0;

    }
?>
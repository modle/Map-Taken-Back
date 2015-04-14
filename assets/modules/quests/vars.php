<?php
    if(isset($_POST['postCheck'])) {
        $rankId=$_POST['rank'];
        $questHubId=$_POST['questHub'];
        $questTypeId=$_POST['questType'];
        $questName=$_POST['questName'];
    } else {
        $rankId=0;
        $questHubId=0;
        $questTypeId=0;
        $questName=null;
    }
?>
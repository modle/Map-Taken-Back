<?php
    if(isset($_POST['postCheck'])) {
        $rankId=$_POST['rank'];
        $questHubId=$_POST['questHub'];
        $questTypeId=$_POST['questType'];
        $questName=$_POST['questName'];
    } else {
        $rankId=2;
        $questHubId=2;
        $questTypeId=2;
        $questName=null;
    }
?>
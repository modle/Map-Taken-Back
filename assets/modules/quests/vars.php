<?php
    //initialization
    $rankId=2;
    $questHubId=2;
    $questTypeId=2;
    $questName=null;

    if(isset($_SESSION['quests'])) {
        $rankId=$_SESSION['quests']['rank'];
        $questHubId=$_SESSION['quests']['questHub'];
        $questTypeId=$_SESSION['quests']['questType'];
        $questName=$_SESSION['quests']['questName'];
    } 
?>
<?php
    $sql = 'SELECT q.*, a.name location
            FROM quest q
                JOIN areas a ON a.id=q.locationId
            WHERE (0='.$rankId.' OR q.rankId='.$rankId.')
                AND (0='.$questHubId.' OR q.hubId='.$questHubId.')
                AND (0='.$questTypeId.' OR q.typeId='.$questTypeId.')
                AND q.name like "%'.$questName.'%"
            ORDER by questId';
    $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; quest table error');
?>
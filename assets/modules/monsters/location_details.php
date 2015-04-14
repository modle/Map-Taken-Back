<H2>Location Details</H2>

<?php
    $sql = "SELECT mh.startArea, mh.moveArea, mh.restArea, a.name location
            FROM monsterhabitat mh
            JOIN areas a ON a.id=mh.locationId
            WHERE mh.monsterId=$monsterId
            ORDER BY a.id";
    $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; monster to quest table error');
?>

<table class='data'>
    <tr class='dataTh'>
        <th>Location</th>
        <th>Start</th>
        <th>Move</th>
        <th>Rest</th>
    </tr>
    <?php
        while($row=mysqli_fetch_array($result))
        {
            echo '<tr>'
                .'<td>' . $row['location']
                .'<td>' . $row['startArea']
                .'<td>' . $row['moveArea']
                .'<td>' . $row['restArea']
            .'</tr>';
        }
    ?>
</table>
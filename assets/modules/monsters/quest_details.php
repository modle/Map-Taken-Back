<H2>Quest Details</H2>

<?php
    $sql = "SELECT q.name, q.rank, q.stars, q.hub, q.type
            FROM quest q
            JOIN monstertoquest mtq ON q.questId=mtq.questId
            WHERE mtq.monsterId=$monsterId
            ORDER BY q.hubId, q.rankId, q.stars";
    $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; monster to quest table error');
?>

<table class='data'>
    <tr class='dataTh'>
        <th>Name</th>
        <th>Hub</th>
        <th>Stars</th>
        <th>Rank</th>
        <th>Type</th>
    </tr>
    <?php
        while($row=mysqli_fetch_array($result))
        {
            echo '<tr>'
                .'<td>' . $row['name']
                .'<td>' . $row['hub']
                .'<td>' . $row['stars']
                .'<td>' . $row['rank']
                .'<td>' . $row['type']
            .'</tr>';
        }
    ?>
</table>
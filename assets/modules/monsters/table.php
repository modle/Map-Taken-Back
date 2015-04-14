<table class='data'>
    <tr class='dataTh'>
        <th>Name</th>
        <th>Rank</th>
        <th>How</th>
        <th>Rate</th>
    </tr>

    <?php
        while($row=mysqli_fetch_array($result))
        {
            echo('<tr>')
                .'<td>' . $row['name']
                .'<td>' . $row['rank']
                .'<td>' . $row['acquiredBy']
                .'<td>' . $row['percentage'] . '%';
        }
    ?>
</table>
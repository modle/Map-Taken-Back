<table class='data'>
    <tr class='dataTh'>
        <th>Name</th>
        <th>Rank</th>
        <th>Condition</th>
        <th>Percentage</th>
    </tr>

    <?php
        while($row=mysqli_fetch_array($result))
        {
            echo('<tr>'); //new table row
            echo '<td>' . $row['name'];
            echo '<td>' . $row['rank'];
            echo '<td>' . $row['acquiredBy'];
            echo '<td>' . $row['percentage'] . ' %';
        }
    ?>
</table>
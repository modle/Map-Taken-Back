<a name='Source'>


<?php
    if ($sourceLoad){
        echo("<h4>".$sourceLoad."</h4>");
            $sql = 'SELECT m.monster monster
                , h.acquiredBy acquiredBy
                , h.rank rank
                , h.stackSize stackSize
                , h.percentage percentage
            FROM huntingreward h
                JOIN item i ON i.itemId=h.itemId
                JOIN monsters m ON m.id=h.monsterId
            WHERE instr((i.name),"'. $sourceLoad .'") > 0
            ORDER by h.rank desc, h.percentage desc';

            $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armor table error');
?>
        <table class='data'>
        <tr class='dataTh'>
        <th>Monster</th>
        <th>Condition</th>
        <th>Rank</th>
        <th>Stack</th>
        <th>%</th>
        </tr>

<?php
        $letters=array();
        while($row=mysqli_fetch_array($result))
        {

            $nextLetter=substr($row['rank'],0);
            if (!in_array($nextLetter, $letters)) {
                $letters[]=$nextLetter;
                echo("<a href='#".$nextLetter."'>".$nextLetter."</a>"."&nbsp;");
                echo("<tr><td colspan=20><a name='".$nextLetter."' class='menu'><h3>".$nextLetter."</h3></a></td></tr>");
            }
        echo("<tr>")
                ."<td>" . $row['monster']
                ."<td>" . $row['acquiredBy']
                ."<td>" . $row['rank']
                ."<td>" . $row['stackSize']
                ."<td>" . $row['percentage']
            ."</tr>";
        }
        echo('</table>');
    }
?>
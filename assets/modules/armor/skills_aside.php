<?php
    if ($skillLoad){
        echo("<h4>".$skillLoad."</h4>");

        $sql = 'SELECT i.name armorName
                    , a.equipSlot setPiece
                    , (SELECT name FROM skilltree where skillTreeId=itst.skillTreeId) skillTree
                    , itst.pointValue points
                FROM item i
                    JOIN armorstats a ON i.itemId=a.itemId
                    JOIN itemtoskilltree itst ON i.itemId=itst.itemId
                WHERE i.name like "' . $skillLoad . '"
                ORDER by setPiece';

        $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armor table error');
?>

        <table class='data'>
            <tr class='dataTh'>
                <th>Set Piece</th>
                <th>Skill Tree</th>
                <th>Skill Points</th>
            </tr>

<?php
    while($row=mysqli_fetch_array($result))
    {
        echo("<tr>"
                ."<td>" . $row['setPiece']
                ."<td>" . $row['skillTree']
                ."<td>" . $row['points']
            .'</tr>'
        );

    }
    echo("</table>");
}
?>
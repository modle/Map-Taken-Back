<?php
    if ($skillLoad){

        $armorSet=str_replace('\'','&#39;',$skillLoad);
        echo("<h4>".$skillLoad."</h4>");

        $sql = 'SELECT i.name armorName
                    , a.equipSlot setPiece
                    , (SELECT name FROM skilltree where skillTreeId=itst.skillTreeId) skillTree
                    , itst.pointValue points
                FROM item i
                    JOIN armorstats a ON i.itemId=a.itemId
                    JOIN itemtoskilltree itst ON i.itemId=itst.itemId
                WHERE a.armorSet like "' . $armorSet . '"
                    AND a.hunterTypeId=' . $typeFilterId . '
                ORDER by equipSlotId';

        $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armor table error');
?>

        <table class='data'>

<?php
            $letters=array();
            while($row=mysqli_fetch_array($result))
            {

                $nextLetter=$row['setPiece'];
                if (!in_array($nextLetter, $letters)) {
                    $letters[]=$nextLetter;
                    echo("<tr><td colspan=20><h3>".$nextLetter."</h3></td></tr>");
                }
                echo("<tr>"
                        ."<td>" . $row['skillTree']
                        ."<td>" . $row['points']
                    .'</tr>'
                );

            }
        echo("</table>");
}
?>
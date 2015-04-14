<?php
require('assets/modules/skills/dropdown.php');
if ($armorLoad){
    echo("<h4>".$armorLoad."</h4>");

        $sql = 'SELECT i.name name
                    , a.equipSlot equipSlot
                    , i.rare rare
                    , pointValue
                    , a.equipSlotId
                FROM armorstats a
                    JOIN item i ON a.itemID=i.itemID
                    JOIN itemtoskilltree itst ON itst.itemID=i.itemID
                WHERE i.itemID IN (SELECT itemId FROM itemtoskilltree WHERE skillTreeId=(SELECT skillTreeId FROM skilltree WHERE name LIKE "' . $armorLoad . '"))
                    AND (0=' . $equipSlotId . ' OR a.equipSlotId=' . $equipSlotId . ')
                    AND skillTreeId=(SELECT skillTreeId FROM skilltree WHERE name LIKE "' . $armorLoad . '")
                ORDER by equipSlotId, pointValue desc';


        $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armor table error');
?>

    <table class='data'>
    <tr class='dataTh'>
        <th>Name</th>
        <th>Piece</th>
        <th>Rare</th>
        <th>Pts.</th>
    </tr>

    <?php
        $letters=array();
        while($row=mysqli_fetch_array($result))
        {

            $nextLetter=substr($row['equipSlot'],0);
            if (!in_array($nextLetter, $letters)) {
                $letters[]=$nextLetter;
                echo("<a href='#".$nextLetter."'>".$nextLetter."</a>"."&nbsp;");
                echo("<tr><td colspan=20><a name='".$nextLetter."' class='menu'><a href='#top'>Back to top</a><h3>".$nextLetter."</h3></a></td></tr>");
            }
            echo("<tr>")
                ."<td>" . $row['name']
                ."<td>" . $row['equipSlot']
                ."<td>" . $row['rare']
                ."<td>" . $row['pointValue']
            ."</tr>";
        }
        echo('</table>');
}
    ?>
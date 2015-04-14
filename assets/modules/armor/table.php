<table class='data'>
    <tr class='dataTh'>
        <th></th>
        <th>R</th>
        <th></th>
        <th></th>
        <th></th>
        <th><img src=assets/resources/elements/FIR.png height='20' width='20'></th>
        <th><img src=assets/resources/elements/WAT.png height='20' width='20'></th>
        <th><img src=assets/resources/elements/THU.png height='20' width='20'></th>
        <th><img src=assets/resources/elements/ICE.png height='20' width='20'></th>
        <th><img src=assets/resources/elements/DRA.png height='20' width='20'></th>
    </tr>

    <?php
        while($row=mysqli_fetch_array($result))
        {
            //slot display
            switch($row['slot']) {
                case "0": $slot = "---"; break;
                case "1": $slot = "o--"; break;
                case "2": $slot = "oo-"; break;
                case "3": $slot = "ooo"; break;
            }

            echo('<tr>'
                    .'<td><input type="submit" name="skillLoad" value="'.$row['name'].'" class="button" >'
                    .'<td>' . $row['rare']
                    .'<td><img src=assets/resources/weapons/'.$row['hunterTypeId'].'.png ></th>'
                    .'<td><img src=assets/resources/armor/'.$row['equipSlot'].'.png ></th>'
                    .'<td>' . $slot
                    .'<td>' . $row['fireRes']
                    .'<td>' . $row['waterRes']
                    .'<td>' . $row['thunderRes']
                    .'<td>' . $row['iceRes']
                    .'<td>' . $row['dragonRes']
                .'</tr>'
            );
        }
    ?>
</table>
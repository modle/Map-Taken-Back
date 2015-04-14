<table class='data weaponTable'>
    <tr class='dataTh'>
        <th style='width: 7%;'>Armory</th>
        <th style='width: 7%;'>Wish<br>List</th>
        <th style='width: 30%;'>Name</th>
        <th style='width: 7%;'>Rarity</th>
        <th style='width: 7%;'>Attack</th>
        <th style='width: 7%;'>Element</th>
        <th style='width: 7%;'>Element Value</th>
        <th style='width: 7%;'>Slot</th>
        <th style='width: 7%;'>Affin.</th>
        <th style='width: 10%;'>Special</th>
    </tr>

    <?php
        while($weaponsRow=mysqli_fetch_array($result))
        {
            require('assets/modules/weapons/update_inventory.php');
            require('assets/modules/weapons/update_wishlist.php');
            require('assets/modules/weapons/parameter_prep.php');

            echo("<tr>")
                ."<input type='hidden' value='0' name='own" . $weaponsRow['id'] . "'/>"
                ."<input type='hidden' value='0' name='wish" . $weaponsRow['id'] . "'/>"
                ."<td><center><input type='checkbox' value='1' name='own" . $weaponsRow['id'] . "' onchange='this.form.submit()' class='checkbox'/></center>"
                ."<td><center><input type='checkbox' value='1'  name='wish" . $weaponsRow['id'] . "' onchange='this.form.submit()' class='checkbox'/></center>"

                .'<td><input type="submit" name="weaponPath" value="'.$weaponsRow['name'].'" class="button" > <input type="image" name="weaponImage" value='.$weaponsRow['weaponTypeId'].' src=assets/resources/weapons/'.$weaponsRow['weaponTypeId'].'.png height="20" width="20">'.$createFlag . $finalFlag
                ."<td BGCOLOR='$rareColorsRow[color]'><center>$weaponsRow[rare]</center>"
                ."<td><center>$weaponsRow[attack]</center></td>"
                ."<td BGCOLOR='$elemBg'><center><input type ='image' name='elementImage' value=$elemType src=assets/resources/elements/$elemType.png height='20' width='20'></center></td>"
                ."<td><center>$elemValue</center></td>"
                ."<td><center>$slot</center></td>"
                ."<td BGCOLOR='$affinityBg'><center>$affinity%</center></td>"
                ."<td>$weaponsRow[special]</td>"
                ;
        }
    ?>
</table>
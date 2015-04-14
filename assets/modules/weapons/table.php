<table class='data weaponTable'>
    <tr class='dataTh'>
        <th>I<br>W</th>
        <th>Name</th>
        <th>R</th>
        <th>Attk.</th>
        <th>Elem.</th>
        <th></th>
        <th></th>
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
                ."<td><input type='checkbox' value='1' name='own" . $weaponsRow['id'] . "' onchange='this.form.submit()' class='checkbox'/>"
                ."<br><input type='checkbox' value='1'  name='wish" . $weaponsRow['id'] . "' onchange='this.form.submit()' class='checkbox'/>"

                .'<td><input type="submit" name="weaponPath" value="'.$weaponsRow['name'].'" class="button" > <input type="image" name="weaponImage" value='.$weaponsRow['weaponTypeId'].' src=assets/resources/weapons/'.$weaponsRow['weaponTypeId'].'.png height="20" width="20">'.$createFlag . $finalFlag
                ."<td BGCOLOR='$rareColorsRow[color]'>$weaponsRow[rare]"
                ."<td>$weaponsRow[attack]</td>"
                ."<td BGCOLOR='$elemBg'><input type ='image' name='elementImage' value=$elemType src=assets/resources/elements/$elemType.png height='20' width='20'>"
                ."$elemValue</td>"
                ."<td>$slot"
                ."<br>$affinity%</td>"
                ."<td>$weaponsRow[special]</td>"
                ;
        }
    ?>
</table>
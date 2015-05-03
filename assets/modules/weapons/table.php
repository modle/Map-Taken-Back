<table class='data'>
    <?php
        while($weaponsRow=mysqli_fetch_array($result))
        {
            require('assets/modules/weapons/update_inventory.php');
            require('assets/modules/weapons/update_wishlist.php');
            require('assets/modules/weapons/parameter_prep.php');


            if ($hideAwaken==true && $weaponsRow['awaken']==1){
            } else {
                echo("<tr>")
                    ."<td><input type='image' name='weaponPath' onclick='this.form.submit()' src=assets/resources/ui/path.png class='icon' value='$weaponsRow[name],$weaponsRow[weaponId]'></td>"

                    .'<td>'.$weaponsRow['name']

                    ."<td BGCOLOR='$rareColorsRow[color]'>$weaponsRow[rare]<br>".$createFlag . $finalFlag
                    ."<td>$weaponsRow[attack]<br><input class='icon' type='image' name='weaponImage' value=$weaponsRow[weaponTypeId] src=assets/resources/weapons/$weaponsRow[weaponTypeId].png class='icon'></td>"
                    ."<td><input type ='image' name='elementImage' value=$elemType src=assets/resources/elements/$elemType.png class='icon'>"
                    .$elemValue.$awakenFlag."</td>"
                    ."<td>$slot"
                    ."<br>$affinity%</td>"
                    ."<td>$weaponsRow[special]</td>"
                    ;
            }
        }
    ?>
</table>
<?php

    if ($weaponPath)
    {
        $pathName=str_replace('\'','&#39;',$weaponPath);
        //use $pathName in sql
        //use $weaponPath in output
        $sql = 'SELECT weaponId
                , name
                , rare
                , final
                , COALESCE(hierarchy,\'N/A\') AS hierarchy
            FROM weapondata
            WHERE name like \''.$pathName.'\'';

        $resultHierarchy = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; hierarchy error');
        $rowHierarchy=mysqli_fetch_array($resultHierarchy);

        $hierarchy = str_getcsv($rowHierarchy['hierarchy']);
        $id=$rowHierarchy['weaponId'];

        $count=count($hierarchy);

        echo("<H2>Upgrade Path</H2>");
        echo("<td class='navTdTh'><input type='submit' value='Hide Upgrade Path' name='Clear'/><br><br>");
        echo("<table class='path'>");

        //from end of hierarchy array
        for($i=count($hierarchy)-1;$i>-1;$i--)
        {
            if ($hierarchy[$i]!='N/A' && $hierarchy[$i]!=''){

                //return rarity and id from weapondata table where name=hierarchy[i]
                $sql = 'SELECT rare, weaponId, final, weaponTypeId, final
                    FROM weapondata
                    WHERE name= \'' . $hierarchy[$i] . '\'';
                $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
                $row2=mysqli_fetch_array($result2);

                if ($row2['final']==1) {$finalFlag = '<sup>F</sup>';
                } else {$finalFlag = null;}

                //weapons in path
                echo '<tr>'
                ."<td class=navTdTh><input type='image' name='searchClick' onclick = 'this.form.submit()' class='icon' src=assets/resources/ui/search.png value='$row2[weaponId],$row2[weaponTypeId]'>"
                ."<td class=navTdTh><input type='image' name='materialsClick' onclick = 'this.form.submit()' class='icon' src=assets/resources/ui/materials.png value='$row2[weaponId]'>"
                .'<td class=navTdTh><input type="submit" name="weaponPath"  value="'.$hierarchy[$i].'" class="button" >'
                .'<td class=navTdTh>'.$row2['rare']
                ."<td class=navTdTh><input type='image' name='own$row2[weaponId]' onclick='this.form.submit()' class='icon' src=assets/resources/ui/armory.png value='1'>"
                ."<td class=navTdTh><input type='image' name='wish$row2[weaponId]' onclick='this.form.submit()' class='icon' src=assets/resources/ui/wish.png value='1'>"
                . '</tr>'
                ;
                //down arrow
                echo("<tr><td class=navTdTh><td class=navTdTh><td class=navTdTh>&darr;</td></tr>");
            }
        }

        //this will only have 1 result: the selected weapon
        $sql = 'SELECT rare, weaponId, name, weaponTypeId, final
                FROM weapondata
                WHERE weaponId=' . $id;
        $result3 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; rare error 2');
        $row3=mysqli_fetch_array($result3);

        if ($row2['final']==1) {$finalFlag = '<sup>F</sup>';
        } else {$finalFlag = null;}

        //selected weapon
        echo '<tr>'
            ."<td class=navTdTh><input type='image' name='searchClick' onclick = 'this.form.submit()' class='icon' src=assets/resources/ui/search.png value='$row3[weaponId],$row3[weaponTypeId]'>"
            ."<td class=navTdTh><input type='image' name='materialsClick' onclick = 'this.form.submit()' class='icon' src=assets/resources/ui/materials.png value='$row3[weaponId]'>"
            .'<td class=navTdTh><input type="submit" name="weaponPath" value="'.$row3['name'].'" class="selected" >'
            .'<td class=navTdTh>'.$row3['rare'] . ' ' . $finalFlag . '</td>'
            ."<td class=navTdTh><input type='image' name='own$row3[weaponId]' onclick='this.form.submit()' class='icon' src=assets/resources/ui/armory.png value='1'>"
            ."<td class=navTdTh><input type='image' name='wish$row3[weaponId]' onclick='this.form.submit()' class='icon' src=assets/resources/ui/wish.png value='1'>"
            .'</tr>';


        //shows next items in upgrade path
        echo("<tr><th class='navTdTh'><br></th></tr>");
        echo("<tr class=dataTh><th class=navTdTh></th><th class=navTdTh></th><th>Upgrades To</th></tr>");

        $sql = 'SELECT count(wt1.name) cnt
                    , wt1.name
                    , wt2.name nextWeapon
                    , wt2.rare nextWeaponRare
                    , wt2.weaponId nextId
                    , wt2.final nextFinal
                    , wt2.weaponTypeId
                FROM weapondata wt1
                JOIN weapondata wt2
                    ON wt2.parentWeaponId=wt1.weaponId
                WHERE wt1.weaponId=' . $id;
        $result4 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; upgradesTo error');


        while($upgradesTo=mysqli_fetch_array($result4)){
    
            //final check
            if ($upgradesTo['nextFinal']==1) {$finalFlag = '<sup>F</sup>';
            } else {$finalFlag = null;}

            if($upgradesTo['cnt']==0){
                echo '<td class=navTdTh><td class=navTdTh><td class=navTdTh>Cannot be upgraded further</tr>';
            } else {
                //weapons selected weapon can upgrade to
                echo
                "<td class=navTdTh><input type='image' name='searchClick' onclick = 'this.form.submit()' class='icon' src=assets/resources/ui/search.png value='$upgradesTo[nextId],$upgradesTo[weaponTypeId]'>"
                ."<td class=navTdTh><input type='image' name='materialsClick' onclick = 'this.form.submit()' class='icon' src=assets/resources/ui/materials.png value='$upgradesTo[nextId]'>"
                .'<td class=navTdTh><input type="submit" name="weaponPath" value="'.$upgradesTo['nextWeapon'].'" class="button" >'
                .'<td class=navTdTh>'.$upgradesTo['nextWeaponRare'] . ' ' . $finalFlag . '</sup>'
                .'</tr>';
                }
        }
        echo("</table>");
    }
?>
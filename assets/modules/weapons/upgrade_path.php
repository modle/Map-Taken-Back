<?php
    if ($weaponPathId)
    {
        $sql = 'SELECT weaponId
                , name
                , rare
                , final
                , COALESCE(hierarchy,\'N/A\') AS hierarchy
            FROM weapondata
            WHERE weaponId='.$weaponPathId;

        $resultHierarchy = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; hierarchy error');
        $rowHierarchy=mysqli_fetch_array($resultHierarchy);

        $hierarchy = str_getcsv($rowHierarchy['hierarchy']);
        $weaponPathId=$rowHierarchy['weaponId'];

        $count=count($hierarchy);

        echo("<H2>Upgrade Path</H2>");
        echo("<td class='navTdTh'><input type='submit' value='Hide Upgrade Path' name='Clear'/><br><br>");
        echo("<table class='path'>");

        //from end of hierarchy array
        for($i=count($hierarchy)-1;$i>-1;$i--)
        {
            if ($hierarchy[$i]!='N/A' && $hierarchy[$i]!=''){

                //return rarity and id from weapondata table where name=hierarchy[i]
                $sql = 'SELECT name, rare, weaponId, final, weaponTypeId, final, created
                    FROM weapondata
                    WHERE name= \'' . $hierarchy[$i] . '\'';
                $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
                $row2=mysqli_fetch_array($result2);

                if ($row2['final']==1) {$finalFlag = '<sup>F</sup>';
                } else {$finalFlag = null;}
                if ($row2['created']==1) {$createFlag = '<sup>C</sup>';
                } else {$createFlag = null;}

                //weapons in path
                echo '<tr>'
                ."<td class=navTdTh><input type='image' name='searchClick' onclick = 'this.form.submit()' class='icon' src=assets/resources/ui/search.png value='$row2[weaponId],$row2[weaponTypeId]'>"

                ."<td class=navTdTh><input type='image' name='weaponPath' onclick='this.form.submit()' src=assets/resources/ui/path.png class='icon' value='$row2[name],$row2[weaponId]'></td>"

                .'<td class=navTdTh>'.$hierarchy[$i]

                .'<td class=navTdTh>'.$row2['rare'] . ' ' . $finalFlag . ' ' . $createFlag . '</td>'

                ."<td class=navTdTh><input type='image' name='own$row2[weaponId]' onclick='this.form.submit()' class='icon' src=assets/resources/ui/armory.png value='1'>"
                ."<td class=navTdTh><input type='image' name='wish$row2[weaponId]' onclick='this.form.submit()' class='icon' src=assets/resources/ui/wish.png value='1'>"
                . '</tr>'
                ;
                //down arrow
                echo("<tr><td class=navTdTh><td class=navTdTh><td class=navTdTh>&darr;</td></tr>");
            }
        }

        //this will only have 1 result: the selected weapon
        $sql = 'SELECT rare, weaponId, name, weaponTypeId, final, created
                FROM weapondata
                WHERE weaponId=' . $weaponPathId;
        $result3 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; rare error 2');
        $row3=mysqli_fetch_array($result3);

        if ($row3['final']==1) {$finalFlag = '<sup>F</sup>';
        } else {$finalFlag = null;}
        if ($row3['created']==1) {$createFlag = '<sup>C</sup>';
        } else {$createFlag = null;}

        //selected weapon
        echo '<tr>'
            ."<td class=navTdTh><input type='image' name='searchClick' onclick = 'this.form.submit()' class='icon' src=assets/resources/ui/search.png value='$row3[weaponId],$row3[weaponTypeId]'>"
            ."<td class=navTdTh><input type='image' name='weaponPath' onclick='this.form.submit()' src=assets/resources/ui/path.png class='icon' value='$row3[name],$row3[weaponId]'></td>"

            .'<td class=navTdTh><b>'.$row3['name'].'</b>'

            .'<td class=navTdTh>'.$row3['rare'] . ' ' . $finalFlag . ' ' . $createFlag . '</td>'
            ."<td class=navTdTh><input type='image' name='own$row3[weaponId]' onclick='this.form.submit()' class='icon' src=assets/resources/ui/armory.png value='1'>"
            ."<td class=navTdTh><input type='image' name='wish$row3[weaponId]' onclick='this.form.submit()' class='icon' src=assets/resources/ui/wish.png value='1'>"
            .'</tr>';

        //shows next items in upgrade path
        echo("<tr><th class='navTdTh'><br></th></tr>");
        echo("<tr class=dataTh><th class=navTdTh></th><th class=navTdTh></th><th>Upgrades To</th></tr>");

        $sql = 'SELECT wt1.name name
                    , wt2.name nextWeapon
                    , wt2.rare nextWeaponRare
                    , wt2.weaponId nextId
                    , wt2.final nextFinal
                    , wt2.created nextCreated
                    , wt2.weaponTypeId
                FROM weapondata wt1
                JOIN weapondata wt2
                    ON wt2.parentWeaponId=wt1.weaponId
                WHERE wt1.weaponId=' . $weaponPathId;
        $result4 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; upgradesTo error');
        $rowCount=mysqli_num_rows($result4);

        if($rowCount==0){
            echo '<td class=navTdTh><td class=navTdTh><td class=navTdTh>Cannot be upgraded further</tr>';
        } else {
            while($upgradesTo=mysqli_fetch_array($result4)){
                if ($upgradesTo['nextFinal']==1) {$finalFlag = '<sup>F</sup>';
                } else {$finalFlag = null;}
                if ($upgradesTo['nextCreated']==1) {$createFlag = '<sup>C</sup>';
                } else {$createFlag = null;}
    
                //weapons selected weapon can upgrade to
                echo
                "<td class=navTdTh><input type='image' name='searchClick' onclick = 'this.form.submit()' class='icon' src=assets/resources/ui/search.png value='$upgradesTo[nextId],$upgradesTo[weaponTypeId]'>"
                ."<td class=navTdTh><input type='image' name='weaponPath' onclick='this.form.submit()' src=assets/resources/ui/path.png class='icon' value='$upgradesTo[nextWeapon],$upgradesTo[nextId]'></td>"

                .'<td class=navTdTh>'.$upgradesTo['nextWeapon']

                .'<td class=navTdTh>'.$upgradesTo['nextWeaponRare'] . ' ' . $finalFlag . ' ' . $createFlag . '</td>'
                .'</tr>';
            }
        }
        echo("</table>");
    }
?>
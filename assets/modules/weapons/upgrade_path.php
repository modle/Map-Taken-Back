<?php

    if ($weaponPath)
    {

        $pathName=str_replace('\'','&#39;',$weaponPath);

        //use $pathName in sql
        //use $weaponPath in output
        $sql = 'SELECT id
                , name
                , rare
                , final
                , COALESCE(hierarchy,\'N/A\') AS hierarchy
            FROM weapondata
            WHERE name like \''.$pathName.'\'';

        $resultHierarchy = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; hierarchy error');
        $rowHierarchy=mysqli_fetch_array($resultHierarchy);

        $hierarchy = str_getcsv($rowHierarchy['hierarchy']);
        $id=$rowHierarchy['id'];

        $count=count($hierarchy);

        if ($rowHierarchy['final']==1) {$finalFlag = '<sup>F</sup>';
        } else {$finalFlag = null;}


        echo("<H2>Upgrade Path</H2>");
        echo("<td class='navTdTh'><input type='submit' value='Hide Upgrade Path' name='Clear'/><br><br>");
        echo("<table class='nav'>");

        //from end of hierarchy array
        for($i=count($hierarchy)-1;$i>-1;$i--)
        {
            if ($hierarchy[$i]!='N/A' && $hierarchy[$i]!=''){

                //return rarity from weapondata table where name=hierarchy[i]
                $sql = 'SELECT rare, id, final
                    FROM weapondata
                    WHERE name= \'' . $hierarchy[$i] . '\'';
                $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
                $row2=mysqli_fetch_array($result2);

                //weapons in path
                echo '<tr><td class=navTdTh><input type="submit" name="weaponPath"  value="'.$hierarchy[$i].'" class="button" >'
                . '<sup>'.$row2['rare'].'</sup>'
                . " <input type='image' name='searchClick' onclick = 'this.form.submit()' height='15' width='15' src=assets/resources/ui/search.png value='".$rowHierarchy['name']."'>"
                ."<input type='hidden' value='0' name='own$row2[id]'/>"
                ."<input type='hidden' value='0' name='wish$row2[id]'/>"
                ."<td><input type='checkbox' value='1' name='own$row2[id]' onchange='this.form.submit()' class='checkbox'/>"
                ."<input type='checkbox' value='1'  name='wish$row2[id]' onchange='this.form.submit()' class='checkbox'/>"
                . '</tr>'
                ;
                //down arrow
                    echo("<tr><td class='navTdTh'><center>&darr;</center></td></tr>");
            }
        }

        $sql = 'SELECT rare, name
                FROM weapondata
                WHERE id=' . $id;
        $result3 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; rare error 2');
        $row3=mysqli_fetch_array($result3);

        //selected weapon
        echo '<tr><td class=navTdTh><input type="submit" name="weaponPath" value="'.$rowHierarchy['name'].'" class="button" >'
            . '<sup>'.$row3['rare'] . ' ' . $finalFlag . '</sup>'
            . " <input type='image' name='searchClick' onclick = 'this.form.submit()' height='15' width='15' src=assets/resources/ui/search.png value='".$rowHierarchy['name']."'>"
            . '</tr>';


        echo("<tr><th class='navTdTh'><br></th></tr>");
        echo("<tr class='dataTh'><th>Upgrades To</th></tr>");

        $sql = 'SELECT count(wt1.name) cnt
                    , wt1.name
                    , wt2.name nextWeapon
                    , wt2.rare nextWeaponRare
                    , wt2.id nextId
                    , wt2.final nextFinal
                FROM weapondata wt1
                JOIN weapondata wt2
                    ON wt2.parentId=wt1.id
                WHERE wt1.id=' . $id;
        $result4 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));


        while($upgradesTo=mysqli_fetch_array($result4)){

        //final check
        if ($upgradesTo['nextFinal']==1) {$finalFlag = '<sup>F</sup>';
        } else {$finalFlag = null;}

        if($upgradesTo['cnt']==0){
            echo '<td class=navTdTh>Cannot be upgraded further</tr>';
        } else {
            //weapons selected weapon can upgrade to
            echo '<td class=navTdTh><input type="submit" name="weaponPath" value="'.$upgradesTo['nextWeapon'].'" class="button" >'
            . '<sup>'.$upgradesTo['nextWeaponRare'] . ' ' . $finalFlag . '</sup>'
            . "<input type='image' name='searchClick' onclick = 'this.form.submit()' height='15' width='15' src=assets/resources/ui/search.png value='".$rowHierarchy['name']."'>"
            . '</tr>';
            }
        }
        echo("</table>");
    }
?>
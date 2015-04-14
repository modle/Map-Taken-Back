<!doctype html>
<html>
<head>
    <title>Inventory</title>
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/main.css">
    <script type="text/javascript" src="assets/scripts/mh4u_jsFunctions.js"></script>
</head>
<body>
    <script src="assets/scripts/mh4u_jquery.js"></script>
    <form method=POST name="form">
        <?php
            //*****************************************
            //INITIALIZATION
            //*****************************************
            require_once('db_connect.php');
            echo ("<input type='hidden' name='postCheck'>");

            $allCheck = "";
            $rawCheck = "";
            $firCheck = "";
            $watCheck = "";
            $thuCheck = "";
            $iceCheck = "";
            $draCheck = "";
            $parCheck = "";
            $poiCheck = "";
            $sleCheck = "";
            $blaCheck = "";

            //*****************************************
            //END INITIALIZATION
            //*****************************************



            //*****************************************
            //POST VARIABLE CHECK SECTION
            //*****************************************

            if(isset($_POST['postCheck'])) {
                //this calls every post

                //armory
                if($_POST['armoryShow']==1){ $armoryShowCheck='checked';
                } else { $armoryShowCheck='';}

                //wishlist
                if($_POST['wishlistShow']==1){ $wishlistShowCheck='checked';
                } else { $wishlistShowCheck='';}

                //weapon path
                if(isset($_POST['weaponPath'])){
                    $weaponPath=$_POST['weaponPath'];
                } else {
                    $weaponPath=null;
                }

                //maps
                if($_POST['mapShow']==1){ $mapCheck='checked';
                } else { $mapCheck='';}
                $area=$_POST['area'];

                //monsters
                if($_POST['monsterShow']==1) {$monsterCheck='checked';
                    if(isset($_POST['monster'])){$monster=$_POST['monster'];
                    } else{$monster=1;}
                } else {$monsterCheck='';}

                //items
                if($_POST['itemShow']==1) {$itemCheck='checked';
                } else {$itemCheck='';}
                $itemName=$_POST['itemName'];

                //weapons
                if($_POST['createShow']==1){ $createCheck='checked'; $createFilter=1;
                } else { $createCheck=''; $createFilter=0;}

                if($_POST['finalShow']==1){ $finalCheck='checked'; $finalFilter=1;
                } else { $finalCheck=''; $finalFilter=0;}

                if($_POST['awakenShow']==1){ $awakenCheck='checked'; $awakenFilter=1;
                } else { $awakenCheck=''; $awakenFilter=0;}

                if($_POST['weaponShow']==1) {$weaponCheck='checked';
                } else {$weaponCheck='';}


                if(isset($_POST['searchClick'])){
                    $weaponName=$_POST['searchClick'];
                } else {$weaponName=$_POST['weaponName'];}



                $weaponType=$_POST['weaponType'];

                if(isset($_POST['minRaritySelect'])) {
                    $minRaritySelect=$_POST['minRaritySelect'];
                    $maxRaritySelect=$_POST['maxRaritySelect'];
                } else {
                    $minRaritySelect=1;
                    $maxRaritySelect=10;
                }

                $elemFilter=$_POST['elem'];
                switch($_POST['elem']) {
                    case "%": $allCheck = "checked"; break;
                    case "RAW": $rawCheck = "checked"; break;
                    case "FIR": $firCheck = "checked"; break;
                    case "WAT": $watCheck = "checked"; break;
                    case "THU": $thuCheck = "checked"; break;
                    case "ICE": $iceCheck = "checked"; break;
                    case "DRA": $draCheck = "checked"; break;
                    case "PAR": $parCheck = "checked"; break;
                    case "POI": $poiCheck = "checked"; break;
                    case "SLE": $sleCheck = "checked"; break;
                    case "BLA": $blaCheck = "checked"; break;
                }

            } else {
                //this only calls on load, sets defaults

                //armory and wishlist
                $armoryShowCheck='checked';
                $wishlistShowCheck='checked';
                $weaponPath=null;

                //maps
                $mapCheck='';
                $area=1;

                //monsters
                $monsterCheck='';
                $monster=1;

                //items
                $itemCheck='';
                $itemName=null;

                //weapons
                $createCheck='';
                $createFilter=0;
                $finalCheck='';
                $finalFilter=0;
                $awakenCheck='checked';
                $awakenFilter=1;
                $weaponCheck='checked';
                $weaponName=null;
                $weaponType='greatsword';

                $minRaritySelect=1;
                $maxRaritySelect=10;
                $elemFilter='%';
                $allCheck = "checked";
            }
            //*****************************************
            //END POST VARIABLE CHECK SECTION
            //*****************************************



            //*****************************************
            //RESET BUTTON HANDLER SECTION
            //*****************************************
            if(isset($_POST['ResetButton'])){
                //set defaults
                $armoryShowCheck='checked';
                $wishlistShowCheck='checked';
                $weaponPath=null;

                $mapCheck='';
                $area=1;

                $monsterCheck='';
                $monster=1;

                $itemCheck='';
                $itemName=null;

                $weaponCheck='checked';

                $weaponName=null;
                $weaponType='greatsword';

                $createCheck='';
                $createFilter=0;
                $finalCheck='';
                $finalFilter=0;
                $awakenCheck='checked';
                $awakenFilter=1;

                $minRaritySelect=1;
                $maxRaritySelect=10;
                $elemFilter='%';
                $allCheck="checked";
                $rawCheck = "";
                $firCheck = "";
                $watCheck = "";
                $thuCheck = "";
                $iceCheck = "";
                $draCheck = "";
                $parCheck = "";
                $poiCheck = "";
                $sleCheck = "";
                $blaCheck = "";
            }
            //*****************************************
            //END RESET BUTTON HANDLER SECTION
            //*****************************************


            //*****************************************
            //PREFERENCES SECTION
            //*****************************************
            echo "<input type='hidden' value='0' name='mapShow' />"; //passes 0 if checkbox unchecked
            echo "<input type='hidden' value='0' name='monsterShow' />";
            echo "<input type='hidden' value='0' name='itemShow' />";
            echo "<input type='hidden' value='0' name='weaponShow' />";
            echo "<input type='hidden' value='0' name='armoryShow' />";
            echo "<input type='hidden' value='0' name='wishlistShow' />";
            echo "<input type='submit' value='Search' name='SearchButton' id='defaultActionButton' style='display:none;' />"; //button for enter listener


            echo("<div id='navigation'>");
            echo("<table class='nav'>");
            echo("<tr>
                 <th class='navTdTh'>Preferences</th>
                 <th class='navTdTh'>[Monsters]</th>
                 <th class='navTdTh'>[Maps]</th>
                 <th class='navTdTh'>[Items]</th>
                 <th class='navTdTh'>[Weapons]</th>
                 <th class='navTdTh'>[Armory]</th>
                 <th class='navTdTh'>[Wishlist]</th>
                 </tr>");
            echo("<tr>");
            echo
                "<td class='navTdTh'><center><input type='submit' value='Reset All Fields' name='ResetButton'/></center>"
                ."<td class='navTdTh'><center><input type='checkbox' value='1' " . $monsterCheck . " name='monsterShow' onchange='this.form.submit()'/></center>"
                ."<td class='navTdTh'><center><input type='checkbox' value='1' " . $mapCheck . " name='mapShow' onchange='this.form.submit()'/></center>"
                ."<td class='navTdTh'><center><input type='checkbox' value='1' " . $itemCheck . " name='itemShow' onchange='this.form.submit()'/></center>"
                ."<td class='navTdTh'><center><input type='checkbox' value='1' " . $weaponCheck . " name='weaponShow' onchange='this.form.submit()'/></center>"
                ."<td class='navTdTh'><center><input type='checkbox' value='1' " . $armoryShowCheck . " name='armoryShow' onchange='this.form.submit()'/></center>"
                ."<td class='navTdTh'><center><input type='checkbox' value='1' " . $wishlistShowCheck . " name='wishlistShow' onchange='this.form.submit()'/></center>";

            echo("</table>");

            echo("</div>");

            //*****************************************
            //END PREFERENCES SECTION
            //*****************************************

            echo("<div id='wrapper'>");

            echo("<div id='aside'>");


            //*****************************************
            //ARMORY SECTION
            //*****************************************
            //******
            //grab armory data
            //******

            if($armoryShowCheck=='checked'){
                echo ("<H2>Armory</H2>");
                $sql = 'SELECT *
                        FROM armory';
                $armoryTableResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory table error');
                //$armoryTableRow=mysqli_fetch_array($armoryTableResult);

            //******
            //create armory table
            //******

                echo("<table class='data wish'>");
                echo("<tr class='dataTh'>
                    <th style='width: 70%;'>Name</th>
                    <th>Delete</th>
                    </tr>");
                while($row=mysqli_fetch_array($armoryTableResult))
                {
                    echo("<tr>"); //new table row
                    echo "<td>" . $row['name']
                    . " <input type='image' name='searchClick' onclick = 'this.form.submit()' src=assets/resources/ui/search.png value='".$row['name']."'>"
                    . "<td> Delete";
                }
                echo("</table>");
            }



            //*****************************************
            //END ARMORY SECTION
            //*****************************************



            //*****************************************
            //WISHLIST SECTION
            //*****************************************
            //******
            //grab wishlist data
            //******
            if($wishlistShowCheck=='checked'){
                echo ("<H2>Wishlist</H2>");
                $sql = 'SELECT *
                        FROM wishlist';
                $wishlistTableResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; wishlist table error');
                //$wishlistTableRow=mysqli_fetch_array($wishlistTableResult);

            //******
            //create armory table
            //******

                echo("<table class='data wish'>");
                echo("<tr class='dataTh'>
                    <th style='width: 70%;'>Name</th>
                    <th>Delete</th>
                    </tr>");
                while($row=mysqli_fetch_array($wishlistTableResult))
                {
                    echo("<tr>"); //new table row
                    echo "<td>" . $row['name']
                    . " <input type='image' name='searchClick' onclick = 'this.form.submit()' src=assets/resources/ui/search.png value='".$row['name']."'>"
                    . "<td> Delete";
                }
                echo("</table>");
            }


            //*****************************************
            //END WISHLIST SECTION
            //*****************************************



            //*****************************************
            //UPGRADE PATH SECTION
            //*****************************************
                if ($weaponPath){
                    $pathName=str_replace('\'','\'\'',$weaponPath);

                    //use $pathName in sql
                    //use $weaponPath in output
                    $sql = 'SELECT id
                            , name
                            , rare
                            , final
                            , COALESCE(hierarchy,\'N/A\') AS hierarchy
                        FROM ' . $weaponType . ' WHERE name like \''.$pathName.'\'';

                    $resultHierarchy = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; hierarchy error');
                    $rowHierarchy=mysqli_fetch_array($resultHierarchy);

                    $hierarchy = str_getcsv($rowHierarchy['hierarchy']);
                    $id=$rowHierarchy['id'];

                    $count=count($hierarchy);

                    if ($rowHierarchy['final']==1) {$finalFlag = '<sup>F</sup>';
                    } else {$finalFlag = null;}

                    echo("<H2>Upgrade Path</H2>");
                    echo("<table class='nav'>");

                    //from end of hierarchy array
                    for($i=count($hierarchy)-1;$i>-1;$i--)
                    {
                        if ($hierarchy[$i]!='N/A' && $hierarchy[$i]!=''){

                        //return rarity from $weaponType table where name=hierarchy[i]
                        $sql = 'SELECT rare, id, final
                            FROM ' . $weaponType . ' WHERE name= \'' . $pathName . '\'';
                        $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
                        $row2=mysqli_fetch_array($result2);

                        //weapons in path
                        echo '<tr><td class=navTdTh><input type="submit" name="weaponPath" value="'.$hierarchy[$i].'" class="button" >'
                        . '<sup>'.$row2['rare'].'</sup>'
                        . " <input type='image' name='searchClick' onclick = 'this.form.submit()' src=assets/resources/ui/search.png value='".$rowHierarchy['name']."'>"
                        . '</tr>';

                        //down arrow
                            echo("<tr><td class='navTdTh'><center>&darr;</center></td></tr>");
                        }
                    }

                    $sql = 'SELECT rare, name
                        FROM ' . $weaponType . ' WHERE id=' . $id;
                    $result3 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; rare error 2');
                    $row3=mysqli_fetch_array($result3);

                    //selected weapon
                    echo '<tr><td class=navTdTh><input type="submit" name="weaponPath" value="'.$rowHierarchy['name'].'" class="button" >'
                        . '<sup>'.$row3['rare'] . ' ' . $finalFlag . '</sup>'
                        . " <input type='image' name='searchClick' onclick = 'this.form.submit()' src=assets/resources/ui/search.png value='".$rowHierarchy['name']."'>"
                        . '</tr>';

                        
                    echo("<tr><th class='navTdTh'><br></th></tr>");
                    echo("<tr class='dataTh'><th>Upgrades To</th></tr>");

                    $sql = 'SELECT count(wt1.name) cnt
                                , wt1.name
                                , wt2.name nextWeapon
                                , wt2.rare nextWeaponRare
                                , wt2.id nextId
                                , wt2.final nextFinal
                            FROM ' . $weaponType . ' wt1
                            JOIN ' . $weaponType . ' wt2
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
                            . "<input type='image' name='searchClick' onclick = 'this.form.submit()' src=assets/resources/ui/search.png value='".$rowHierarchy['name']."'>"
                            . '</tr>';
                        }
                    }
                    echo("</table>");
                }

                
            //*****************************************
            //END UPGRADE PATH SECTION
            //*****************************************

            echo("</div>");
            echo("<div id='section'>");


            //*****************************************
            //MONSTERS SECTION
            //*****************************************

            //******
            //monster dropdown definition
            //******

            echo ("<input type='hidden' value='1' name='monster'>");

            if($monsterCheck=='checked'){
                echo ("<H2>Monster</H2>");
                $sql="SELECT monster,id FROM monsters order by monster";
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; monster dropdown error');
                echo "<select name='monster' onchange='this.form.submit()' value='' >Monster</option>";
                while($row=mysqli_fetch_array($result))
                {
                    if($row[id]==$monster) {
                        echo "<option value=$row[id] selected>$row[monster]</option>";
                    } else {
                        echo "<option value=$row[id]>$row[monster]</option>";
                    }
                }
                echo "</select>";

                //******
                //grab monster data
                //******
                $sql = 'SELECT *
                        FROM monsters
                        WHERE id=' . $monster;
                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; table error');
                $monsterDataRow=mysqli_fetch_array($result);


                //set up weakness string with element images and equivalencies
                switch($monsterDataRow['weaknessCount']) {
                        case "1":
                            $weaknessOne = substr($monsterDataRow['weakness'],0,3);
                            $weaknessTwo =null;
                            $weaknessThree =null;
                            $weaknessFour =null;
                            $separatorOne=null;
                            $separatorTwo=null;
                            $separatorThree=null;

                            $weaknessString="
                            <img src=assets/resources/elements/" . $weaknessOne . ".png height='20' width='20'>";
                            break;
                        case "2":
                            $weaknessOne = substr($monsterDataRow['weakness'],0,3);
                            $weaknessTwo = substr($monsterDataRow['weakness'],4,3);
                            $weaknessThree = null;
                            $weaknessFour = null;
                            $separatorOne=substr($monsterDataRow['weakness'],3,1);
                            $separatorTwo=null;
                            $separatorThree=null;

                            $weaknessString="
                            <img src=assets/resources/elements/" . $weaknessOne . ".png height='20' width='20'>
                                " . $separatorOne . "
                            <img src=assets/resources/elements/" . $weaknessTwo . ".png height='20' width='20'>";
                            break;
                        case "3":
                            $weaknessOne = substr($monsterDataRow['weakness'],0,3);
                            $weaknessTwo = substr($monsterDataRow['weakness'],4,3);
                            $weaknessThree = substr($monsterDataRow['weakness'],8,3);
                            $weaknessFour = null;
                            $separatorOne=substr($monsterDataRow['weakness'],3,1);
                            $separatorTwo=substr($monsterDataRow['weakness'],7,1);
                            $separatorThree=null;

                            $weaknessString="
                            <img src=assets/resources/elements/" . $weaknessOne . ".png height='20' width='20'>
                                " . $separatorOne . "
                            <img src=assets/resources/elements/" . $weaknessTwo . ".png height='20' width='20'>
                                " . $separatorTwo . "
                            <img src=assets/resources/elements/" . $weaknessThree . ".png height='20' width='20'>";
                            break;
                        case "4":
                            $weaknessOne = substr($monsterDataRow['weakness'],0,3);
                            $weaknessTwo = substr($monsterDataRow['weakness'],4,3);
                            $weaknessThree = substr($monsterDataRow['weakness'],8,3);
                            $weaknessFour = substr($monsterDataRow['weakness'],12,3);
                            $separatorOne=substr($monsterDataRow['weakness'],3,1);
                            $separatorTwo=substr($monsterDataRow['weakness'],7,1);
                            $separatorThree=substr($monsterDataRow['weakness'],11,1);

                            $weaknessString="
                            <img src=assets/resources/elements/" . $weaknessOne . ".png height='20' width='20'>
                                " . $separatorOne . "
                            <img src=assets/resources/elements/" . $weaknessTwo . ".png height='20' width='20'>
                                " . $separatorTwo . "
                            <img src=assets/resources/elements/" . $weaknessThree . ".png height='20' width='20'>
                                " . $separatorThree . "
                            <img src=assets/resources/elements/" . $weaknessFour . ".png height='20' width='20'>";
                            break;
                }

                //set BG color to gray for poison or blast immune
                if ($monsterDataRow['poisonDamage']==0) {
                    $poisonBg = '#DFDFDF';
                    $poisonFont = '#DFDFDF';
                } else {
                    $poisonBg = null;
                    $poisonFont = '#000000';
                }

                if ($monsterDataRow['blastDamage']==0) {
                    $blastBg = '#DFDFDF';
                    $blastFont = '#DFDFDF';
                } else {
                    $blastBg = null;
                    $blastFont = '#000000';
                }


                //******
                //grab area data
                //******

                $sql = 'SELECT *
                        FROM areas
                        WHERE id=' . $monsterDataRow['locationId'];
                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; area error');
                $monsterAreaRow=mysqli_fetch_array($result);



                //******
                //create Monster table
                //******
                echo("<table class='data'>");
                echo("<tr class='dataTh'>
                     <th>Name</th>
                     <th>Weakness</th>
                     <th><img src=assets/resources/elements/POI.png height='20' width='20'> Damage</th>
                     <th><img src=assets/resources/elements/POI.png height='20' width='20'> Duration</th>
                     <th><img src=assets/resources/elements/POI.png height='20' width='20'> Tolerance<br>Initial/Step/Max</th>
                     <th><img src=assets/resources/elements/BLA.png height='20' width='20'> Damage</th>
                     <th><img src=assets/resources/elements/BLA.png height='20' width='20'> Tolerance<br>Initial/Step/Max</th>
                     <th><img src=assets/resources/tools/pitfall.png height='20' width='20'>/<img src=assets/resources/tools/shock.png height='20' width='20'></th>
                     <th><img src=assets/resources/tools/flash.png height='20' width='20'>/<img src=assets/resources/tools/sonic.png height='20' width='20'>/<img src=assets/resources/tools/dung.png height='20' width='20'></th>
                     <th><img src=assets/resources/tools/meat.png height='20' width='20'></th>
                     </tr>");
                echo("<tr>"); //new table row
                echo
                    "<td><center> " . $monsterDataRow['monster'] . "</center>"
                    ."<td><center> $weaknessString </center>"
                    ."<td BGCOLOR='" . $poisonBg . "'><center><font color=" . $poisonFont . ">" . $monsterDataRow['poisonDamage'] . "</center></font></td>"
                    ."<td BGCOLOR='" . $poisonBg . "'><center><font color=" . $poisonFont . ">" . $monsterDataRow['poisonDuration'] . "</center></font></td>"
                    ."<td BGCOLOR='" . $poisonBg . "'><center><font color=" . $poisonFont . ">" . $monsterDataRow['poisonLimits'] . "</center></font></td>"
                    ."<td BGCOLOR='" . $blastBg . "'><center><font color=" . $blastFont . ">" . $monsterDataRow['blastDamage'] . "</center></font></td>"
                    ."<td BGCOLOR='" . $blastBg . "'><center><font color=" . $blastFont . ">" . $monsterDataRow['blastLimits'] . "</center></font></td>"
                    ."<td><center> " . $monsterDataRow['pitfallTrap'] . "/" . $monsterDataRow['shockTrap'] . "</center>"
                    ."<td><center> " . $monsterDataRow['flashBomb'] . "/" . $monsterDataRow['sonicBomb'] . "/" . $monsterDataRow['dungBomb'] . "</center>"
                    ."<td><center> " . $monsterDataRow['meat'] . "</center>"
                                        ;
                echo("</table>");
                echo("<br>");
                //******
                //create monster area table
                //******
                echo("<table class='data'>");
                echo("<tr class='dataTh'>
                     <th>Location</th>
                     <th>Start Area</th>
                     <th>Move Areas</th>
                     </tr>");
                echo("<tr>"); //new table row
                echo
                    "<td><center> " . $monsterAreaRow['name'] . "</center>"
                    ."<td><center> " . $monsterDataRow['startArea'] . "</center>"
                    ."<td><center> " . $monsterDataRow['moveAreas'] . "</center>";
                echo("</table>");
            }
            //*****************************************
            //END MONSTERS SECTION
            //*****************************************



            //*****************************************
            //MAPS SECTION - area dropdown definition
            //*****************************************
            //******
            //area dropdown definition
            //******

            echo ("<input type='hidden' value='1' name='area'>");

            if($mapCheck=='checked'){
                echo ("<H2>Maps</H2>");

                $sql="SELECT id, name, map FROM areas WHERE map IS NOT NULL ORDER BY id";
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; area dropdown error');
                echo "<select name='area' onchange='this.form.submit()' value='' >Area</option>";
                while($row=mysqli_fetch_array($result))
                {
                    if($row[id]==$area) {
                        echo "<option value=$row[id] selected>$row[name]</option>";
                    } else {
                        echo "<option value=$row[id]>$row[name]</option>";
                    }
                }
                echo "</select>";
                echo("<br>");

                //******
                //MAPS - image
                //******

                echo("<img src=assets/resources/maps/".$area.".png>");
            }
            //*****************************************
            //END MAPS SECTION
            //*****************************************



            //*****************************************
            //ITEM SECTION
            //*****************************************
            echo ("<input type='hidden' name='itemName'>");

            if($itemCheck=='checked'){
                echo ("<H2>Item Search</H2>");

                echo("<input type='hidden' value='0' name='itemName'>");
                echo("<input type='text' placeholder='Item Name' value='" . $itemName . "' name='itemName' />"); //text field, weapon search

                //******
                //grab item data
                //******
                if ($itemName)
                {
                    $sql = 'SELECT name, source
                            FROM items
                            WHERE name like "%' . $itemName . '%"';
                    $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; item table error');
                    $row=mysqli_fetch_array($result);

                //******
                //create item table
                //******

                    echo "<br><br>";
                    echo("<table class='data'>");
                    echo("<tr class='dataTh'>
                         <th>Item</th>
                         <th>Source</th>
                         </tr>");
                    while($row=mysqli_fetch_array($result))
                    {
                        echo("<tr>"); //new table row
                        echo "<td>" . $row['name'];
                        echo "<td>" . $row['source'];
                    }
                    echo("</table>");
                }
            }
            //*****************************************
            //END ITEM SECTION
            //*****************************************



            //*****************************************
            //WEAPON SECTION
            //*****************************************

            //default values, to handle post when weapon checkbox is re-checked
            echo ("<input type='hidden' value='greatsword' name='weaponType'>");
            echo ("<input type='hidden' placeholder='Weapon Name Search' name='weaponName'>");
            echo ("<input type='hidden' value='%' name='elem'>");
            echo ("<input type='hidden' value='0' name='createShow'>");
            echo ("<input type='hidden' value='0' name='finalShow'>");
            echo ("<input type='hidden' value='0' name='awakenShow'>");

            if($weaponCheck=='checked'){
                echo ("<H2>Weapons</H2>");

                //define dropdown
                $sql="SELECT type,id FROM weapon_types order by weaponTypeId";
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; weapon dropdown error');
                $weaponDropdownString = "<select name='weaponType' onchange='this.form.submit()' value='' >Weapon Type</option>";
                while($row=mysqli_fetch_array($result)){
                    if($row['id']==$weaponType){
                        $weaponDropdownString .= "<option value=$row[id] selected>$row[type]</option>";
                    } else{
                        $weaponDropdownString .= "<option value=$row[id]>$row[type]</option>";
                    }
                }
                $weaponDropdownString .= "</select>";


                echo("<table class='nav'>");
                echo("<tr>
                     <th class='navTdTh'>$weaponDropdownString</th>
                     <th class='navTdTh'>[Create]</th>
                     <th class='navTdTh'>[Final]</th>
                     <th class='navTdTh'>[Awaken]</th>
                     </tr>");
                echo("<tr>");
                echo
                    "<td class='navTdTh'><input type='text' placeholder='Weapon Name' value='" . $weaponName . "' name='weaponName' />"
                    ."<td class='navTdTh'><center><input type='checkbox' value='1' " . $createCheck . " name='createShow' onchange='this.form.submit()'/></center>"
                    ."<td class='navTdTh'><center><input type='checkbox' value='1' " . $finalCheck . " name='finalShow' onchange='this.form.submit()'/></center>"
                    ."<td class='navTdTh'><center><input type='checkbox' value='1' " . $awakenCheck . " name='awakenShow' onchange='this.form.submit()'/></center>";
                echo("</table>");
                echo("<br>");


                //******
                //Inputs
                //******

                //text field, weapon search
                //echo "<input type='text' placeholder='Weapon Name' value='" . $weaponName . "' name='weaponName' />";

                //rarity sliders
                echo "Rarity: " . $minRaritySelect . " - " . $maxRaritySelect;
                echo "<br>";
                echo "Min Rarity: ";

                echo "<input type='range' min=1 max=10 value=" . $minRaritySelect . " step=1.0 id='minRange' name='minRaritySelect' onchange='updateRarityMin(this.value, maxRaritySelect.value); this.form.submit();' />";

                echo "<br>";
                echo "Max Rarity: ";

                echo "<input type='range' min=1 max=10 value=" . $maxRaritySelect . " step=1.0 id='maxRange' name='maxRaritySelect' onchange='updateRarityMax(minRaritySelect.value, this.value); this.form.submit();' />";
                echo "<br>";

                //Element Radios
                echo "<br>";
                echo "<input type='radio' id='all' value='%' name='elem' onchange='this.form.submit()'" . $allCheck . ">";
                echo "ALL";
                echo " | ";
                echo "<input type='radio' id='raw' value='RAW' name='elem' onchange='this.form.submit()'" . $rawCheck . ">";
                echo "<img src=assets/resources/elements/RAW.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='fire' value='FIR' name='elem' onchange='this.form.submit()'" . $firCheck . ">";
                echo "<img src=assets/resources/elements/FIR.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='water' value='WAT' name='elem' onchange='this.form.submit()'" . $watCheck . ">";
                echo "<img src=assets/resources/elements/WAT.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='thunder' value='THU' name='elem' onchange='this.form.submit()'" . $thuCheck . ">";
                echo "<img src=assets/resources/elements/THU.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='ice' value='ICE' name='elem' onchange='this.form.submit()'" . $iceCheck . ">";
                echo "<img src=assets/resources/elements/ICE.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='dragon' value='DRA' name='elem' onchange='this.form.submit()'" . $draCheck . ">";
                echo "<img src=assets/resources/elements/DRA.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='paralysis' value='PAR' name='elem' onchange='this.form.submit()'" . $parCheck . ">";
                echo "<img src=assets/resources/elements/PAR.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='poison' value='POI' name='elem' onchange='this.form.submit()'" . $poiCheck . ">";
                echo "<img src=assets/resources/elements/POI.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='sleep' value='SLE' name='elem' onchange='this.form.submit()'" . $sleCheck . ">";
                echo "<img src=assets/resources/elements/SLE.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='blast' value='BLA' name='elem' onchange='this.form.submit()'" . $blaCheck . ">";
                echo "<img src=assets/resources/elements/BLA.png height='20' width='20'>";
                echo "<br><br>";
                //echo("<a href='#top'>Back to top</a>");

                //******
                //grab weapon data
                //******
                $sql = 'SELECT id, name, rare, attack, element, elementValue, slot, affinity, own, parentId, hierarchy, awaken, special, created, final
                        FROM ' . $weaponType . '
                        WHERE instr(name,"' . $weaponName . '")>0
                        AND rare BETWEEN ' . $minRaritySelect . ' AND ' . $maxRaritySelect . '
                        AND element LIKE \'%' . $elemFilter . '%\'
                        AND (' . $createFilter . '=0 OR created=' . $createFilter .')
                        AND (' . $finalFilter . '=0 OR final=' . $finalFilter .')
                        ORDER BY id';
                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; weapon table error');


                //******
                //create weapon table
                //******
                echo("<table class='data'>");
                echo("<tr class='dataTh'>
                     <th>Armory</th>
                     <th>Wishlist</th>
                     <th>Name</th>
                     <th>Rarity</th>
                     <th>Attack</th>
                     <th>Element</th>
                     <th>Element Value</th>
                     <th>Slot</th>
                     <th>Affinity</th>
                     <th>Special</th>
                     </tr>");
                    //<th>Hierarchy</th>
                    //<th>ID</th>


                //******
                //output data to weapon table
                //******
                while($weaponsRow=mysqli_fetch_array($result))
                {

                    //******
                    //prep variables
                    //******
                    $weaponName=str_replace('\'','\'\'',$weaponsRow['name']);

                    //******
                    //armory operations
                    //******

                    //check post, add to armory table if checked, remove from armory if unchecked
                    if((isset($_POST['own'.$weaponsRow['id']])) && $_POST['own'.$weaponsRow['id']]==1){
                        //add to armory table
                        $sql = "INSERT IGNORE INTO armory (id, name)
                                VALUES ('$weaponsRow[id]','$weaponName')";
                        $armoryInsert = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory error');
                    } else {
                        //$sql = "DELETE FROM armory
                        //    WHERE id=$weaponsRow[id]";
                        //$armoryDelete = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory error');
                    }

                    //check armory for weapon id
                    $sql = 'SELECT *
                            FROM armory
                            WHERE id=' . $weaponsRow['id'];
                    $armoryResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory error');
                    $armoryRow=mysqli_fetch_array($armoryResult);

                    //set checked if exists in armory
                    if( $armoryRow['id'] ){$armoryCheck = 'checked';
                    } else{$armoryCheck = null;}

                    //******
                    //wishlist operations
                    //******

                    //check post, add to wishlist table if checked, remove from armory if unchecked
                    if((isset($_POST['wish'.$weaponsRow['id']])) && $_POST['wish'.$weaponsRow['id']]==1){
                        //add to armory table
                        $sql = "INSERT IGNORE INTO wishlist (id, name)
                                VALUES ('$weaponsRow[id]','$weaponName')";
                        $wishlistInsert = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory error');
                    } else {
                        //this calls when first loading the site,
                        //when weapon type is switched,
                        //or when weapon visibility is toggled
                        $sql = "DELETE FROM wishlist
                            WHERE id=$weaponsRow[id]";
                        $wishlistDelete = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory error');
                    }


                    $sql = 'SELECT *
                            FROM wishlist
                            WHERE id=' . $weaponsRow['id'];
                    $wishlistResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; wishlist error');
                    $wishlistRow=mysqli_fetch_array($wishlistResult);

                    if($wishlistRow['id']){$wishlistCheck='checked';
                    } else{$wishlistCheck=null;}

                    //slot display
                    switch($weaponsRow['slot']) {
                        case "0": $slot = "---"; break;
                        case "1": $slot = "o--"; break;
                        case "2": $slot = "oo-"; break;
                        case "3": $slot = "ooo"; break;}

                    //awaken element background
                    if ($weaponsRow['awaken']==1) {$elemBg = '#CGCGCG';
                    } else {$elemBg = null;}

                    //affinity background
                    if ($weaponsRow['affinity']<0) {$affinityBg = '#FC9097';
                    } elseif($weaponsRow['affinity']>0) {$affinityBg = '#90F8FC';
                    } else {$affinityBg = null;}
                    $affinity=$weaponsRow['affinity']*100;
                    
                    //rare color
                    $sql = 'SELECT color
                            FROM rarecolors
                            WHERE rare=' . $weaponsRow['rare'];
                    $colorResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; color table error');
                    $rareColorsRow=mysqli_fetch_array($colorResult);

                    //create check
                    if ($weaponsRow['created']==1) {$createFlag = '<sup>C</sup>';
                    } else {$createFlag = null;}

                    //final check
                    if ($weaponsRow['final']==1) {$finalFlag = '<sup>F</sup>';
                    } else {$finalFlag = null;}

                    //show awaken as raw if checkbox unchecked
                    if ($awakenFilter==1){
                        $elemType=$weaponsRow['element'];
                        $elemValue=$weaponsRow['elementValue'];
                    } else{
                        if ($weaponsRow['awaken']==1){
                            $elemType='RAW';
                            $elemValue=null;
                            $elemBg=null;
                        } else{
                            $elemType=$weaponsRow['element'];
                            $elemValue=$weaponsRow['elementValue'];
                        }
                    }

                    //$weaponName=str_replace('\'','*',$weaponsRow['name']);


                    echo("<tr>"); //new table row
                    echo
                        //"<td>" . $row['id'] . "</td>" //table data tag
                        "<input type='hidden' value='0' name='own" . $weaponsRow['id'] . "'/>"
                        ."<input type='hidden' value='0' name='wish" . $weaponsRow['id'] . "'/>"
                        ."<td><center><input type='checkbox' value='1' $armoryCheck name='own" . $weaponsRow['id'] . "' onchange='this.form.submit()'/></center>"
                        ."<td><center><input type='checkbox' value='1'  $wishlistCheck name='wish" . $weaponsRow['id'] . "' onchange='this.form.submit()'/></center>"
                        .'<td><input type="submit" name="weaponPath" value="'.$weaponsRow['name'].'" class="button" >'
                        //."<td><a href='index.php?weaponPath=$weaponsRow[id]'>$weaponsRow[name]</a> $createFlag $finalFlag"
                        //' onClick='javascript:popUp(\"path.php?weaponType=$weaponType&id=$weaponsRow[id]\")'> $weaponsRow[name]</a> $createFlag $finalFlag" //weapon Name
                        ."<td BGCOLOR='$rareColorsRow[color]'><center>$weaponsRow[rare]</center></td>"
                        ."<td><center>$weaponsRow[attack]</center></td>"
                        ."<td BGCOLOR='$elemBg'><center><img src=assets/resources/elements/$elemType.png height='20' width='20'></center></td>"
                        ."<td><center>$elemValue</center></td>"
                        //."<td BGCOLOR='$elemBg'><center><img src=assets/resources/elements/$weaponsRow[element].png height='20' width='20'></center></td>"
                        //."<td><center>$weaponsRow[elementValue]</center></td>"
                        ."<td><center>$slot</center></td>"
                        ."<td BGCOLOR='$affinityBg'><center>$affinity%</center></td>"
                        ."<td>$weaponsRow[special]</td>"
                        ;
                }
                echo("</table>");
            }
            //*****************************************
            //END WEAPON SECTION
            //*****************************************
            echo("</div>"); //section
            echo("</div>"); //wrapper

            echo("<div id='footer'>");

                echo("<a href='#top'>Back to top</a>");

            echo("</div>"); //wrapper
        ?>
    </form>
</body>
</html>
<!doctype html>
<html>
<head>
    <title>Inventory</title>
    <link rel="stylesheet" type="text/css" href="mh4u_css_styles.css">
    <script type="text/javascript" src="mh4u_jsFunctions.js"></script>
</head>
<body>
    <script src="mh4u_jquery.js"></script>
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

                if($_POST['weaponShow']==1) {$weaponCheck='checked';
                } else {$weaponCheck='';}
                $weaponName=$_POST['weaponName'];
                $weaponType=$_POST['weaponType'];
                if($_POST['upgrade']==1) {$upgradeCheck='checked';
                } else {$upgradeCheck='';}

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
                //this only calls on load

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
                $weaponCheck='checked';
                $weaponName=null;
                $weaponType='greatsword';
                $upgradeCheck='';

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
                $mapCheck='';
                $area=1;

                $monsterCheck='';
                $monster=1;

                $itemCheck='';
                $itemName=null;

                $weaponCheck='checked';

                $weaponName=null;
                $weaponType='greatsword';
                $upgradeCheck='';

                $createCheck='';
                $createFilter=0;
                $finalCheck='';
                $finalFilter=0;

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
            //SAVE BUTTON HANDLER SECTION
            //*****************************************
            if(isset($_POST['SaveButton']))
            {
                //counts rows in table of weapon type
                $sql="SELECT COUNT(*) FROM " . $weaponType . ";";
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; weapon type count error');
                $countArray=mysqli_fetch_array($result);
                $count=$countArray[0];
                
                $sql="CREATE TABLE IF NOT EXISTS temp (
                    Id int(5) NOT NULL AUTO_INCREMENT,
                    Name varchar(40) NOT NULL,
                    Own boolean NOT NULL,
                    PRIMARY KEY (id)
                    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1;";
                mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; temp table error');
                
                
                //******
                //consumption of parent weapon
                //******
                if($upgradeCheck=='checked')
                {
                
                    for($id=1;$id<=$count;$id++)
                    {
                        //check if current id exists in post
                        if(isset($_POST['row'.$id]))
                        {
                            $own=$_POST['row'.$id];
                        } else {
                            continue;
                        }
                        
                        if ($own == 1)
                        {
                            $sql="SELECT Own, name FROM $weaponType WHERE id = $id;"; //checks ownership of consuming weapon
                            $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; ownership check 1 error');
                            $own_check=mysqli_fetch_array($result);
                            
                            if($own_check[0]==0) //will only call consumed item update script if the consuming weapon was previously unchecked
                            {
                                $sql="SELECT parentId FROM $weaponType WHERE id = $id;";
                                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; parentId check error');
                                $update_target=mysqli_fetch_array($result);
    
                                $escaped_update_target = mysqli_real_escape_string($mysqli, $update_target[0]);
    
                                $sql="SELECT Own FROM $weaponType WHERE name='$escaped_update_target';"; //returns ownership of consumption target weapon
                                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; ownership check 2 error');
                                $consumed_weapon_check=mysqli_fetch_array($result);
    
                                if($consumed_weapon_check[0]==1) //if consumption target weapon is currently checked
                                {
                                    $sql="INSERT INTO temp (Name, Own) VALUES ('$escaped_update_target','0');";
                                    mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; insert to temp error');
                                    echo("$own_check[1] updated; $update_target[0] removed from inventory<br>");
                                }
                            }
                        }
                    }
                    
                }
                
                //******
                //set own? check updates
                //******
                for($id=1;$id<=$count;$id++) //updates target weapon type table per user's checkbox selections
                {
                    if(isset($_POST['row'.$id]))
                    {
                        $own=$_POST['row'.$id];
                    } else {
                        continue;
                    }
                    
                    $sql="UPDATE $weaponType SET Own= '$own' WHERE id = $id;";
                    //echo($sql . "<br><br>");
                    mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; setting ownership error');
                }
                
                
                //check temp to see if match
                $sql="SELECT tm.name, tm.own FROM temp tm, $weaponType wt WHERE tm.name=wt.name;";
                //echo($sql . "<br>");
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; check for own match error');
                while($ownRow=mysqli_fetch_array($result))
                {
                    //echo($row['name'] . "<br>");
                    $update_this=$ownRow['name'];
                    $escaped_update_this = mysqli_real_escape_string($mysqli, $update_this);
                    //echo($row['own'] . "<br>");
                    $update_own=$ownRow['own'];
                    //if match, update $weaponType with Own from temp
                    $sql="UPDATE $weaponType SET Own = $update_own WHERE name='$escaped_update_this';";
                    //echo($sql . "<br><br>");
                    mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; update weapontype error');
                }
                $sql="DROP TABLE IF EXISTS temp;";
                //echo($sql . "<br>");
                mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; drop temp table error');
                
            } 
            //*****************************************
            //END SAVE BUTTON HANDLER SECTION
            //*****************************************



            //*****************************************
            //PREFERENCES SECTION
            //*****************************************
            echo "<input type='hidden' value='0' name='mapShow' />"; //passes 0 if checkbox unchecked
            echo "<input type='hidden' value='0' name='monsterShow' />";
            echo "<input type='hidden' value='0' name='itemShow' />";
            echo "<input type='hidden' value='0' name='weaponShow' />";
            echo "<input type='submit' value='Search' name='SearchButton' id='defaultActionButton' style='display:none;' />"; //button for enter listener


            echo("<table border='0'>");
            echo("<tr>
                 <th>Preferences</th>
                 <th>Monsters</th>
                 <th>Maps</th>
                 <th>Items</th>
                 <th>Weapons</th>
                 </tr>");
            echo("<tr>");
            echo
                "<td><center><input type='submit' value='Reset All Fields' name='ResetButton' /></center>"
                ."<td><center><input type='checkbox' value='1' " . $monsterCheck . " name='monsterShow' onchange='this.form.submit()'/></center>"
                ."<td><center><input type='checkbox' value='1' " . $mapCheck . " name='mapShow' onchange='this.form.submit()'/></center>"
                ."<td><center><input type='checkbox' value='1' " . $itemCheck . " name='itemShow' onchange='this.form.submit()'/></center>"
                ."<td><center><input type='checkbox' value='1' " . $weaponCheck . " name='weaponShow' onchange='this.form.submit()'/></center>";

            echo("</table>");
            echo("<br>");
            //*****************************************
            //END PREFERENCES SECTION
            //*****************************************



            //*****************************************
            //MONSTERS SECTION
            //*****************************************

            //******
            //monster dropdown definition
            //******

            echo ("<input type='hidden' value='1' name='monster'>");

            if($monsterCheck=='checked'){
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
                echo "<br>";

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
                            <img src=resources/elements/" . $weaknessOne . ".png height='20' width='20'>";
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
                            <img src=resources/elements/" . $weaknessOne . ".png height='20' width='20'>
                                " . $separatorOne . "
                            <img src=resources/elements/" . $weaknessTwo . ".png height='20' width='20'>";
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
                            <img src=resources/elements/" . $weaknessOne . ".png height='20' width='20'>
                                " . $separatorOne . "
                            <img src=resources/elements/" . $weaknessTwo . ".png height='20' width='20'>
                                " . $separatorTwo . "
                            <img src=resources/elements/" . $weaknessThree . ".png height='20' width='20'>";
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
                            <img src=resources/elements/" . $weaknessOne . ".png height='20' width='20'>
                                " . $separatorOne . "
                            <img src=resources/elements/" . $weaknessTwo . ".png height='20' width='20'>
                                " . $separatorTwo . "
                            <img src=resources/elements/" . $weaknessThree . ".png height='20' width='20'>
                                " . $separatorThree . "
                            <img src=resources/elements/" . $weaknessFour . ".png height='20' width='20'>";
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
                echo("<table border='1'>");
                echo("<tr>
                     <th>Name</th>
                     <th>Weakness</th>
                     <th><img src=resources/elements/POI.png height='20' width='20'> Damage</th>
                     <th><img src=resources/elements/POI.png height='20' width='20'> Duration</th>
                     <th><img src=resources/elements/POI.png height='20' width='20'> Tolerance<br>Initial/Step/Max</th>
                     <th><img src=resources/elements/BLA.png height='20' width='20'> Damage</th>
                     <th><img src=resources/elements/BLA.png height='20' width='20'> Tolerance<br>Initial/Step/Max</th>
                     <th><img src=resources/tools/pitfall.png height='20' width='20'>/<img src=resources/tools/shock.png height='20' width='20'></th>
                     <th><img src=resources/tools/flash.png height='20' width='20'>/<img src=resources/tools/sonic.png height='20' width='20'>/<img src=resources/tools/dung.png height='20' width='20'></th>
                     <th><img src=resources/tools/meat.png height='20' width='20'></th>
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

                //******
                //create monster area table
                //******
                echo("<table border='1'>");
                echo("<tr>
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
                echo("<br>");
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

                $sql="SELECT id, name, map FROM areas WHERE map IS NOT NULL ORDER BY id";
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; area dropdown error');
                echo "<select name='area' onchange='this.form.submit()' value=''>Area</option>";
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
                echo("<img src=resources/maps/".$area.".png height='500' width='800'>");
            }
            echo("<br>");
            //*****************************************
            //END MAPS SECTION
            //*****************************************



            //*****************************************
            //ITEM SECTION
            //*****************************************
            echo ("<input type='hidden' placeholder='Item Name' name='itemName'>");

            if($itemCheck=='checked'){

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
                    echo("<table border='1'>");
                    echo("<tr>
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
                echo "<br><br>";
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
            echo ("<input type='hidden' value='0' name='upgrade'>");
            echo ("<input type='hidden' value='0' name='createShow'>");
            echo ("<input type='hidden' value='0' name='finalShow'>");

            if($weaponCheck=='checked'){

                //define dropdown
                $sql="SELECT type,id FROM weapon_types order by weaponTypeId";
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; weapon dropdown error');
                $weaponDropdownString = "<select name='weaponType' onchange='this.form.submit()' value=''>Weapon Type</option>";
                while($row=mysqli_fetch_array($result)){
                    if($row['id']==$weaponType){
                        $weaponDropdownString .= "<option value=$row[id] selected>$row[type]</option>";
                    } else{
                        $weaponDropdownString .= "<option value=$row[id]>$row[type]</option>";
                    }
                }
                $weaponDropdownString .= "</select>";


                echo("<table border='0'>");
                echo("<tr>
                     <th>$weaponDropdownString</th>
                     <th>Create</th>
                     <th>Final</th>
                     </tr>");
                echo("<tr>");
                echo
                    "<td><input type='text' placeholder='Weapon Name' value='" . $weaponName . "' name='weaponName' />"
                    ."<td><center><input type='checkbox' value='1' " . $createCheck . " name='createShow' onchange='this.form.submit()'/></center>"
                    ."<td><center><input type='checkbox' value='1' " . $finalCheck . " name='finalShow' onchange='this.form.submit()'/></center>";
                echo("</table>");
                echo("<br>");


                //******
                //Inputs
                //******

                //text field, weapon search
                //echo "<input type='text' placeholder='Weapon Name' value='" . $weaponName . "' name='weaponName' />";
                echo "<br><br>";

                //rarity sliders
                echo "<input type='text' id='rarity' value='Rarity: " . $minRaritySelect . " - " . $maxRaritySelect . "' style='border: 0px' readonly>";
                echo "<br>";
                echo "<input type='text' id='minRarity' value='Min Rarity:' style='border: 0px' readonly size=6>";

                echo "<input type='range' min=1 max=10 value=" . $minRaritySelect . " step=1.0 id='minRange' name='minRaritySelect' onchange='updateRarityMin(this.value, maxRaritySelect.value); this.form.submit();' />";

                echo "<br>";
                echo "<input type='text' id='maxRarity' value='Max Rarity:' style='border: 0px' readonly size=6>";

                echo "<input type='range' min=1 max=10 value=" . $maxRaritySelect . " step=1.0 id='maxRange' name='maxRaritySelect' onchange='updateRarityMax(minRaritySelect.value, this.value); this.form.submit();' />";
                echo "<br>";

                //Element Radios
                echo "<br>";
                echo "<input type='radio' id='all' value='%' name='elem' onchange='this.form.submit()'" . $allCheck . ">";
                echo "<input type='text' value='ALL' style='border: 0px' readonly size=1>";
                echo " | ";
                echo "<input type='radio' id='raw' value='RAW' name='elem' onchange='this.form.submit()'" . $rawCheck . ">";
                echo "<img src=resources/elements/RAW.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='fire' value='FIR' name='elem' onchange='this.form.submit()'" . $firCheck . ">";
                echo "<img src=resources/elements/FIR.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='water' value='WAT' name='elem' onchange='this.form.submit()'" . $watCheck . ">";
                echo "<img src=resources/elements/WAT.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='thunder' value='THU' name='elem' onchange='this.form.submit()'" . $thuCheck . ">";
                echo "<img src=resources/elements/THU.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='ice' value='ICE' name='elem' onchange='this.form.submit()'" . $iceCheck . ">";
                echo "<img src=resources/elements/ICE.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='dragon' value='DRA' name='elem' onchange='this.form.submit()'" . $draCheck . ">";
                echo "<img src=resources/elements/DRA.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='paralysis' value='PAR' name='elem' onchange='this.form.submit()'" . $parCheck . ">";
                echo "<img src=resources/elements/PAR.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='poison' value='POI' name='elem' onchange='this.form.submit()'" . $poiCheck . ">";
                echo "<img src=resources/elements/POI.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='sleep' value='SLE' name='elem' onchange='this.form.submit()'" . $sleCheck . ">";
                echo "<img src=resources/elements/SLE.png height='20' width='20'>";
                echo " | ";
                echo "<input type='radio' id='blast' value='BLA' name='elem' onchange='this.form.submit()'" . $blaCheck . ">";
                echo "<img src=resources/elements/BLA.png height='20' width='20'>";

                //Own update inputs
                echo " ";
                echo "<br><br>";
                echo "<input type='submit' value='Save' name='SaveButton' />"; //button
                echo "&nbsp;&nbsp;<input type='checkbox' value='1' " . $upgradeCheck . " name='upgrade' /> Update Mode
                    (This will uncheck parent weapon when target weapon's 'own' checkbox is checked)"; //passes 1 if checkbox checked


                //******
                //grab weapon data
                //******
                $sql = 'SELECT id, name, rare, attack, element, elementValue, slot, affinity, own, parentId, hierarchy, awaken, special, created, final
                        FROM ' . $weaponType . '
                        WHERE instr(name,"' . $weaponName . '")>0
                        AND rare BETWEEN ' . $minRaritySelect . ' AND ' . $maxRaritySelect . '
                        AND element LIKE \'%' . $elemFilter . '%\'
                        AND (' . $createFilter . '=0 or CREATED=' . $createFilter .')
                        AND (' . $finalFilter . '=0 or FINAL=' . $finalFilter .')
                        ORDER BY id';
                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; weapon table error');


                //******
                //create weapon table
                //******
                echo("<table border='1'>");
                echo("<tr>
                     <th>Own?</th>
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
                    if($weaponsRow['own'] == 1){$checkCheck = 'checked';
                    } else{$checkCheck = null;}

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

                    //prep weapon name string for popup URL
                    //$weaponName=str_replace('+','*',str_replace('\'','!',$weaponsRow['name']));
                    
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

                    echo("<tr>"); //new table row
                    echo
                        //"<td>" . $row['id'] . "</td>" //table data tag
                        "<input type='hidden' value='0' name='row" . $weaponsRow['id'] . "'/>"
                        ."<td><center><input type='checkbox' value='1' $checkCheck name='row" . $weaponsRow['id'] . "'/></center>"
                        ."<td><a href='#' onClick='javascript:popUp(\"path.php?weaponType=$weaponType&id=$weaponsRow[id]\")'> $weaponsRow[name]</a> $createFlag $finalFlag" //weapon Name
                        ."<td BGCOLOR='$rareColorsRow[color]'><center>$weaponsRow[rare]</center></td>"
                        ."<td><center>$weaponsRow[attack]</center></td>"
                        ."<td BGCOLOR='$elemBg'><center><img src=resources/elements/$weaponsRow[element].png height='20' width='20'></center></td>"
                        ."<td><center>$weaponsRow[elementValue]</center></td>"
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

        ?>
    </form>
</body>
</html>
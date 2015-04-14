<!doctype html>
<html>
<head>
    <title>MH4U Weapons</title>
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/main.css">
    <script type="text/javascript" src="assets/scripts/mh4u_jsFunctions.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src='assets/scripts/jquery_zoom.js'></script>
    <script src="assets/scripts/mh4u_jquery.js"></script>
</head>
<body>
    <div id='navigation'>
        <a href="index.php">Weapons</a>
        <a href="monsters.php">Monsters</a>
        <a href="maps.php">Maps</a>
        <a href="items.php">Items</a>
        <a href="armor.php">Armor</a>
        <a href="skills.php">Skills</a>
    </div>
    
    <form method=POST name="form">

    <?php require_once('db_connect.php'); ?>
    <input type='hidden' name='postCheck'>

    <?php
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
        //POST VARIABLE CHECK
        //*****************************************

        if(isset($_POST['postCheck'])) {
            //this calls every post

            //weapon path
            if(isset($_POST['weaponPath'])){
                $weaponPath=$_POST['weaponPath'];
            } else {
                $weaponPath=null;
            }

            //weapons
            if($_POST['createShow']==1){ $createCheck='checked'; $createFilter=1;
            } else { $createCheck=''; $createFilter=0;}

            if($_POST['finalShow']==1){ $finalCheck='checked'; $finalFilter=1;
            } else { $finalCheck=''; $finalFilter=0;}

            if($_POST['awakenShow']==1){ $awakenCheck='checked'; $awakenFilter=1;
            } else { $awakenCheck=''; $awakenFilter=0;}


            if(isset($_POST['searchClick'])){
                $weaponSearch=str_replace('\'','&#39;',$_POST['searchClick']);
            } else {$weaponSearch=str_replace('\'','&#39;',$_POST['weaponName']);}

            if(isset($_POST['wishDelete'])){
                $wishDelete=str_replace('\'','&#39;',$_POST['wishDelete']);
                $sql = "DELETE FROM wishlist
                        WHERE name like '$wishDelete'";
                $resultWishDelete = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; wish delete error');
            }

            if(isset($_POST['armoryDelete'])){
                $armoryDelete=str_replace('\'','&#39;',$_POST['armoryDelete']);
                $sql = "DELETE FROM armory
                        WHERE name like '$armoryDelete'";
                $resultArmoryDelete = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; wish delete error');
            }

            if(isset($_POST['weaponImage'])) {
                $weaponType=$_POST['weaponImage'];
            } else {$weaponType=$_POST['weaponType'];
            }

            if(isset($_POST['minRaritySelect'])) {
                $minRaritySelect=$_POST['minRaritySelect'];
                $maxRaritySelect=$_POST['maxRaritySelect'];
            } else {
                $minRaritySelect=1;
                $maxRaritySelect=10;
            }

            if(isset($_POST['elementImage'])) {
                $elemFilter=$_POST['elementImage'];
            } else {
                $elemFilter=$_POST['elem'];
            }

            switch($elemFilter) {
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
            $weaponPath=null;

            //weapons
            $createCheck='';
            $createFilter=0;
            $finalCheck='';
            $finalFilter=0;
            $awakenCheck='checked';
            $awakenFilter=1;
            $weaponSearch=null;
            $weaponType=1;

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
            $weaponPath=null;

            $weaponCheck='checked';

            $weaponSearch=null;
            $weaponType=1;

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
        ?>


        <input type='submit' value='Search' name='SearchButton' id='defaultActionButton' style='display:none;' /> <!--button for enter listener-->


    <div id='wrapper'>
        <div id='section'>

        <!--default values, to handle post when weapon checkbox is re-checked-->
        <input type='hidden' value='1' name='weaponType'>
        <input type='hidden' placeholder='Weapon Name Search' name='weaponName'>
        <input type='hidden' value='%' name='elem'>
        <input type='hidden' value='0' name='createShow'>
        <input type='hidden' value='0' name='finalShow'>
        <input type='hidden' value='0' name='awakenShow'>

        <H2>Weapons</H2>
        <td class='navTdTh'><center><input type='submit' value='Reset All Fields' name='ResetButton'/></center>

        <?php
            //define dropdown
            $sql = "SELECT type, weapontypeid
                    FROM weapon_types
                    ORDER BY weaponTypeId";
            $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; weapon dropdown error');
            $weaponDropdownString = "<select name='weaponType' onchange='this.form.submit()' value='' >Weapon Type</option>";

            while($row=mysqli_fetch_array($result)){
                if($row['weapontypeid']==$weaponType){
                    $weaponDropdownString .= "<option value=$row[weapontypeid] selected>$row[type]</option>";
                } else{
                    $weaponDropdownString .= "<option value=$row[weapontypeid]>$row[type]</option>";
                }
            }
            $weaponDropdownString .= "</select>";
        ?>

        <table class='nav'>
        <center>
        <tr>
            <th class='navTdTh'><?php echo($weaponDropdownString) ?></th>
            <th class='navTdTh'>[Create]</th>
            <th class='navTdTh'>[Final]</th>
            <th class='navTdTh'>[Awaken]</th>
            </tr>
        <tr>
        <td class='navTdTh'><input type='text' placeholder='Weapon Name' value='<?php echo($weaponSearch) ?>' name='weaponName' />
        <td class='navTdTh'><input type='checkbox' value='1' <?php echo($createCheck) ?> name='createShow' onchange='this.form.submit()' class='checkbox'/>
        <td class='navTdTh'><input type='checkbox' value='1' <?php echo($finalCheck) ?> name='finalShow' onchange='this.form.submit()' class='checkbox'/>
        <td class='navTdTh'><input type='checkbox' value='1' <?php echo($awakenCheck) ?> name='awakenShow' onchange='this.form.submit()' class='checkbox'/>
        </center>
        </table>
        <br>


        <!--//******-->
        <!--//Inputs-->
        <!--//******-->

        <!--//rarity sliders-->
        Rarity: <?php echo($minRaritySelect . ' - ' . $maxRaritySelect); ?>
        <br>
        Min Rarity:
            <input type='range' min=1 max=10 value='<?php echo($minRaritySelect) ?>' step=1.0 id='minRange' name='minRaritySelect' onchange='updateRarityMin(this.value, maxRaritySelect.value)' class='range' >

        <br>
        Max Rarity:
            <input type='range' min=1 max=10 value='<?php echo($maxRaritySelect) ?>' step=1.0 id='maxRange' name='maxRaritySelect' onchange='updateRarityMax(minRaritySelect.value, this.value)' class='range' >
        <br>

        <!--//Element Radios-->

        <!--//All and raw-->
        <table class='nav'>
            <tr>
                <td class='navTdTh'><input type='radio' id='all' value='%' name='elem' onchange='this.form.submit();' <?php echo($allCheck) ?>>
                ALL |
                <td class='navTdTh'><input type='radio' id='raw' value='RAW' name='elem' onchange='this.form.submit()' <?php echo($rawCheck) ?>>
                <img src=assets/resources/elements/RAW.png height='20' width='20'>
            </tr>
        </table>

        <!--//elements-->
        <table class='nav'>
            <tr><td class='navTdTh'><input type='radio' id='fire' value='FIR' name='elem' onchange='this.form.submit()' <?php echo($firCheck) ?>>
                <img src=assets/resources/elements/FIR.png height='20' width='20'>
                 |
                <td class='navTdTh'><input type='radio' id='water' value='WAT' name='elem' onchange='this.form.submit()' <?php echo($watCheck) ?>>
                <img src=assets/resources/elements/WAT.png height='20' width='20'>
                 |
                <td class='navTdTh'><input type='radio' id='thunder' value='THU' name='elem' onchange='this.form.submit()' <?php echo($thuCheck) ?>>
                <img src=assets/resources/elements/THU.png height='20' width='20'>
                 |
                <td class='navTdTh'><input type='radio' id='ice' value='ICE' name='elem' onchange='this.form.submit()' <?php echo($iceCheck) ?>>
                <img src=assets/resources/elements/ICE.png height='20' width='20'>
                 |
                <td class='navTdTh'><input type='radio' id='dragon' value='DRA' name='elem' onchange='this.form.submit()' <?php echo($draCheck) ?>>
                <img src=assets/resources/elements/DRA.png height='20' width='20'>
            </tr>
        </table>

        <!--//status effects-->
        <table class='nav'>
            <tr><td class='navTdTh'><input type='radio' id='paralysis' value='PAR' name='elem' onchange='this.form.submit()' <?php echo($parCheck) ?>>
                <img src=assets/resources/elements/PAR.png height='20' width='20'>
                 |
                <td class='navTdTh'><input type='radio' id='poison' value='POI' name='elem' onchange='this.form.submit()' <?php echo($poiCheck) ?>>
                <img src=assets/resources/elements/POI.png height='20' width='20'>
                 |
                <td class='navTdTh'><input type='radio' id='sleep' value='SLE' name='elem' onchange='this.form.submit()' <?php echo($sleCheck) ?>>
                <img src=assets/resources/elements/SLE.png height='20' width='20'>
                 |
                <td class='navTdTh'><input type='radio' id='blast' value='BLA' name='elem' onchange='this.form.submit()' <?php echo($blaCheck) ?>>
                <img src=assets/resources/elements/BLA.png height='20' width='20'>
                <td class='navTdTh'>
            </tr>
        </table>

        <br>

        <!--//******-->
        <!--//grab weapon data-->
        <!--//******-->

        <?php
            $weaponSearch=str_replace('\'','&#39;',$weaponSearch);

            $sql = 'SELECT *
                    FROM weapondata
                    WHERE instr(name,"' . $weaponSearch . '")>0
                    AND rare BETWEEN ' . $minRaritySelect . ' AND ' . $maxRaritySelect . '
                    AND element LIKE \'%' . $elemFilter . '%\'
                    AND (' . $createFilter . '=0 OR created=' . $createFilter .')
                    AND (' . $finalFilter . '=0 OR final=' . $finalFilter .')
                    AND (0='.$weaponType.' OR weapontypeid='.$weaponType.')
                    ORDER BY id';
            $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; weapon table error');
        ?>

        <!--//******-->
        <!--//create weapon table-->
        <!--//******-->
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

        <!--//******-->
        <!--//output data to weapon table-->
        <!--//******-->
        <?php
            while($weaponsRow=mysqli_fetch_array($result))
            {
                //******
                //armory operations
                //******

                //check post, add to armory table if checked, remove from armory if unchecked
                if((isset($_POST['own'.$weaponsRow['id']])) && $_POST['own'.$weaponsRow['id']]==1){
                    //add to armory table
                    $sql = "INSERT IGNORE INTO armory (id, name)
                            VALUES ('$weaponsRow[id]','$weaponsRow[name]')";
                    $armoryInsert = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory error');

                }

                //check armory for weapon id
                $sql = 'SELECT *
                        FROM armory
                        WHERE id=' . $weaponsRow['id'];
                $armoryResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory error');
                $armoryRow=mysqli_fetch_array($armoryResult);


                //******
                //wishlist operations
                //******

                //check post, add to wishlist table if checked, remove from armory if unchecked
                if((isset($_POST['wish'.$weaponsRow['id']])) && $_POST['wish'.$weaponsRow['id']]==1){
                    //add to armory table
                    $sql = "INSERT IGNORE INTO wishlist (id, name)
                            VALUES ('$weaponsRow[id]','$weaponsRow[name]')";
                    $wishlistInsert = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory error');
                }

                $sql = 'SELECT *
                        FROM wishlist
                        WHERE id=' . $weaponsRow['id'];
                $wishlistResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; wishlist error');
                $wishlistRow=mysqli_fetch_array($wishlistResult);

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
                if ($weaponsRow['created']==1) {$createFlag = '<sub>C</sub>';
                } else {$createFlag = null;}

                //final check
                if ($weaponsRow['final']==1) {$finalFlag = '<sub>F</sub>';
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


                echo("<tr>"); //new table row
                echo
                    "<input type='hidden' value='0' name='own" . $weaponsRow['id'] . "'/>"
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

        <!--//*****************************************-->
        <!--//END WEAPON SECTION-->
        <!--//*****************************************-->
        </div>

        <div id='aside'>


        <!--//*****************************************-->
        <!--//ARMORY SECTION-->
        <!--//*****************************************-->
        <!--//******-->
        <!--//grab armory data-->
        <!--//******-->

        <H2>Armory</H2>

        <?php

            $sql = 'SELECT *
                    FROM armory';
            $armoryTableResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armory table error');
        ?>

            <!--//******-->
            <!--//create armory table-->
            <!--//******-->

        <table class='data wish'>
            <tr class='dataTh'>
                <th style='width: 95%;'>Name</th>
            </tr>

            <?php
                while($row=mysqli_fetch_array($armoryTableResult))
                {
                    echo("<tr>"); //new table row
                    echo '<td><input type="submit" name="weaponPath" value="'.$row['name'].'" class="button" > '
                    . " <input type='image' name='searchClick' onclick = 'this.form.submit()' src=assets/resources/ui/search.png height='15' width='15'     value='".$row['name']."'>"
                    . " <input type='image' name='armoryDelete' onclick = 'this.form.submit()' src=assets/resources/ui/delete.png height='15' width='15' value='".$row['name']."'>";
                }
            ?>

        </table>

        <!--//*****************************************-->
        <!--//END ARMORY SECTION-->
        <!--//*****************************************-->


        <!--//*****************************************-->
        <!--//WISHLIST SECTION-->
        <!--//*****************************************-->
        <!--//******-->
        <!--//grab wishlist data-->
        <!--//******-->

        <H2>Wish List</H2>

        <?php
            $sql = 'SELECT *
                    FROM wishlist';
            $wishlistTableResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; wishlist table error');
        ?>

            <!--//******-->
            <!--//create armory table-->
            <!--//******-->

            <table class='data wish'>
                <tr class='dataTh'>
                    <th style='width: 95%;'>Name</th>
                </tr>

                <?php
                    while($row=mysqli_fetch_array($wishlistTableResult))
                    {
                        echo("<tr>"); //new table row
                        echo '<td><input type="submit" name="weaponPath" value="'.$row['name'].'" class="button" > '
                        . " <input type='image' name='searchClick' onclick = 'this.form.submit()' src=assets/resources/ui/search.png height='15'    width='15' value='".$row['name']."'>"
                        . " <input type='image' name='wishDelete' onclick = 'this.form.submit()' src=assets/resources/ui/delete.png height='15' width='15' value='".$row['name']."'>";
                    }
                ?>

            </table>


        <!--//*****************************************-->
        <!--//END WISHLIST SECTION-->
        <!--//*****************************************-->



        <!--//*****************************************-->
        <!--//UPGRADE PATH SECTION-->
        <!--//*****************************************-->

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
                    . '</tr>';

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

        <!--//*****************************************-->
        <!--//END UPGRADE PATH SECTION-->
        <!--//*****************************************-->

        </div>
        </div>

        <div id='footer'>
            <a href='#top'>Back to top</a>
        </div>
</body>
</html>
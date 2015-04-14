<!doctype html>
<html>
<head>
    <title>Inventory</title>

    <style>
        .sharpness-bar {
            border: 1px #d3d3d3 solid;
         min-width: 92px;
                     height: 10px;
            background-color: #d3d3d3;
            float: left;
            clear: both;
        }

        .sharpness-bar span {
            display: inline-block;
            height: 100%;
            float: left;
        }

        .sharpness-bar .red {
            background-color: #C00C38;
        }

        .sharpness-bar .orange {
            background-color: #E85018;
        }

        .sharpness-bar .yellow {
            background-color: #F0C830;
        }

        .sharpness-bar .green {
            background-color: #58D000;
        }

        .sharpness-bar .blue {
            background-color: #3068E8;
        }

        .sharpness-bar .white {
            background-color: #F0F0F0;
        }

        .sharpness-bar .purple {
            background-color: #c3c;
        }
    </style>

    <script type="text/javascript">
        function updateRarityMin(minVal, maxVal) {

            if (parseInt(minVal)<=parseInt(maxVal)) {
                document.getElementById('rarity').value="Rarity: ".concat(minVal).concat(" - ").concat(maxVal);
            } else {
                document.getElementById('minRange').value=maxVal;
                document.getElementById('rarity').value="Rarity: ".concat(maxVal).concat(" - ").concat(maxVal);
            }
        }
        function updateRarityMax(minVal, maxVal) {

            if (parseInt(minVal)<=parseInt(maxVal)) {
                document.getElementById('rarity').value="Rarity: ".concat(minVal).concat(" - ").concat(maxVal);
            } else {
                document.getElementById('maxRange').value=minVal;
                document.getElementById('rarity').value="Rarity: ".concat(minVal).concat(" - ").concat(minVal);
            }
        }
    </script>
</head>
<body>
    <script src="jquery.js"></script>
    <script>
        // all jQuery events are executed within the document ready function
        $(document).ready(function() {
           $("input").bind("keydown", function(event) {
              // track enter key
              var keycode = (event.keyCode ? event.keyCode : (event.which ? event.which : event.charCode));
              if (keycode == 13) { // keycode for enter key
                 // force the 'Enter Key' to implicitly click the Update button
                 document.getElementById('defaultActionButton').click();
                 return false;
              } else  {
                 return true;
              }
           }); // end of function

           $('input[name=elem]').change(function(){
              document.getElementById('defaultActionButton').click();
           });
           $('input[name=minRaritySelect]').change(function(){
              document.getElementById('defaultActionButton').click();
           });
           $('input[name=maxRaritySelect]').change(function(){
              document.getElementById('defaultActionButton').click();
           });
           //$('input[name=weaponType]').change(function(){
           //   document.getElementById('defaultActionButton').click();
           //});
           //$('input[name=monster]').change(function(){
           //   document.getElementById('defaultActionButton').click();
           //});
        }); // end of document ready
    </script>
    <script LANGUAGE="JavaScript">
        function popUp(URL) {
            eval("window.open(URL, 'Path', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=600,left = 283,top = -16');");
        }
    </script>
    <form method=POST name="form">
        <?php
            require_once('db_connect.php');
            
            //*****************************************
            //POST variable checks
            //*****************************************
            if(isset($_POST['weaponType'])) {
                $weaponType=$_POST['weaponType'];
            } else {
                $weaponType='greatsword';
            }

            if(isset($_POST['monster'])) {
                $monster=$_POST['monster'];
            } else {
                $monster=1;
            }

            if(isset($_POST['weaponName'])) {
                $weaponName=$_POST['weaponName'];
            } else {
                $weaponName=null;
            }
            
            echo $weaponName;

            if(isset($_POST['itemName'])) {
                $itemName=$_POST['itemName'];
            } else {
                $itemName=null;
            }

            echo $itemName;


            if(isset($_POST['upgrade'])) {
                if($_POST['upgrade']==1) {
                    $upgradeCheck='checked';
                } else {
                    $upgradeCheck='';
                }
            } else {
                $upgradeCheck='';
            }
            
            if(isset($_POST['minRaritySelect'])) {
                $minRaritySelect=$_POST['minRaritySelect'];
            } else {
                $minRaritySelect=1;
            }

            if(isset($_POST['maxRaritySelect'])) {
                $maxRaritySelect=$_POST['maxRaritySelect'];
            } else {
                $maxRaritySelect=10;
            }

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

            if(isset($_POST['elem'])) {
                $elemFilter=$_POST['elem'];

                switch($_POST['elem']) {
                    case "%":
                        $allCheck = "checked";
                        break;
                    case "RAW":
                        $rawCheck = "checked";
                        break;
                    case "FIR":
                        $firCheck = "checked";
                        break;
                    case "WAT":
                        $watCheck = "checked";
                        break;
                    case "THU":
                        $thuCheck = "checked";
                        break;
                    case "ICE":
                        $iceCheck = "checked";
                        break;
                    case "DRA":
                        $draCheck = "checked";
                        break;
                    case "PAR":
                        $parCheck = "checked";
                        break;
                    case "POI":
                        $poiCheck = "checked";
                        break;
                    case "SLE":
                        $sleCheck = "checked";
                        break;
                    case "BLA":
                        $blaCheck = "checked";
                        break;
                }

            } else {
                $elemFilter='%';
                $allCheck = "checked";
                $rawCheck = "";
                $firCheck = "";
                $thuCheck = "";
                $iceCheck = "";
                $draCheck = "";
                $parCheck = "";
                $poiCheck = "";
                $sleCheck = "";
                $blaCheck = "";
            }


            //*****************************************
            //load and reset button handler
            //*****************************************
            if(isset($_POST['ResetButton']))
            {
                $weaponName=null;
                $itemName=null;
                $allCheck="checked";
                $rawCheck = "";
                $firCheck = "";
                $thuCheck = "";
                $iceCheck = "";
                $draCheck = "";
                $parCheck = "";
                $poiCheck = "";
                $sleCheck = "";
                $blaCheck = "";
                $minRaritySelect=1;
                $maxRaritySelect=10;
            } 

            //*****************************************
            //save button handler
            //*****************************************
            if(isset($_POST['SaveButton']))
            {
                //counts rows in table of weapon type
                $sql="SELECT COUNT(*) FROM " . $weaponType . ";";
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                $countArray=mysqli_fetch_array($result);
                $count=$countArray[0];
                
                $sql="CREATE TABLE IF NOT EXISTS temp (
                    Id int(5) NOT NULL AUTO_INCREMENT,
                    Name varchar(40) NOT NULL,
                    Own boolean NOT NULL,
                    PRIMARY KEY (id)
                    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1;";
                mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                
                
                //*****************************************
                //consumption of parent weapon
                //*****************************************
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
                            $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                            $own_check=mysqli_fetch_array($result);
                            
                            if($own_check[0]==0) //will only call consumed item update script if the consuming weapon was previously unchecked
                            {
                                $sql="SELECT parentId FROM $weaponType WHERE id = $id;";
                                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                                $update_target=mysqli_fetch_array($result);
    
                                $escaped_update_target = mysqli_real_escape_string($mysqli, $update_target[0]);
    
                                $sql="SELECT Own FROM $weaponType WHERE name='$escaped_update_target';"; //returns ownership of consumption target weapon
                                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                                $consumed_weapon_check=mysqli_fetch_array($result);
    
                                if($consumed_weapon_check[0]==1) //if consumption target weapon is currently checked
                                {
                                    $sql="INSERT INTO temp (Name, Own) VALUES ('$escaped_update_target','0');";
                                    mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                                    echo("$own_check[1] updated; $update_target[0] removed from inventory<br>");
                                }
                            }
                        }
                    }
                    
                }
                
                //*****************************************
                //set own? check updates
                //*****************************************
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
                    mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                }
                
                
                //check temp to see if match
                $sql="SELECT tm.name, tm.own FROM temp tm, $weaponType wt WHERE tm.name=wt.name;";
                //echo($sql . "<br>");
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                while($row=mysqli_fetch_array($result))
                {
                    //echo($row['name'] . "<br>");
                    $update_this=$row['name'];
                    $escaped_update_this = mysqli_real_escape_string($mysqli, $update_this);
                    //echo($row['own'] . "<br>");
                    $update_own=$row['own'];
                    //if match, update $weaponType with Own from temp
                    $sql="UPDATE $weaponType SET Own = $update_own WHERE name='$escaped_update_this';";
                    //echo($sql . "<br><br>");
                    mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                }
                $sql="DROP TABLE IF EXISTS temp;";
                //echo($sql . "<br>");
                mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                
            } 


            //*****************************************
            //weapon type dropdown definition
            //*****************************************
            $sql="SELECT type,id FROM weapon_types order by weaponTypeId";
            $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
            echo "<select name='weaponType' onchange='this.form.submit()' value=''>Weapon Type</option>";
            while($row=mysqli_fetch_array($result))
            {
                if($row[id]==$weaponType)
                {
                    echo "<option value=$row[id] selected>$row[type]</option>";
                } else
                {
                    echo "<option value=$row[id]>$row[type]</option>";
                }
            }
            echo "</select>";
            echo " ";
            

            //*****************************************
            //monster dropdown definition
            //*****************************************
            $sql="SELECT monster,id FROM monsters order by monster";
            $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
            echo "<select name='monster' onchange='this.form.submit()' value=''>Monster</option>";
            while($row=mysqli_fetch_array($result))
            {
                if($row[id]==$monster)
                {
                    echo "<option value=$row[id] selected>$row[monster]</option>";
                } else
                {
                    echo "<option value=$row[id]>$row[monster]</option>";
                }
            }
            echo "</select>";
            
            
            //*****************************************
            //grab monster data
            //*****************************************
            //if ($weaponName==null)
            //{
                $sql = 'SELECT *
                        FROM monsters
                        WHERE id=' . $monster;
                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
                $row=mysqli_fetch_array($result);
            
            
            //set up weakness string with element images and equivalencies
            switch($row['weaknessCount']) {
                    case "1":
                        $weaknessOne = substr($row['weakness'],0,3);
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
                        $weaknessOne = substr($row['weakness'],0,3);
                        $weaknessTwo = substr($row['weakness'],4,3);
                        $weaknessThree = null;
                        $weaknessFour = null;
                        $separatorOne=substr($row['weakness'],3,1);
                        $separatorTwo=null;
                        $separatorThree=null;

                        $weaknessString="
                        <img src=resources/elements/" . $weaknessOne . ".png height='20' width='20'>
                            " . $separatorOne . "
                        <img src=resources/elements/" . $weaknessTwo . ".png height='20' width='20'>";
                        break;
                    case "3":
                        $weaknessOne = substr($row['weakness'],0,3);
                        $weaknessTwo = substr($row['weakness'],4,3);
                        $weaknessThree = substr($row['weakness'],8,3);
                        $weaknessFour = null;
                        $separatorOne=substr($row['weakness'],3,1);
                        $separatorTwo=substr($row['weakness'],7,1);
                        $separatorThree=null;

                        $weaknessString="
                        <img src=resources/elements/" . $weaknessOne . ".png height='20' width='20'>
                            " . $separatorOne . "
                        <img src=resources/elements/" . $weaknessTwo . ".png height='20' width='20'>
                            " . $separatorTwo . "
                        <img src=resources/elements/" . $weaknessThree . ".png height='20' width='20'>";
                        break;
                    case "4":
                        $weaknessOne = substr($row['weakness'],0,3);
                        $weaknessTwo = substr($row['weakness'],4,3);
                        $weaknessThree = substr($row['weakness'],8,3);
                        $weaknessFour = substr($row['weakness'],12,3);
                        $separatorOne=substr($row['weakness'],3,1);
                        $separatorTwo=substr($row['weakness'],7,1);
                        $separatorThree=substr($row['weakness'],11,1);

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
            if ($row['poisonDamage']==0) {
                $poisonBg = '#DFDFDF';
                $poisonFont = '#DFDFDF';
            } else {
                $poisonBg = null;
                $poisonFont = '#000000';
            }

            if ($row['blastDamage']==0) {
                $blastBg = '#DFDFDF';
                $blastFont = '#DFDFDF';
            } else {
                $blastBg = null;
                $blastFont = '#000000';
            }

            
            
            //*****************************************
            //create Monster table
            //*****************************************
            echo "<br><br>";
            echo("<table border='1'>");
            echo("<tr>
                 <th>Name</th>
                 <th>Weakness</th>
                 <th><img src=resources/elements/POI.png height='20' width='20'> Damage</th>
                 <th><img src=resources/elements/POI.png height='20' width='20'> Duration</th>
                 <th><img src=resources/elements/POI.png height='20' width='20'> Tolerance<br>Initial/Step/Max</th>
                 <th><img src=resources/elements/BLA.png height='20' width='20'> Damage</th>
                 <th><img src=resources/elements/BLA.png height='20' width='20'> Tolerance<br>Initial/Step/Max</th>
                 </tr>");
            echo("<tr>"); //new table row
            echo
                "<input type='hidden' value='0' name=" . $row['id'] . "/>"
                ."<td><center> " . $row['monster'] . "</center>"
                ."<td><center> $weaknessString </center>"
                ."<td BGCOLOR='" . $poisonBg . "'><center><font color=" . $poisonFont . ">" . $row['poisonDamage'] . "</center></font></td>"
                ."<td BGCOLOR='" . $poisonBg . "'><center><font color=" . $poisonFont . ">" . $row['poisonDuration'] . "</center></font></td>"
                ."<td BGCOLOR='" . $poisonBg . "'><center><font color=" . $poisonFont . ">" . $row['poisonLimits'] . "</center></font></td>"
                ."<td BGCOLOR='" . $blastBg . "'><center><font color=" . $blastFont . ">" . $row['blastDamage'] . "</center></font></td>"
                ."<td BGCOLOR='" . $blastBg . "'><center><font color=" . $blastFont . ">" . $row['blastLimits'] . "</center></font></td>"
                                    ;
            echo("</table>");


            //*****************************************
            //Field definitions
            //*****************************************
            echo " ";
            echo "<br>";
            echo "<input type='text' placeholder='Weapon Name' value='" . $weaponName . "' name='weaponName' />"; //text field, weapon search
            echo " ";
            echo "<input type='text' placeholder='Item Name' value='" . $itemName . "' name='itemName' />"; //text field, weapon search
            echo "<br>";
            echo "<input type='submit' value='Search' name='SearchButton' id='defaultActionButton' />"; //search button
            echo " ";
            echo "<input type='submit' value='Reset' name='ResetButton' />"; //reset button
            echo "<br>";
            echo " ";
            

            //*****************************************
            //grab item data
            //*****************************************
            if ($itemName)
            {
                $sql = 'SELECT name, source
                        FROM items
                        WHERE name like "%' . $itemName . '%"';
//                        WHERE instr(name,"' . $itemName . '")>0';
                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
                $row=mysqli_fetch_array($result);

            //*****************************************
            //create item table
            //*****************************************

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
            

            //rarity sliders
            echo "<input type='text' id='rarity' value='Rarity: " . $minRaritySelect . " - " . $maxRaritySelect . "' style='border: 0px' readonly>";
            echo "<br>";
            echo "<input type='text' id='minRarity' value='Min Rarity:' style='border: 0px' readonly size=6>";
            
            echo "<input type='range' min=1 max=10 value=" . $minRaritySelect . " step=1.0 id='minRange' name='minRaritySelect' onchange='updateRarityMin(this.value, maxRaritySelect.value);' />";
            
            echo "<br>";
            echo "<input type='text' id='maxRarity' value='Max Rarity:' style='border: 0px' readonly size=6>";
            
            echo "<input type='range' min=1 max=10 value=" . $maxRaritySelect . " step=1.0 id='maxRange' name='maxRaritySelect' onchange='updateRarityMax(minRaritySelect.value, this.value);' />";
            echo "<br>";
            
            
            //*****************************************
            //Element Radios
            //*****************************************
            
            echo "<br>";
            echo "<input type='radio' id='all' value='%' name='elem' " . $allCheck . ">";
            echo "<input type='text' value='ALL' style='border: 0px' readonly size=1>";
            echo " | ";
            echo "<input type='radio' id='raw' value='RAW' name='elem' " . $rawCheck . ">";
            echo "<img src=resources/elements/RAW.png height='20' width='20'>";
            echo " | ";
            echo "<input type='radio' id='fire' value='FIR' name='elem' " . $firCheck . ">";
            echo "<img src=resources/elements/FIR.png height='20' width='20'>";
            echo " | ";
            echo "<input type='radio' id='water' value='WAT' name='elem' " . $watCheck . ">";
            echo "<img src=resources/elements/WAT.png height='20' width='20'>";
            echo " | ";
            echo "<input type='radio' id='thunder' value='THU' name='elem' " . $thuCheck . ">";
            echo "<img src=resources/elements/THU.png height='20' width='20'>";
            echo " | ";
            echo "<input type='radio' id='ice' value='ICE' name='elem' " . $iceCheck . ">";
            echo "<img src=resources/elements/ICE.png height='20' width='20'>";
            echo " | ";
            echo "<input type='radio' id='dragon' value='DRA' name='elem' " . $draCheck . ">";
            echo "<img src=resources/elements/DRA.png height='20' width='20'>";
            echo " | ";
            echo "<input type='radio' id='paralysis' value='PAR' name='elem' " . $parCheck . ">";
            echo "<img src=resources/elements/PAR.png height='20' width='20'>";
            echo " | ";
            echo "<input type='radio' id='poison' value='POI' name='elem' " . $poiCheck . ">";
            echo "<img src=resources/elements/POI.png height='20' width='20'>";
            echo " | ";
            echo "<input type='radio' id='sleep' value='SLE' name='elem' " . $sleCheck . ">";
            echo "<img src=resources/elements/SLE.png height='20' width='20'>";
            echo " | ";
            echo "<input type='radio' id='blast' value='BLA' name='elem' " . $blaCheck . ">";
            echo "<img src=resources/elements/BLA.png height='20' width='20'>";
            
            
            //*****************************************
            //Own update inputs
            //*****************************************
            
            echo " ";
            echo "<br><br>";
            echo "<input type='submit' value='Save' name='SaveButton' />"; //button
            
            echo "<input type='hidden' value='0' name='upgrade' />"; //passes 0 if checkbox unchecked
            echo "&nbsp;&nbsp;<input type='checkbox' value='1' " . $upgradeCheck . " name='upgrade' /> Update Mode
                (This will uncheck parent weapon when target weapon's 'own' checkbox is checked)"; //passes 1 if checkbox checked

            //*****************************************
            //grab weapon data
            //*****************************************
            //if ($weaponName==null)
            //{
                $sql = 'SELECT id, name, rare, attack, element, elementValue, slot, affinity, own, parentId, hierarchy, awaken, special
                        FROM ' . $weaponType . '
                        WHERE instr(name,"' . $weaponName . '")>0
                        AND rare BETWEEN ' . $minRaritySelect . ' AND ' . $maxRaritySelect . '
                        AND element LIKE \'%' . $elemFilter . '%\'
                        ORDER BY rare, (attack+elementValue)';
                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

            
            //*****************************************
            //create weapon table
            //*****************************************
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
                 
            
            //*****************************************
            //output data to weapon table
            //*****************************************
            while($row=mysqli_fetch_array($result))
            {
                if($row['own'] == 1)
                {
                    $checkCheck = 'checked';
                } else
                {
                    $checkCheck = null;
                }

                $pos=strrpos($row['element'],'(');
                    
                if($pos===false)
                {
                    $elemStart='';
                    $elemEnd='';
                    $elemType=$row['element'];
                } else if($pos==0)
                {
                    $elemStart='&#124;';
                    $elemEnd='&#124;';
                    $elemType=substr($row['element'],1,3);
                }

                switch($row['slot']) {
                    case "0":
                        $slot = "---";
                        break;
                    case "1":
                        $slot = "o--";
                        break;
                    case "2":
                        $slot = "oo-";
                        break;
                    case "3":
                        $slot = "ooo";
                        break;
                }



                if ($row['awaken']==1) {
                    $elemBg = '#CGCGCG';
                } else {
                    $elemBg = null;
                }


                $weaponName=str_replace('+','*',str_replace('\'','!',$row['name']));
                $affinity=$row['affinity']*100;
                
                echo("<tr>"); //new table row
                echo
                    //"<td>" . $row['id'] . "</td>" //table data tag
                    "<input type='hidden' value='0' name='row" . $row['id'] . "'/>"
                    ."<td><center><input type='checkbox' value='1' ". $checkCheck . " name='row" . $row['id'] . "'/></center>"
                    ."<td><a href='#' onClick='javascript:popUp(\"path.php?weaponType=$weaponType&weaponName=$weaponName\")'> " . $row['name'] . "</a>" //weapon Name
                    ."<td><center> " . $row['rare'] . "</center></td>"
                    ."<td><center> " . $row['attack'] . "</center></td>"
                    ."<td BGCOLOR='" . $elemBg . "'><center><img src=resources/elements/" . $elemType . ".png height='20' width='20'></center></td>"
                    ."<td><center> " . $row['elementValue'] . "</center></td>"
                    ."<td><center> " . $slot . "</center></td>"
                    ."<td><center> " . $affinity . "%</center></td>"
                    ."<td> " . $row['special'] . "</td>"
                                        ;
                    //."<td> " . $row['hierarchy'] . "</td>";
            }   
            echo("</table>");
        ?>
    </form>
</body>
</html>
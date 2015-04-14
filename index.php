<html>
<head>
    <title>Inventory</title>
    
        
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
        }); // end of document ready
    </script>
    <script LANGUAGE="JavaScript">
        function popUp(URL) {
            eval("window.open(URL, 'Path', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=400,left = 283,top = -16');");
        }
    </script>

    
    <form method="post" name=weaponData>
        <?php
            require_once('db_connect.php');
            $weaponName=null;
            
            
            //*****************************************
            //***********save button handler***********
            //*****************************************
            if(isset($_POST['SaveButton']))
            {
                //counts rows in table of weapon type
                $weaponType=$_POST['weaponType'];
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
                
                for($id=1;$id<=$count;$id++)
                {
                    //need to check if current id exists in post
                       //$own=$_POST['row'.$id];
                    //$own=$_POST['row'.$id];
                    
                    
                    
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
                            $sql="SELECT consumes FROM $weaponType WHERE id = $id;";
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
                
            } else //only calls on page load (initial or load button)
            {
                $weaponType='dualblades';
            }

            
            //*****************************************
            //***********load button handler***********
            //*****************************************
            if(isset($_POST['LoadButton']))
            {
                $weaponType=$_POST['weaponType'];
                echo('Weapon Type<br>');
            } else //only calls on page load (initial or save button)
            {
                echo('Weapon Type<br>');
            }
            
            
            //*****************************************
            //**********search button handler**********
            //*****************************************
            if(isset($_POST['SearchButton']))
            {
                $weaponType=$_POST['weaponType'];
                $weaponName=$_POST['weaponName'];
                $textValue=$weaponName;
            } else
            {
                $textValue=null;
            }

            
            //*****************************************
            //**********reset button handler***********
            //*****************************************
            if(isset($_POST['ResetButton']))
            {
                $weaponType=$_POST['weaponType'];
                $textValue=null;
            } 
          
          
            //*****************************************
            //***********dropdown definition***********
            //*****************************************
            $sql="SELECT type,id FROM weapon_types order by type";
            $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
            echo "<select name=weaponType value=''>Weapon Type</option>";
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
            
            
            //*****************************************
            //*******load/save button definition*******
            //*****************************************
            echo " ";
            echo "<input type='submit' value='Load' name='LoadButton' />"; //button
            echo "<br>";
            echo "<br>";
            
            
            //*****************************************
            //*********specific weapon search**********
            //*****************************************
            echo "<input type='text' placeholder='Weapon Name' value='" . $textValue . "' name='weaponName' />"; //text field
            echo " ";
            echo "<input type='submit' value='Search' name='SearchButton' id='defaultActionButton' />"; //button
            echo " ";
            echo "<input type='submit' value='Reset' name='ResetButton' />"; //button
            echo "<br>";
            echo "<br>";
            echo "<input type='submit' value='Save' name='SaveButton' />"; //button
           
            
            //*****************************************
            //****************grab data****************
            //*****************************************
            if ($weaponName==null)
            {
                $sql = 'SELECT id, name, element, own, consumes FROM ' . $weaponType . ' ORDER BY element';
                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
            } else
            {
                $sql = 'SELECT id, name, element, own, consumes FROM ' . $weaponType . ' WHERE instr(name,"' . $weaponName . '")>0 ORDER BY element';
                //$sql = 'SELECT id, name, element, own, consumes FROM ' . $weaponType . ' WHERE name="' . $weaponName . '" ORDER BY element';
                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
            }
            

            //*****************************************
            //**************create table***************
            //*****************************************
            echo("<table border='1'>");
            echo("<tr><th>ID</th><th>Own?</th><th>Name</th><th>Element</th><th>Consumes</th></tr>");

            
            //*****************************************
            //**********output data to table***********
            //*****************************************
            //output db data to table
            while($row=mysqli_fetch_array($result))
            {
                if($row['own'] == 1)
                {
                    $checkCheck = 'checked';
                    $checkValue = 1;
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
                    $elemStart='(';
                    $elemEnd=')';
                    $elemType=substr($row['element'],1,3);
                }
                    
                $weaponName=str_replace('\'','!',$row['name']);

                echo("<tr>"); //new table row
                echo "<td>" . $row['id'] . "</td>" //table data tag
                    ."<input type='hidden' value='0' name='row" . $row['id'] . "'/>"
                    ."<td><center><input type='checkbox' value='1' ". $checkCheck . " name='row" . $row['id'] . "'/></center>"
                    ."<td><a href='#' onClick='javascript:popUp(\"path.php?weaponType=$weaponType&weaponName=$weaponName\")'> " . $row['name'] . "</a>" //weapon Name
                    ."<td><font size='5'><center>" . $elemStart . "<img src=images/" . $elemType . ".png height='20' width='20'>" . $elemEnd . "</center></font></td>"
                    ."<td> " . $row['consumes'] . "</td>";
            }   
            echo("</table>");
        ?>
    </form>
</body>
</html>
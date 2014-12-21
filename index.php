<html>
<head>
    <title>Inventory</title>
</head>
<body>
    <form method="post">
        <?php
            require_once('db_connect.php');

            //save button handler
            if(isset($_POST['SaveButton']))
            {
                $weaponType=$_POST['weaponType'];

                $sql="SELECT COUNT(*) FROM " . $weaponType . ";";
                echo($sql . "<br>");
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                $countArray=mysqli_fetch_array($result);
                echo($countArray[0] . "<br><br>");
                $count=$countArray[0];
                
                for($id=1;$id<=$count;$id++)
                {
                    $own=$_POST['row'.$id];
                    if ($own == 1){
                        $sql="SELECT Own, name FROM $weaponType WHERE id = $id;"; //checks ownership of consuming weapon
                        echo($sql . "<br>");
                        $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                        $own_check=mysqli_fetch_array($result);
                        print('owned: ' . $own_check[0] . ', name: '. $own_check[1] . '<br>');
                        print("<br>");

                        if($own_check[0]==0){ //will only call consumed item update script if the consuming weapon was previously unchecked
                            $sql="SELECT consumes FROM $weaponType WHERE id = $id;";
                            echo($sql . "<br>");
                            $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                            $update_target=mysqli_fetch_array($result);
                            print($update_target[0]);
                            print("<br>");

                            $sql="SELECT Own FROM $weaponType WHERE name='$update_target[0]';"; //returns ownership of consumption target weapon
                            echo($sql . "<br>");
                            $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                            $consumed_weapon_check=mysqli_fetch_array($result);
                            print($consumed_weapon_check[0]);
                            print("<br>");

                            if($consumed_weapon_check[0]==1){ //if consumption target weapon is currently checked
                                $sql="UPDATE $weaponType SET Own = 0 WHERE name='$update_target[0]';";
                                echo($sql . "<br>");
                                mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                                echo("$own_check[1] updated; $update_target[0] removed from inventory<br>");
                            }
                        }
                    }

                    $sql="UPDATE $weaponType SET Own= '$own' WHERE id = $id;";
                    //echo($sql . "<br><br>");
                    mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                }


            } else //only calls on page load (initial or load button)
            {
                $weaponType='dualblades';
            }

            //load button handler
            if(isset($_POST['LoadButton']))
            {
                $weaponType=$_POST['weaponType'];
                echo('Weapon Type<br>');
            } else //only calls on page load (initial or save button)
            {
                echo('Weapon Type<br>');
            }

            //dropdown
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

            //buttons
            echo " ";
            echo "<input type='submit' value='Load' name='LoadButton' />"; //button
            echo " ";
            echo "<input type='submit' value='Save' name='SaveButton' />"; //button

            $sql = 'SELECT id, name, own, consumes FROM ' . $weaponType . ' ORDER BY id';
            $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

            echo("<table border='1'>");
            echo("<tr><th>ID</th><th>Name</th><th>Own?</th><th>Consumes</th></tr>");
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
                echo("<tr>"); //new table row
                echo "<td>" . $row['id'] . "</td>" //table data tag
                    ."<td>" . $row['name'] . "</td>"
                    ."<input type='hidden' value='0' name='row" . $row['id'] . "'/>"
                    ."<td><input type='checkbox' value='1' ". $checkCheck . " name='row" . $row['id'] . "'/>"
                    ."<td>" . $row['consumes'] . "</td>";
            }
            echo("</table>");
        ?>
    </form>
</body>
</html>

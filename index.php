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
                //echo($sql . "<br>");
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                $countArray=mysqli_fetch_array($result);
                $count=$countArray[0];
                //echo($count. "<br>");
                
                $id = 1;
                while($id <= $count)
                {
                    $own=$_POST['row'.$id];
                    //echo($own . " " . $weaponType . "<br>");
                    $sql="UPDATE " . $weaponType . " SET " . "Own= '" . $own . "' WHERE id = '" . $id . "';";
                    //echo($sql . "<br>");
                    mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
                    $id++;
                }
            } else //only calls on page load
            {
                $weaponType='dualblades';
            }

            //load button handler
            if(isset($_POST['LoadButton']))
            {
                $weaponType=$_POST['weaponType'];
                echo('Weapon Type<br>');
            } else //only calls on page load
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

            $sql = 'SELECT id, name, own FROM ' . $weaponType . ' ORDER BY id';
            $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

            //data table
            echo("<table border='1'>");
            echo("<tr><th>ID</th><th>Name</th><th>Own?</th></tr>");
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
                    ."<td><input type='checkbox' value='1' ". $checkCheck . " name='row" . $row['id'] . "'/>";
            }
            echo("</table>");
        ?>
    </form>
</body>
</html>

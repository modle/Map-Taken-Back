<html>
<head>
    <title>Inventory</title>
</head>
<body>
    <form method="post">
        <?php
            require_once('db_connect.php');
            if(isset($_POST['LoadButton']))
            {
                $weaponType=$_POST['weaponType'];
                echo('Weapon Type<br>');
            } else
            {
                echo('Please select a weapon type!<br>');
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

            echo "<input type='submit' value='Load' name='LoadButton' />"; //button

            if(isset($_POST['LoadButton']))
            {
                $sql = 'SELECT id, name, own FROM ' . $weaponType . ' ORDER BY id';
                //echo($sql);
                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

                echo("<table border='1'>");
                echo("<tr><th>ID</th><th>Name</th><th>Own?</th><th>Update</th></tr>");
                while($row=mysqli_fetch_array($result)){
                    echo("<tr>"); //new table row
                    echo "<td>" . $row['id'] . "</td>" //table data tag
                        ."<td>" . $row['name'] . "</td>"
                        ."<td>" . $row['own'] . "</td>"
                        ."<td><a href='update.php? type=" . $weaponType . "&id=" . $row['id'] ."'>Update</a></td></tr>";
                }
                echo("</table>");
            }
        ?>
    </form>
</body>
</html>

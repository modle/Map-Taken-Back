<!doctype html>

<html lang="en">
<head>
    <title>Weapon Path</title>
</head>
<body>
    <form method="post" name=weaponData>
        <?php
            require_once('db_connect.php');
            
            $weaponName=$_REQUEST['weaponName'];
            $weaponType=$_REQUEST['weaponType'];
            
            //$weaponName=trim($weaponName) . '+';

            $weaponName=str_replace('*','+',str_replace('!','\'\'',str_replace('%20',' ',$weaponName)));

            $sql = 'SELECT \'' . $weaponName . '\'
                , COALESCE(hierarchy,\'N/A\') AS hierarchy
                FROM ' . $weaponType . ' WHERE name= \'' . $weaponName . '\'';
            $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
            $row=mysqli_fetch_array($result);

            $hierarchy = str_getcsv($row['hierarchy']);
            
            $count=count($hierarchy);
            $weaponName=str_replace('\'\'','\'',$weaponName);
            
            echo("<h3>" . $weaponName . "</h3>");
            echo("Upgrade path:<br><br>");
            
            //*****************************************
            //**************create table***************
            //*****************************************
            echo("<table border='1'>");
                echo("<tr><th>Source Weapon</th><th>Rarity</th><th>Order</th></tr>");
                //echo("<tr><td>" . $row['hierarchy'] . "</td>");
                
                for($i=count($hierarchy)-1;$i>-1;$i--)
                {
                    echo("<tr><td>" . $hierarchy[$i] . "</td>");
                    
                    $weaponName=str_replace('\'','\'\'',$hierarchy[$i]);

                    $sql = 'SELECT rare
                        FROM ' . $weaponType . ' WHERE name= \'' . $weaponName . '\'';
                    $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
                    $row=mysqli_fetch_array($result);
                    
                    echo("<td><center>" . $row['rare'] . "</center></td>");
                    if ($hierarchy[$i]!='N/A')
                    {
                        echo("<td><center>" . $x=$count-$i . "</center></td>");
                    } else {
                        echo("<td><center> </center></td>");
                    }
                    

                    //string replace $hierarchy[$i] ' with ''     
                    //return rarity from $weaponType table where name=hierarchy[i]
                    
                }
            echo("</table>");
            
        ?>


</body>
</html>

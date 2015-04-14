<!doctype html>

<html lang="en">
<head>
    <title>Weapon Path</title>
    <link rel="stylesheet" type="text/css" href="mh4u_css_styles.css">
    <script type="text/javascript" src="mh4u_jsFunctions.js"></script>
</head>
<body>
    <form method="post" name=weaponData>
        <?php
            require_once('db_connect.php');
            
            $id=$_REQUEST['id'];
            $weaponType=$_REQUEST['weaponType'];
            
            $sql = 'SELECT name
                    , rare
                    , final
                    , COALESCE(hierarchy,\'N/A\') AS hierarchy
                FROM ' . $weaponType . ' WHERE id='.$id;
            $result1 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
            $rowHierarchy=mysqli_fetch_array($result1);

            $hierarchy = str_getcsv($rowHierarchy['hierarchy']);
            
            $count=count($hierarchy);
            
            //final check
            if ($rowHierarchy['final']==1) {$finalFlag = '<sup>F</sup>';
            } else {$finalFlag = null;}

            //*****************************************
            //**************create table***************
            //*****************************************
            echo("<table border='0'>");
                echo("<tr><th><font size=5>$rowHierarchy[name] <sup>$rowHierarchy[rare] $finalFlag</sup></font></th></tr>");
                echo("<tr><th><br></th></tr>");
                echo("<tr><th><font size=5>Upgrade Path</font></th></tr>");
                
                //from end of hierarchy array
                for($i=count($hierarchy)-1;$i>-1;$i--)
                {
                    
                    //string replace $hierarchy[$i] ' with ''
                    $weaponName=str_replace('\'','\'\'',$hierarchy[$i]);

                    //return rarity from $weaponType table where name=hierarchy[i]
                    $sql = 'SELECT rare, id, final
                        FROM ' . $weaponType . ' WHERE name= \'' . $weaponName . '\'';
                    $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
                    $row2=mysqli_fetch_array($result2);

                    echo "<td><center><a href='#' onClick='javascript:popUp(\"path.php?weaponType=$weaponType&id=$row2[id]\")'> $hierarchy[$i]</a><sup>$row2[rare]</sup></center>"; //weapon Name

                    //down arrow
                    if ($hierarchy[$i]!='N/A'){
                        echo("<tr><td><center>&darr;</center></td></tr>");
                    } 
                }

                $sql = 'SELECT rare, name
                    FROM ' . $weaponType . ' WHERE id=' . $id;
                $result3 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; rare error 2');
                $row3=mysqli_fetch_array($result3);

                echo("<tr><td><center><b>$rowHierarchy[name]<sup>$row3[rare] $finalFlag</sup></b></center></tr></td>");

                echo("<tr><th><br></th></tr>");
                echo("<tr><th><font size=5>Upgrades To</font></th></tr>");

                $sql = 'SELECT wt1.name
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

                    echo "<td><center><a href='#' onClick='javascript:popUp(\"path.php?weaponType=$weaponType&id=$upgradesTo[nextId]\")'> $upgradesTo[nextWeapon]</a><sup>$upgradesTo[nextWeaponRare] $finalFlag</sup></center></tr>"; //weapon Name
                }
            echo("</table>");
        ?>
</body>
</html>

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
            
            $weaponName=str_replace('!','\'\'',str_replace('%20',' ',$weaponName));
            
            $sql = 'SELECT targetWeapon,
                targetLess1, targetLess2, targetLess3, targetLess4, targetLess5,
                targetLess6, targetLess7, targetLess8, targetLess9, targetLess10,
                targetLess11, targetLess12, targetLess13, targetLess14, targetLess15
                FROM greatswordtree WHERE weapontypeid = \'' . $weaponType . '\' AND targetWeapon = \'' . $weaponName . '\'';
            $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
            $row=mysqli_fetch_array($result);
            //*****************************************
            //**************create table***************
            //*****************************************
            echo("<table border='1'>");
                echo("<tr><th>Stage</th><th>Weapon Name</th></tr>");
                
                
                for($i=15;$i>0;$i--)
                {
                    if($row['targetLess' . $i]<>'')
                    {                
                        echo("<tr><td>Target Less $i</td><td>" . $row['targetLess' . $i] . "</td>");
                    }
                }
                echo("<tr><td>Target Weapon</td><td>" . $row['targetWeapon'] . "</td>");
                
                /*
                if($row['targetLess1']<>'') {                
                    echo("<tr><td>Target Less 1</td><td>" . $row['targetLess1'] . "</td>");}
                if($row['targetLess2']<>'') {                
                    echo("<tr><td>Target Less 2</td><td>" . $row['targetLess2'] . "</td>");}
                if($row['targetLess3']<>'') {                
                    echo("<tr><td>Target Less 3</td><td>" . $row['targetLess3'] . "</td>");}
                if($row['targetLess4']<>'') {                
                    echo("<tr><td>Target Less 4</td><td>" . $row['targetLess4'] . "</td>");}
                if($row['targetLess5']<>'') {                
                    echo("<tr><td>Target Less 5</td><td>" . $row['targetLess5'] . "</td>");}
                if($row['targetLess6']<>'') {                
                    echo("<tr><td>Target Less 6</td><td>" . $row['targetLess6'] . "</td>");}
                if($row['targetLess7']<>'') {                
                    echo("<tr><td>Target Less 7</td><td>" . $row['targetLess7'] . "</td>");}
                if($row['targetLess8']<>'') {                
                    echo("<tr><td>Target Less 8</td><td>" . $row['targetLess8'] . "</td>");}
                if($row['targetLess9']<>'') {                
                    echo("<tr><td>Target Less 9</td><td>" . $row['targetLess9'] . "</td>");}
                if($row['targetLess10']<>'') {                
                    echo("<tr><td>Target Less 10</td><td>" . $row['targetLess10'] . "</td>");}
                if($row['targetLess11']<>'') {                
                    echo("<tr><td>Target Less 11</td><td>" . $row['targetLess11'] . "</td>");}
                if($row['targetLess12']<>'') {                
                    echo("<tr><td>Target Less 12</td><td>" . $row['targetLess12'] . "</td>");}
                if($row['targetLess13']<>'') {                
                    echo("<tr><td>Target Less 13</td><td>" . $row['targetLess13'] . "</td>");}
                if($row['targetLess14']<>'') {                
                    echo("<tr><td>Target Less 14</td><td>" . $row['targetLess14'] . "</td>");}
                if($row['targetLess15']<>'') {                
                    echo("<tr><td>Target Less 15</td><td>" . $row['targetLess15'] . "</td>");}
*/
            echo("</table>");
            
        ?>


</body>
</html>

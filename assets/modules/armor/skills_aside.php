<?php

    if ($skillLoad){
        $armorSet=str_replace('\'','&#39;',$skillLoad);
        echo("<h4>".$skillLoad."</h4>");

        $sql = 'CALL sp_create_temp_skill_table ("' . $armorSet . '",' . $typeFilterId . ')';
        $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armor skill table procedure error');

        $sql = 'SELECT * FROM temp_skill_table_final';
        $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armor skill table procedure error');
?>


        <table class='data'>
        <tr class='dataTh'>
            <th></th>
            <th><img src=assets/resources/armor/head.png class='icon'></th>
            <th><img src=assets/resources/armor/body.png class='icon'></th>
            <th><img src=assets/resources/armor/arms.png class='icon'></th>
            <th><img src=assets/resources/armor/waist.png class='icon'></th>
            <th><img src=assets/resources/armor/legs.png class='icon'></th>
            <th>MATHS</th>
        </tr>
        <?php
            while($row=mysqli_fetch_array($result))
            {
                $sum=$row['head']+$row['body']+$row['arms']+$row['waist']+$row['legs'];
    
                echo("<tr>"
                        ."<td>" . $row['name']
                        ."<td>" . $row['head']
                        ."<td>" . $row['body']
                        ."<td>" . $row['arms']
                        ."<td>" . $row['waist']
                        ."<td>" . $row['legs']
                        ."<td>" . $sum
                    .'</tr>'
                );
            }
        echo("</table>");
    }
        ?>
<table class='data'>
    <?php
        $letters=array();
        while($row=mysqli_fetch_array($result))
        {

            $nextLetter=substr($row['armorSet'],0,1);
                if (!in_array($nextLetter, $letters)) {
                    $letters[]=$nextLetter;
                    echo("<a href='#".$nextLetter."'>".$nextLetter."</a>"."&nbsp; ");
                    echo("<tr><td colspan=9><a name='".$nextLetter."' class='menu'><h3>".$nextLetter."</h3></a></td></tr>")
                        ."<tr><td colspan=9 class=navTdTh><a href='#top'>Back to top</a></td></tr>
                        <tr class='dataTh'>
                            <th></th>
                            <th>R</th>
                            <th></th>
                            <th>S</th>
                            <th><img src=assets/resources/elements/FIR.png class='icon'></th>
                            <th><img src=assets/resources/elements/WAT.png class='icon'></th>
                            <th><img src=assets/resources/elements/THU.png class='icon'></th>
                            <th><img src=assets/resources/elements/ICE.png class='icon'></th>
                            <th><img src=assets/resources/elements/DRA.png class='icon'></th>
                        </tr>";
                }


            echo('<tr>'
                    .'<td><input type="submit" name="skillLoad" value="'.$row['armorSet'].'" class="button" >'
                    .'<td>' . $row['rare']
                    .'<td><img src=assets/resources/weapons/'.$row['hunterTypeId'].'.png ></th>'
                    .'<td>' . $row['slot']
                    .'<td>' . $row['fireRes']
                    .'<td>' . $row['waterRes']
                    .'<td>' . $row['thunderRes']
                    .'<td>' . $row['iceRes']
                    .'<td>' . $row['dragonRes']
                .'</tr>'
            );
        }
    ?>
</table>
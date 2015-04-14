<table class='data' style='width:100%;'>
    <tr class='dataTh'>
        <th colspan=1>Name</th>
        <th colspan=1>Goal</th>
        <th colspan=1>Type</th>
        <th colspan=1>Location</th>
    </tr>
    Jump to:<br>
    <?php
        $jumps=array();
        while($row=mysqli_fetch_array($result))
        {
            switch($row['type']){
                case 'Key':
                    $type='K';
                    break;
                case 'Normal':
                    $type='';
                    break;
                case 'Urgent':
                    $type='&#10082;';
                    break;
            }

            $nextJump=$row['hub'] . '&nbsp;' . $row['stars'] . '&#9733;(' . $row['rank'] .')';
            if (!in_array($nextJump, $jumps)) {
                $jumps[]=$nextJump;
                echo("<a href='#".$nextJump."'>".$nextJump."</a>"."&nbsp; ");
                echo("<tr><td colspan=4><a name='".$nextJump."' class='menu'><a href='#top'>Back to top</a><h3>".$nextJump."</h3></a></td></tr>");
            }

            echo("<tr>")
                ."<td colspan=1>" . $row['name']
                ."<td colspan=1>" . $row['goal']
                ."<td colspan=1>" . $type
                ."<td colspan=1>" . $row['location']
            ."</tr>";
        }
    ?>
</table>
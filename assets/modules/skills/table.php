<table class='data'>
    <colgroup>
        <col width="5%"><col width="5%">
        <col width="5%"><col width="5%">
        <col width="5%"><col width="5%">
        <col width="5%"><col width="5%">
    </colgroup>
    <tr class='dataTh'>
        <th colspan=5>Tree</th>
        <th colspan=5>Name</th>
        <th colspan=5>Points</th>
        <th colspan=5>Description</th>
    </tr>
    Jump to:
    <?php
        $letters=array();
        while($row=mysqli_fetch_array($result))
        {

            $nextLetter=substr($row['treeName'],0,1);
            if (!in_array($nextLetter, $letters)) {
                $letters[]=$nextLetter;
                echo("<a href='#".$nextLetter."'>".$nextLetter."</a>"."&nbsp;");
                echo("<tr><td colspan=20><a name='".$nextLetter."' class='menu'><h3>".$nextLetter."</h3></a></td></tr>");
            }

            echo("<tr>")
                ."<td colspan=5><input type='submit' name='armorLoad' value='".$row['treeName']."' class='button' >"
                ."<td colspan=5>" . $row['skillName']
                ."<td colspan=5>" . $row['requiredSkillTreePoints']
                ."<td colspan=5>" . $row['description']
            ."</tr>";
        }
    ?>
</table>
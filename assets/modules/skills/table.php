<table class='data'>
    Jump to:
    <?php
        $letters=array();
        while($row=mysqli_fetch_array($result))
        {

            $nextLetter=substr($row['treeName'],0,1);
            if (!in_array($nextLetter, $letters)) {
                $letters[]=$nextLetter;
                echo("<a href='#".$nextLetter."'>".$nextLetter."</a>"."&nbsp;");
                echo("<tr><td colspan=4 class='navTdTh'><a name='".$nextLetter."'><a href='#top'>Back to top</a><h3>".$nextLetter."</h3></a></td></tr>");
            }

            echo("<tr>")
                ."<td><input type='submit' name='armorLoad' value='".$row['treeName']."' class='button'>"
                ."<td>" . $row['skillName']
                ."<td>" . $row['requiredSkillTreePoints']
                ."<td>" . $row['description']
            ."</tr>";
        }
    ?>
</table>
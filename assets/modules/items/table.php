<?php if ($itemName){ ?>
    <table class='data'>
        <colgroup>
            <col width="5%"><col width="5%">
            <col width="5%"><col width="5%">
            <col width="5%"><col width="5%">
            <col width="5%"><col width="5%">
            <col width="5%"><col width="5%">
        </colgroup>
        <tr class='dataTh'>
            <th colspan=5></th>
            <th colspan=5>Item</th>
            <th colspan=5>Buy</th>
            <th colspan=5>Sell</th>
            <th colspan=5>Rarity</th>
        </tr>
        Jump to:
        <?php
            $letters=array();
            while($row=mysqli_fetch_array($result))
            {

                $nextLetter=substr($row['name'],0,1);
                if (!in_array($nextLetter, $letters)) {
                    $letters[]=$nextLetter;
                    echo("<a href='#".$nextLetter."'>".$nextLetter."</a>"."&nbsp;");
                    echo("<tr><td colspan=25><a name='".$nextLetter."' class='menu'><a href='#top'>Back to top</a><h3>".$nextLetter."</h3></a></td></tr>");
                }

                echo("<tr>")
                    ."<td colspan=5><input type='image' name='materialSearch' onclick = 'this.form.submit()' class='icon' src=assets/resources/ui/search.png value='$row[itemId]'>"
                    ."<td colspan=5>$row[name]"
                    //."<td colspan=5><input type='submit' name='sourceLoad' value='".$row['itemId']."' class='button' >"
                    ."<td colspan=5>$row[buy]"
                    ."<td colspan=5>$row[sell]"
                    ."<td colspan=5>$row[rare]"
                ."</tr>";
            }
        ?>
    </table>
<?php } ?>
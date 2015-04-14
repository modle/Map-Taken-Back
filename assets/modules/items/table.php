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
            <th colspan=5>Item</th>
            <th colspan=5>Buy</th>
            <th colspan=5>Sell</th>
            <th colspan=5>Rarity</th>
            <th colspan=5>Description</th>
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
                    echo("<tr><td colspan=25><a name='".$nextLetter."' class='menu'><h3>".$nextLetter."</h3></a></td></tr>");
                }

                echo("<tr>")
                    ."<td colspan=5><input type='submit' name='sourceLoad' value='".$row['name']."' class='button' >"
                    ."<td colspan=5>" . $row['buy']
                    ."<td colspan=5>" . $row['sell']
                    ."<td colspan=5>" . $row['rare']
                    ."<td colspan=5>" . $row['description']
                ."</tr>";
            }
        ?>
    </table>
<?php } ?>
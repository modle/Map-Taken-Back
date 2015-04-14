<table class='data wish'>
    <tr class='dataTh'>
        <th style='width: 60%;'>Name</th>
        <th style='width: 10%;'>Type</th>
        <th style='width: 10%;'>Rare</th>
        <th style='width: 10%;'>Created</th>
        <th style='width: 10%;'>Final</th>
    </tr>
    <?php
        while($row=mysqli_fetch_array($armoryTableResult))
        {

            if($row['created']==1){
                $created='&#x2713;';
            } else {
                $created='';
            }

            if($row['final']==1){
                $final='&#x2713;';
            } else {
                $final='';
            }

            echo("<tr>")
                .'<td>
                <input type="submit" name="weaponPath" value="'.$row['name'].'" class="button" > '
                . " <input type='image' name='searchClick' onclick = 'this.form.submit()' src=assets/resources/ui/search.png height='15' width='15'  value='".$row['name']."'>"
                . " <input type='image' name='armoryDelete' onclick = 'this.form.submit()' src=assets/resources/ui/delete.png height='15' width='15' value=".$row['id'].">
                </td>"
                .'<td><img src=assets/resources/weapons/'.$row['weaponTypeId'].'.png height="20" width="20"></td>'
                .'<td>'.$row['rare'].'</td>'
                .'<td>'.$created.'</td>'
                .'<td>'.$final.'</td>';
        }
    ?>
</table>
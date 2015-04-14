<table class='data wish'>
    <?php
        while($row=mysqli_fetch_array($armoryTableResult))
        {

            if($row['created']==1){
                $created='C';
            } else {
                $created='';
            }

            if($row['final']==1){
                $final='F';
            } else {
                $final='';
            }

            echo("<tr>")
                ."<td><input type='image' name='searchClick' onclick = 'this.form.submit()' src=assets/resources/ui/search.png height='15' width='15'  value='".$row['name']."'>"
                .'<td><input type="submit" name="weaponPath" value="'.$row['name'].'" class="button" >'
                .'<td><img src=assets/resources/weapons/'.$row['weaponTypeId'].'.png height="20" width="20">'
                .'<td>'.$row['rare']
                .'<td>'.$created
                .'<td>'.$final
                ."<td><input type='image' name='armoryDelete' onclick = 'this.form.submit()' src=assets/resources/ui/delete.png height='15' width='15' value=".$row['id'].">";
        }
    ?>
</table>
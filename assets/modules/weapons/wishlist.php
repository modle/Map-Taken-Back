<a name="wishlist" class='menu'></a>
<H2>Wish List</H2>
<a href='#top'>Back to Weapons Top</a>

<H4>Todo</H4>
1. sort by rarity<br>
2. set weapontype dropdown on search click<br>
<br>
<?php
    $sql = 'SELECT *
            FROM wishlist';
    $wishlistTableResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; wishlist table error');
?>

<table class='data wish'>
    <tr class='dataTh'>
        <th style='width: 82%;'>Name</th>
        <th style='width: 15%;'>Wp</th>
        <th style='width: 1%;'>R</th>
        <th style='width: 1%;'>C</th>
        <th style='width: 1%;'>F</th>
    </tr>

    <?php
        while($row=mysqli_fetch_array($wishlistTableResult))
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
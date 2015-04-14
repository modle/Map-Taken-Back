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
    <?php
        while($row=mysqli_fetch_array($wishlistTableResult))
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
                ."<td><input type='image' name='searchClick' onclick='this.form.submit()' src=assets/resources/ui/search.png class='icon' value={$row['id']},{$row['weaponTypeId']}></td>"
                .'<td class="textTd"><input type="submit" name="weaponPath" value="'.$row['name'].'" class="button"></td>'
                .'<td><img src=assets/resources/weapons/'.$row['weaponTypeId'].'.png class="icon"></td>'
                .'<td>'.$row['rare'].'</td>'
                .'<td>'.$created.'</td>'
                .'<td>'.$final.'</td>'
                ."<td><input type='image' name='wishDelete' onclick = 'this.form.submit()' src=assets/resources/ui/delete.png class='icon' value=$row[id]></td>";
        }
    ?>
</table>
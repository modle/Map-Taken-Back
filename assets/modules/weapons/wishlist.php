<a name="wishlist" class='menu'></a>
<H2>Wish List</H2>
<a href='#top'>Back to Weapons Top</a>
<?php
    $sql = 'SELECT *
            FROM wishlist
            ORDER BY rare, weaponTypeId, weaponId';
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
                ."<td><input type='image' name='searchClick' onclick='this.form.submit()' src=assets/resources/ui/search.png class='icon' value='$row[weaponId],$row[weaponTypeId]'></td>"

                ."<td><input type='image' name='weaponPath' onclick='this.form.submit()' src=assets/resources/ui/path.png class='icon' value='$row[name],$row[weaponId]'></td>"

                .'<td>'.$row['name'].'</td>'
                .'<td><img src=assets/resources/weapons/'.$row['weaponTypeId'].'.png class="icon"></td>'
                .'<td>'.$row['rare'].'</td>'
                .'<td>'.$created.'</td>'
                .'<td>'.$final.'</td>'
                ."<td><input type='image' name='wishDelete' onclick = 'this.form.submit()' src=assets/resources/ui/delete.png class='icon' value=$row[weaponId]></td>";
        }
    ?>
</table>
<?php
    if($materialsResult) {
?>
        <H2>Materials</H2>
        <H4><?php echo $weaponPath ?></H4>
        <table class='data'>
            <?php
                while($row=mysqli_fetch_array($materialsResult))
                {
                    echo("<tr>")
                        //."<td><a href='items.php'><img src=assets/resources/ui/search.png class='icon' name='materialSearch'></a>"
                        ."<td><input type='image' name='materialSearch' onclick = 'this.form.submit()' class='icon' src=assets/resources/ui/search.png value='$row[componentItemId]'>"
                        ."<td>" . $row['name']
                        ."<td>" . $row['quantity']
                        ."<td>" . $row['type']
                    ."</tr>";
                }
            ?>
        </table>
<?php
    }
?>

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
<?php
    $sql = "SELECT monster, id
            FROM monsters
            WHERE type='monster'
            ORDER BY monster";
    $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; monster dropdown error');
    echo "<select name='monsterDropdown' onchange='this.form.submit()' value='' >Monster</option>";
    while($row=mysqli_fetch_array($result))
    {
        if($row[id]==$monsterId) {
            echo "<option value=$row[id] selected>$row[monster]</option>";
        } else {
            echo "<option value=$row[id]>$row[monster]</option>";
        }
    }
    echo "</select>";

?>
<?php
    $sql = "SELECT equipSlotId, slot
            FROM equipslot
            ORDER BY equipSlotId";
    $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; equipslot dropdown error');
    echo "<select name='equipSlot' onchange='this.form.submit()' value='' >Slot</option>";
    while($row=mysqli_fetch_array($result))
    {
        if($row[equipSlotId]==$equipSlotId) {
            echo "<option value=$row[equipSlotId] selected>$row[slot]</option>";
        } else {
            echo "<option value=$row[equipSlotId]>$row[slot]</option>";
        }
    }
    echo "</select>";
?>
<br>
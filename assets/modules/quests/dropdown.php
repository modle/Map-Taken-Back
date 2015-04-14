<?php
    $sql = "SELECT rankId, name
            FROM rank
            ORDER BY rankId";
    $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; rank dropdown error');
    echo "Rank: <select name='rank' onchange='this.form.submit()' value='' >Rank</option>";
    while($row=mysqli_fetch_array($result))
    {
        if($row[rankId]==$rankId) {
            echo "<option value=$row[rankId] selected>$row[name]</option>";
        } else {
            echo "<option value=$row[rankId]>$row[name]</option>";
        }
    }
    echo "</select>";
?>

<br>

<?php
    $sql = "SELECT questHubId, name
            FROM questhub
            ORDER BY questHubId";
    $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; questhub dropdown error');
    echo "Hub: <select name='questHub' onchange='this.form.submit()' value='' >Hub</option>";
    while($row=mysqli_fetch_array($result))
    {
        if($row[questHubId]==$questHubId) {
            echo "<option value=$row[questHubId] selected>$row[name]</option>";
        } else {
            echo "<option value=$row[questHubId]>$row[name]</option>";
        }
    }
    echo "</select>";
?>

<br>

<?php
    $sql = "SELECT questTypeId, name
            FROM questType
            ORDER BY questTypeId";
    $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; questType dropdown error');
    echo "Type: <select name='questType' onchange='this.form.submit()' value='' >Type</option>";
    while($row=mysqli_fetch_array($result))
    {
        if($row[questTypeId]==$questTypeId) {
            echo "<option value=$row[questTypeId] selected>$row[name]</option>";
        } else {
            echo "<option value=$row[questTypeId]>$row[name]</option>";
        }
    }
    echo "</select>";
?>

<br>
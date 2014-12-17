<?php
    require_once("db_connect.php");

    $id=$_REQUEST['id']; //super global array
    $weaponType=$_REQUEST['type'];
    $sql="SELECT id, name, own FROM dualblades WHERE id= '" . $id . "';";
    $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    $row=mysqli_fetch_array($result) or die(mysqli_error($mysqli));
?>
<html lang="en">
<head>
    <title>Update Inventory</title>
</head>
<body>
    <form action="update_process.php" method="post">  <!--passes information to array-->
        <input type="hidden" name="id" value="<?php print($id); ?>" />

        <p>Name<br/>
        <input name="name" value="<?php print($row['name']) ?>" type="readonly"  /></p>

        <input name="own" value="0" type="hidden" />
        <input name="own" value="1" type="checkbox" <?php if($row['own'] == 1) : ?> checked <?php endif; ?> />I own this</p>
        <input name="type" value="<?php print($weaponType) ?>" type="hidden" />
        <input type="submit" value="Save Information" />
    </form>
</body>
</html>

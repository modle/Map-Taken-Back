<?php
    require_once("db_connect.php");

    $id=$_REQUEST['id']; //super global array
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

        <!--doesn't read database value to set checkbox, but will push 0(unchecked) or 1(checked)-->
        <input name="own" value="0" type="hidden" />
        <input name="own" value="1" type="checkbox" />I own this</p>

        <input type="submit" value="Save Information" />
    </form>
</body>
</html>

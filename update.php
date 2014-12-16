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
        <input type="readonly" name="name" value="<?php print($row['name']) ?>" /></p>
        <input type="checkbox" name="own" value="<?php print($row['own']) ?>" />I own this</p>
        <input type="submit" value="Save Information" />
    </form>
</body>
</html>

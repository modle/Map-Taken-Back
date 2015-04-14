<!DOCTYPE html>

<html>
<head>
    <title>Items</title>
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/main.css">
    <script type="text/javascript" src="assets/scripts/mh4u_jsFunctions.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src='assets/scripts/jquery_zoom.js'></script>
    <script src="assets/scripts/mh4u_jquery.js"></script>
</head>

<body>

    <div id='navigation'>
        <a href="index.php">Weapons</a>
        <a href="monsters.php">Monsters</a>
        <a href="maps.php">Maps</a>
        <a href="items.php">Items</a>
        <a href="armor.php">Armor</a>
        <a href="skills.php">Skills</a>
    </div>

    <div id='main'>

        <form method=POST name="form">

            <input type='hidden' name='postCheck'>
            <input type='submit' value='Search' name='SearchButton' id='defaultActionButton' style='display:none;' />
            <input type='hidden' value='0' name='itemName'>

            <?php
                require_once('db_connect.php');
                if(isset($_POST['postCheck'])) {
                    $itemName=$_POST['itemName'];
                } else {
                    $itemName=null;
                }
            ?>
            
            <H2>Item Search</H2>
            <input type='text' placeholder='Item Name' value="<?php echo($itemName); ?>" name='itemName' />

            <br><br>

            <!---->
            <!--Get Item Data-->
            <!---->

            <?php
                //if ($itemName){
                    $sql = 'SELECT *
                            FROM item
                            WHERE name like "%' . $itemName . '%"';
                    $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; item table error');
                    $row=mysqli_fetch_array($result);
            ?>

            <!---->
            <!--create item table-->
            <!---->

            <table class='data'>
            <tr class='dataTh'>
            <th>Item</th>
            <th>Buy</th>
            <th>Sell</th>
            <th>Rarity</th>
            <th>Sub Type</th>
            <th>Description</th>
            </tr>

            <?php
                while($row=mysqli_fetch_array($result))
                {
                    echo("<tr>"); //new table row
                    echo "<td>" . $row['name'];
                    echo "<td>" . $row['buy'];
                    echo "<td>" . $row['sell'];
                    echo "<td>" . $row['rarity'];
                    echo "<td>" . $row['subType'];
                    echo "<td>" . $row['description'];
                }
            ?>
            </table>
        </form>
    </div>
</body>
</html>
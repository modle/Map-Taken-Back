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

    <div id='section'>

        <form method=POST name="form">

            <input type='hidden' name='postCheck'>
            <input type='submit' value='Search' name='SearchButton' id='defaultActionButton' style='display:none;' />
            <input type='hidden' value='0' name='itemName'>

            <?php
                require_once('db_connect.php');
                if(isset($_POST['postCheck'])) {
                    $itemName=$_POST['itemName'];
                    if(isset($_POST['sourceLoad'])){
                        $sourceLoad=$_POST['sourceLoad'];
                    }else{
                        $sourceLoad=null;
                    }
                } else {
                    $itemName=null;
                    $sourceLoad=null;
                }


                if(isset($_POST['ResetButton'])){
                    $itemName=null;
                    $sourceLoad=null;
                }


            ?>
            
            <H2>Item Search</H2>
            <input type='submit' value='Search' name='SearchButton' id='defaultActionButton' style='display:none;' /> <!--button for enter listener-->
            <input type='submit' value='Reset All Fields' name='ResetButton'/><br>
            <input type='text' placeholder='Item Name' value="<?php echo($itemName); ?>" name='itemName' />

            <br><br>

            <!---->
            <!--Get Item Data-->
            <!---->

            <?php
                //if ($itemName){
                    $sql = 'SELECT *
                            FROM item
                            WHERE name like "%' . $itemName . '%"
                            LIMIT 100';
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
                    echo("<tr>")
                        ."<td><input type='submit' name='sourceLoad' value='".$row['name']."' class='button' >"
                        ."<td>" . $row['buy']
                        ."<td>" . $row['sell']
                        ."<td>" . $row['rare']
                        ."<td>" . $row['subType']
                        ."<td>" . $row['description'];
                }
            ?>
            </table>
        </form>
    </div>

    <div id='aside'>
        <h2>Source</h2>


        <?php

        if ($sourceLoad){

                $sql = 'SELECT m.monster monster
                    , h.acquiredBy acquiredBy
                    , h.rank rank
                    , h.stackSize stackSize
                    , h.percentage percentage
                FROM huntingreward h
                    JOIN item i ON i.itemId=h.itemId
                    JOIN monsters m ON m.id=h.monsterId
                WHERE instr((i.name),"'. $sourceLoad .'") > 0
                ORDER by h.rank desc, h.percentage desc';


                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armor table error');
                $row=mysqli_fetch_array($result);
        ?>

            <table class='data'>
            <tr class='dataTh'>
            <th>Monster</th>
            <th>Condition</th>
            <th>Rank</th>
            <th>Stack</th>
            <th>%</th>
            </tr>

            <?php
                while($row=mysqli_fetch_array($result))
                {
                    echo("<tr>"); //new table row
                    echo "<td>" . $row['monster'];
                    echo "<td>" . $row['acquiredBy'];
                    echo "<td>" . $row['rank'];
                    echo "<td>" . $row['stackSize'];
                    echo "<td>" . $row['percentage'];
                }
                echo('</table>');
        }
            ?>
    </div>
</body>
</html>
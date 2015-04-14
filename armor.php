<!doctype html>
<html>
<head>
    <title>Armor</title>
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


    <form method=POST name="form">


        <?php
            require_once('db_connect.php');
            echo ("<input type='hidden' name='postCheck'>");
        ?>

    </div>

    <div id='section'>
        <H2>Armor</H2>
        <?php
            $sql = 'SELECT *
                    FROM armor
                    ORDER by name, rare';
//                            WHERE name like "%' . $itemName . '%"';
            $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armor table error');
            $row=mysqli_fetch_array($result);
        ?>

        <!---->
        <!--create item table-->
        <!---->

        <table class='data'>
        <tr class='dataTh'>
        <th>Name</th>
        <th>Rare</th>
        <th>Type</th>
        <th>URL</th>
        </tr>

        <?php
            while($row=mysqli_fetch_array($result))
            {
                echo('<tr>'); //new table row
                echo '<td>' . $row['name'];
                echo '<td>' . $row['rare'];
                echo '<td>' . $row['armorType'];
                echo '<td><a href="'.$row['url'].'" target="_blank">Wiki</a>';
            }
        ?>
        </table>
    </div>
    </form>
</body>
</html>
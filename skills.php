<!doctype html>
<html>
<head>
    <title>Skills</title>
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
        <H2>Skills</H2>
        <?php
            $sql = 'SELECT *
                    FROM skills
                    ORDER by skillTree';
//                            WHERE name like "%' . $itemName . '%"';
            $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; item table error');
            $row=mysqli_fetch_array($result);
        ?>

        <!---->
        <!--create item table-->
        <!---->

        <table class='data'>
        <tr class='dataTh'>
        <th>Skill Tree</th>
        <th>Skill Name</th>
        <th>Points</th>
        <th>Description</th>
        </tr>

        <?php
            while($row=mysqli_fetch_array($result))
            {
                echo("<tr>"); //new table row
                echo "<td>" . $row['skillTree'];
                echo "<td>" . $row['skillName'];
                echo "<td>" . $row['points'];
                echo "<td>" . $row['skillDescription'];
            }
        ?>
        </table>
    </div>
    </form>
</body>
</html>
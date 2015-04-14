<!DOCTYPE html>

<html>
<head>
    <title>Maps</title>
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

            <?php require_once('db_connect.php'); ?>
            <input type='hidden' name='postCheck'>
            <input type='hidden' value='1' name='area'>
            <input type='submit' value='Search' name='SearchButton' id='defaultActionButton' style='display:none;' />

            <?php if(isset($_POST['postCheck'])) {
                    $area=$_POST['area'];
                } else {
                    $area=1;
                }
            ?>

            <H2>Maps</H2>

            <!---->
            <!--Dropdown Definition-->
            <!---->
            <?php
                $sql = "SELECT id, name, map
                        FROM areas
                        WHERE map IS NOT NULL
                        ORDER BY id";
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; area dropdown error');
                echo "<select name='area' onchange='this.form.submit()' value='' >Area</option>";
                while($row=mysqli_fetch_array($result))
                {
                    if($row[id]==$area) {
                        echo "<option value=$row[id] selected>$row[name]</option>";
                    } else {
                        echo "<option value=$row[id]>$row[name]</option>";
                    }
                }
                echo "</select>";
            ?>

            <br>
                
            <span class='zoom' id='ex3'>
                <img src='assets/resources/maps/<?php echo($area) ?>.png' width='750' height='480' alt='derp'/>
            </span>
        </form>
    </div>

    <div id='aside'>
    </div>
</body>
</html>
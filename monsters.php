<!DOCTYPE html>

<html>
<head>
    <title>Monsters</title>
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

    <input type='hidden' name='postCheck'>
    <input type='hidden' value='1' name='monster'>
    <?php

        require_once('db_connect.php');
            if(isset($_POST['postCheck'])) {
                $monsterName=$_POST['monsterName'];
                $monster=$_POST['monster'];
            } else {
                $monsterName=null;
                $monster=88;
            }
    ?>

    <form method=POST name="form">

        <div id='section'>
            <H2>Monsters</H2>
            <?php
                //******
                //Monster Name Dropdown and search
                //******

                $sql = "SELECT monster, id
                        FROM monsters
                        WHERE type='monster'
                        ORDER BY monster";
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; monster dropdown error');
                echo "<select name='monster' onchange='this.form.submit()' value='' >Monster</option>";
                while($row=mysqli_fetch_array($result))
                {
                    if($row[id]==$monster) {
                        echo "<option value=$row[id] selected>$row[monster]</option>";
                    } else {
                        echo "<option value=$row[id]>$row[monster]</option>";
                    }
                }
                echo "</select>"
                    ."<input type='text' placeholder='Monster Name' value='$monsterName' name='monsterName' />";

            ?>

            <H3>Carve Data Here</H3>
            <?php
                $sql = "SELECT *
                        FROM huntingreward hr
                        JOIN item i ON hr.itemId=i.itemId
                        WHERE monsterId=$monster
                        ORDER BY id";
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; carve table error');
                
            ?>

            <table class='data'>
            <tr class='dataTh'>
            <th>Name</th>
            <th>Rank</th>
            <th>Condition</th>
            <th>Percentage</th>
            </tr>

            <?php
                while($row=mysqli_fetch_array($result))
                {
                    echo('<tr>'); //new table row
                    echo '<td>' . $row['name'];
                    echo '<td>' . $row['rank'];
                    echo '<td>' . $row['acquiredBy'];
                    echo '<td>' . $row['percentage'] . ' %';
                }
            ?>
            </table>
        </div>

        <div id='aside'>

            <H2>Weaknesses</H2>

            <?php

                //******
                //Get Monster Data
                //******
                $sql = 'SELECT *
                        FROM monsters
                        WHERE type="monster"
                        AND id=' . $monster;
                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; table error');
                $monsterDataRow=mysqli_fetch_array($result);

                //******
                //Monster Weakness String
                //******

                switch($monsterDataRow['weaknessCount']) {
                    case "1":
                        $weaknessOne = substr($monsterDataRow['weakness'],0,3);
                        $weaknessTwo =null;
                        $weaknessThree =null;
                        $weaknessFour =null;
                        $separatorOne=null;
                        $separatorTwo=null;
                        $separatorThree=null;
                        $weaknessString="
                            <img src=assets/resources/elements/" . $weaknessOne . ".png height='20' width='20'>";
                        break;
                    case "2":
                        $weaknessOne = substr($monsterDataRow['weakness'],0,3);
                        $weaknessTwo = substr($monsterDataRow['weakness'],4,3);
                        $weaknessThree = null;
                        $weaknessFour = null;
                        $separatorOne=substr($monsterDataRow['weakness'],3,1);
                        $separatorTwo=null;
                        $separatorThree=null;

                        $weaknessString="
                            <img src=assets/resources/elements/" . $weaknessOne . ".png height='20' width='20'>
                            " . $separatorOne . "
                            <img src=assets/resources/elements/" . $weaknessTwo . ".png height='20' width='20'>";
                        break;
                    case "3":
                        $weaknessOne = substr($monsterDataRow['weakness'],0,3);
                        $weaknessTwo = substr($monsterDataRow['weakness'],4,3);
                        $weaknessThree = substr($monsterDataRow['weakness'],8,3);
                        $weaknessFour = null;
                        $separatorOne=substr($monsterDataRow['weakness'],3,1);
                        $separatorTwo=substr($monsterDataRow['weakness'],7,1);
                        $separatorThree=null;

                        $weaknessString="
                            <img src=assets/resources/elements/" . $weaknessOne . ".png height='20' width='20'>
                            " . $separatorOne . "
                            <img src=assets/resources/elements/" . $weaknessTwo . ".png height='20' width='20'>
                            " . $separatorTwo . "
                            <img src=assets/resources/elements/" . $weaknessThree . ".png height='20' width='20'>";
                        break;
                    case "4":
                        $weaknessOne = substr($monsterDataRow['weakness'],0,3);
                        $weaknessTwo = substr($monsterDataRow['weakness'],4,3);
                        $weaknessThree = substr($monsterDataRow['weakness'],8,3);
                        $weaknessFour = substr($monsterDataRow['weakness'],12,3);
                        $separatorOne=substr($monsterDataRow['weakness'],3,1);
                        $separatorTwo=substr($monsterDataRow['weakness'],7,1);
                        $separatorThree=substr($monsterDataRow['weakness'],11,1);

                        $weaknessString="
                            <img src=assets/resources/elements/" . $weaknessOne . ".png height='20' width='20'>
                            " . $separatorOne . "
                            <img src=assets/resources/elements/" . $weaknessTwo . ".png height='20' width='20'>
                            " . $separatorTwo . "
                            <img src=assets/resources/elements/" . $weaknessThree . ".png height='20' width='20'>
                            " . $separatorThree . "
                            <img src=assets/resources/elements/" . $weaknessFour . ".png height='20' width='20'>";
                        break;
                }

                //set BG color to gray for poison or blast immune
                if ($monsterDataRow['poisonDamage']==0) {
                    $poisonBg = '#DFDFDF';
                    $poisonFont = '#DFDFDF';
                } else {
                    $poisonBg = null;
                    $poisonFont = '#000000';
                }

                if ($monsterDataRow['blastDamage']==0) {
                    $blastBg = '#DFDFDF';
                    $blastFont = '#DFDFDF';
                } else {
                    $blastBg = null;
                    $blastFont = '#000000';
                }

            ?>

            <!---->
            <!--create Monster table-->
            <!---->
            <br>
            <table class='data'>
                <tr class='dataTh'>
                    <th>Elements</th>
                <tr>
                    <td><?php echo($weaknessString)?>
                <tr>
            </table>
            <br>

            <table class='data'>
                <tr class='dataTh'>
                    <th><img src=assets/resources/elements/POI.png height='20' width='20'> Damage</th>
                    <th><img src=assets/resources/elements/POI.png height='20' width='20'> Duration</th>
                    <th><img src=assets/resources/elements/POI.png height='20' width='20'> Tolerance<br>Initial / Step / Max</th>
                <tr>
                    <font color="<?php echo($poisonFont)?>">
                        <td BGCOLOR="<?php echo($poisonBg.'">'.$monsterDataRow['poisonDamage'])?></td>
                        <td BGCOLOR="<?php echo($poisonBg.'">'.$monsterDataRow['poisonDuration'])?></td>
                        <td BGCOLOR="<?php echo($poisonBg.'">'.$monsterDataRow['poisonLimits'])?></td>
                    </font>
            </table>
            <br>

            <table class='data'>
                <tr class='dataTh'>
                    <th><img src=assets/resources/elements/BLA.png height='20' width='20'> Damage</th>
                    <th><img src=assets/resources/elements/BLA.png height='20' width='20'> Tolerance<br>Initial / Step / Max</th>
                <tr>
                    <font color="<?php echo($blastFont)?>">
                        <td BGCOLOR="<?php echo($blastBg.'">'.$monsterDataRow['blastDamage'])?></td>
                        <td BGCOLOR="<?php echo($blastBg.'">'.$monsterDataRow['blastLimits'])?></td>
                    </font>
            </table>
            <br>

            <table class='data'>
                <tr class='dataTh'>
                    <th><img src=assets/resources/tools/pitfall.png height='20' width='20'> / <img src=assets/resources/tools/shock.png height='20' width='20'></th>
                    <th><img src=assets/resources/tools/flash.png height='20' width='20'> / <img src=assets/resources/tools/sonic.png height='20' width='20'> / <img src=assets/resources/tools/dung.png height='20' width='20'></th>
                    <th><img src=assets/resources/tools/meat.png height='20' width='20'></th>
                <tr>
                    <td><?php echo($monsterDataRow['pitfallTrap'] . ' / ' . $monsterDataRow['shockTrap'])?>
                    <td><?php echo($monsterDataRow['flashBomb'] . ' / ' . $monsterDataRow['sonicBomb'] . ' / ' . $monsterDataRow['dungBomb'])?>
                    <td><?php echo($monsterDataRow['meat'])?>
            </table>
            <center>
            <br>

            <!---->
            <!--create monster area table-->
            <!---->
            <table class='data'>
            <tr class='dataTh'>
            </table>
            </center>
        </form>
    </div>
</body>
</html>
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
    <form method=POST name="form">
        <div id='navigation'>
            <a href="index.php">Weapons</a>
            <a href="monsters.php">Monsters</a>
            <a href="maps.php">Maps</a>
            <a href="items.php">Items</a>
            <a href="armor.php">Armor</a>
            <a href="skills.php">Skills</a>

            <input type='hidden' name='postCheck'>

            <?php
                require_once('db_connect.php');

                        $bothCheck = "";
                        $bladeCheck = "";
                        $gunCheck = "";

                     if(isset($_POST['postCheck'])) {
                        $minRaritySelect=$_POST['minRaritySelect'];
                        $maxRaritySelect=$_POST['maxRaritySelect'];
                        $armorName=$_POST['armorName'];

                        if(isset($_POST['skillLoad'])){
                            $skillLoad=$_POST['skillLoad'];
                        }else{
                            $skillLoad=null;
                        }

                        $typeFilterId=$_POST['type'];
                        switch($typeFilterId) {
                            case "0": $bothCheck = "checked"; break;
                            case "1": $bladeCheck = "checked"; break;
                            case "13": $gunCheck = "checked"; break;
                        }

                    } else {
                        $minRaritySelect=1;
                        $maxRaritySelect=10;
                        $armorName=null;
                        $bladeCheck = "checked";
                        $gunCheck = "";
                        $bothCheck = "";
                        $typeFilterId = "1";
                        $skillLoad=null;
                    }

                    if(isset($_POST['ResetButton'])){
                        //set defaults
                        $minRaritySelect=1;
                        $maxRaritySelect=10;
                        $armorName=null;
                        $bladeCheck = "checked";
                        $gunCheck = "";
                        $bothCheck = "";
                        $typeFilterId = "1";
                        $skillLoad=null;
                    }
            ?>

        </div>

        <div id='section'>
            <H2>Armor</H2>

            <!--//******-->
            <!--//Inputs-->
            <!--//******-->
            <input type='submit' value='Search' name='SearchButton' id='defaultActionButton' style='display:none;' /> <!--button for enter listener-->
            <input type='submit' value='Reset All Fields' name='ResetButton'/><br>
            <input type='text' placeholder='Armor Name' value="<?php echo($armorName); ?>" name='armorName'/>
            <br>
            <!--//rarity sliders-->
            Rarity: <?php echo($minRaritySelect . ' - ' . $maxRaritySelect); ?>
            <br>
            Min Rarity:
                <input type='range' min=1 max=10 value='<?php echo($minRaritySelect) ?>' step=1.0 id='minRange' name='minRaritySelect' onchange='updateRarityMin(this.value, maxRaritySelect.value)' class='range' >

            <br>
            Max Rarity:
                <input type='range' min=1 max=10 value='<?php echo($maxRaritySelect) ?>' step=1.0 id='maxRange' name='maxRaritySelect' onchange='updateRarityMax(minRaritySelect.value, this.value)' class='range' >
            <br>

            <table class='nav'>
                <tr>
                    <td class='navTdTh'><input type='radio' id='blademaster' value='1' name='type' onchange='this.form.submit()' <?php echo($bladeCheck) ?>>
                    <img src=assets/resources/weapons/1.png >
                     |
                    <td class='navTdTh'><input type='radio' id='gunner' value='13' name='type' onchange='this.form.submit()' <?php echo($gunCheck) ?>>
                    <img src=assets/resources/weapons/13.png >
                    <td class='navTdTh'>
                     |
                    <td class='navTdTh'><input type='radio' id='both' value='0' name='type' onchange='this.form.submit()' <?php echo($bothCheck)?>>
                    <img src=assets/resources/weapons/0.png >
                </tr>
            </table>

            <?php
                $sql = 'SELECT a.* , i.name, i.rare
                        FROM armorstats as a
                        JOIN item as i on a.itemId=i.itemId
                        WHERE i.name like "%' . $armorName . '%"
                        AND i.rare BETWEEN ' . $minRaritySelect . ' AND ' . $maxRaritySelect . '
                        AND hunterTypeId = ' . $typeFilterId . '
                        ORDER by i.name, i.rare
                        LIMIT 100';

                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armor table error');
                $row=mysqli_fetch_array($result);
            ?>

            <!---->
            <!--create armor table-->
            <!---->

            <table class='data'>
            <tr class='dataTh'>
            <th>Name</th>
            <th>Rare</th>
            <th>Type</th>
            <th>Set Piece</th>
            <th>Slot</th>
            <th><img src=assets/resources/elements/FIR.png height='20' width='20'></th>
            <th><img src=assets/resources/elements/WAT.png height='20' width='20'></th>
            <th><img src=assets/resources/elements/THU.png height='20' width='20'></th>
            <th><img src=assets/resources/elements/ICE.png height='20' width='20'></th>
            <th><img src=assets/resources/elements/DRA.png height='20' width='20'></th>
            </tr>

            <?php
                while($row=mysqli_fetch_array($result))
                {
                    //slot display
                    switch($row['slot']) {
                    case "0": $slot = "---"; break;
                    case "1": $slot = "o--"; break;
                    case "2": $slot = "oo-"; break;
                    case "3": $slot = "ooo"; break;}

                    echo('<tr>')
                            .'<td><input type="submit" name="skillLoad" value="'.$row['name'].'" class="button" >'
                            .'<td>' . $row['rare']
                            .'<td><img src=assets/resources/weapons/'.$row['hunterTypeId'].'.png ></th>'
                            .'<td><img src=assets/resources/armor/'.$row['equipSlot'].'.png ></th>'
                            //.'<td>' . $row['equipSlot']
                            .'<td>' . $slot
                            .'<td>' . $row['fireRes']
                            .'<td>' . $row['waterRes']
                            .'<td>' . $row['thunderRes']
                            .'<td>' . $row['iceRes']
                            .'<td>' . $row['dragonRes'];
                }
            ?>
            </table>
        </div>

        <div id='aside'>
            <h2>Skills</h2>


            <?php
            if ($skillLoad){

                    $sql = 'SELECT i.name armorName
                            , a.equipSlot setPiece
                            , (SELECT name FROM skilltree where skillTreeId=itst.skillTreeId) skillTree
                            , itst.pointValue points
                            FROM item i
                            JOIN armorstats a ON i.itemId=a.itemId
                            JOIN itemtoskilltree itst ON i.itemId=itst.itemId
                            WHERE i.name like "%' . $skillLoad . '%"
                            ORDER by setPiece';

                    $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; armor table error');
                    $row=mysqli_fetch_array($result);
            ?>

                <table class='data'>
                <tr class='dataTh'>
                <th>Name</th>
                <th>Set Piece</th>
                <th>Skill Tree</th>
                <th>Skill Points</th>
                </tr>

                <?php
                    while($row=mysqli_fetch_array($result))
                    {
                        echo("<tr>"); //new table row
                        echo "<td>" . $skillLoad;
                        echo "<td>" . $row['setPiece'];
                        echo "<td>" . $row['skillTree'];
                        echo "<td>" . $row['points'];
                    }
                    echo('</table>');
            }
                ?>
        </div>

    </form>
</body>
</html>
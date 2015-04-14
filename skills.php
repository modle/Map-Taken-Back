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
                
                if(isset($_POST['postCheck'])) {
                    $skillName=$_POST['skillName'];

                    if(isset($_POST['armorLoad'])){
                            $armorLoad=$_POST['armorLoad'];
                        }else{
                            $armorLoad=null;
                        }
                        
                    $equipSlotId=$_POST['equipSlot'];

                } else {
                    $skillName=null;
                    $armorLoad=null;
                    $equipSlotId=0;

                }

                if(isset($_POST['ResetButton'])){
                    $skillName=null;
                    $armorLoad=null;
                    $equipSlotId=0;
                }
            ?>
        </div>
        <div id='section'>
            <H2>Skills</H2>
            <input type='submit' value='Search' name='SearchButton' id='defaultActionButton' style='display:none;' /> <!--button for enter listener-->
            <input type='submit' value='Reset All Fields' name='ResetButton'/><br>
            <input type='text' placeholder='Skill Name' value='<?php echo($skillName); ?>' name='skillName' />
            <br>
            <?php
                $sql = "SELECT equipSlotId, slot
                        FROM equipslot
                        ORDER BY equipSlotId";
                $result=mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli) . '; equipslot dropdown error');
                echo "<select name='equipSlot' value='' >Slot</option>";
                while($row=mysqli_fetch_array($result))
                {
                    if($row[equipSlotId]==$equipSlotId) {
                        echo "<option value=$row[equipSlotId] selected>$row[slot]</option>";
                    } else {
                        echo "<option value=$row[equipSlotId]>$row[slot]</option>";
                    }
                }
                echo "</select>";
            ?>
            <br>
            Positive Only
            <br>

            <?php
                $sql = 'SELECT s.skillId
                            , st.skillTreeId
                            , st.name treeName
                            , s.name skillName
                            , s.requiredSkillTreePoints
                            , s.description
                        FROM skill s
                        JOIN skillTree st ON s.skillTreeId=st.skillTreeId
                        WHERE instr((st.name),"'. $skillName .'") > 0
                        ORDER by st.name, s.requiredSkillTreePoints';
                $result = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; skill table error');
                $row=mysqli_fetch_array($result);
            ?>

            <!---->
            <!--create item table-->
            <!---->

            <table class='data'>
            <tr class='dataTh'>
            <th>Tree</th>
            <th>Name</th>
            <th>Points</th>
            <th>Description</th>
            </tr>
            <?php
                while($row=mysqli_fetch_array($result))
                {
                    echo("<tr>")

                        ."<td><input type='submit' name='armorLoad' value='".$row['treeName']."' class='button' >"
                        //."<td>" . $row['treeName']
                        ."<td>" . $row['skillName']
                        ."<td>" . $row['requiredSkillTreePoints']
                        ."<td>" . $row['description'];
                }
            ?>
            </table>
        </div>

        <div id='aside'>
            <h2>Armor</h2>


            <?php

            if ($armorLoad){

                    $sql = 'SELECT (SELECT name FROM item WHERE itemId=a.itemId) armorName
                                , a.equipSlot setPiece
                                , st.name skillTree
                                , itst.pointValue points
                            FROM armorstats a
                                JOIN itemtoskilltree itst ON a.itemId=itst.itemId
                                JOIN skilltree st ON itst.skillTreeId=st.skillTreeId
                            WHERE st.name like "%' . $armorLoad . '%"
                            AND (0=' . $equipSlotId . ' OR a.equipSlotId=' . $equipSlotId . ')
                            ORDER by setPiece, itst.pointValue desc';


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
                        echo "<td>" . $row['armorName'];
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
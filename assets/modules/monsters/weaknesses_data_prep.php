<H2>Weaknesses</H2>

<?php

    //******
    //Get Monster Data
    //******
    $sql = 'SELECT *
            FROM monsters
            WHERE type="monster"
            AND id=' . $monsterId;
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
                <img src=assets/resources/elements/" . $weaknessOne . ".png class='icon'>";
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
                <img src=assets/resources/elements/" . $weaknessOne . ".png class='icon'>
                " . $separatorOne . "
                <img src=assets/resources/elements/" . $weaknessTwo . ".png class='icon'>";
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
                <img src=assets/resources/elements/" . $weaknessOne . ".png class='icon'>
                " . $separatorOne . "
                <img src=assets/resources/elements/" . $weaknessTwo . ".png class='icon'>
                " . $separatorTwo . "
                <img src=assets/resources/elements/" . $weaknessThree . ".png class='icon'>";
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
                <img src=assets/resources/elements/" . $weaknessOne . ".png class='icon'>
                " . $separatorOne . "
                <img src=assets/resources/elements/" . $weaknessTwo . ".png class='icon'>
                " . $separatorTwo . "
                <img src=assets/resources/elements/" . $weaknessThree . ".png class='icon'>
                " . $separatorThree . "
                <img src=assets/resources/elements/" . $weaknessFour . ".png class='icon'>";
            break;
    }
?>
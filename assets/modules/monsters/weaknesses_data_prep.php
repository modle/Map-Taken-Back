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
?>
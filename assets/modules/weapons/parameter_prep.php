<?php
    //slot display
    switch($weaponsRow['slot']) {
        case "0": $slot = "---"; break;
        case "1": $slot = "o--"; break;
        case "2": $slot = "oo-"; break;
        case "3": $slot = "ooo"; break;}

    //awaken element background
    if ($weaponsRow['awaken']==1) {$elemBg = '#CGCGCG';
    } else {$elemBg = null;}

    //affinity background
    if ($weaponsRow['affinity']<0) {$affinityBg = '#FC9097';
    } elseif($weaponsRow['affinity']>0) {$affinityBg = '#90F8FC';
    } else {$affinityBg = null;}
    $affinity=$weaponsRow['affinity']*100;

    //rare color
    $sql = 'SELECT color
            FROM rarecolors
            WHERE rare=' . $weaponsRow['rare'];
    $colorResult = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; color table error');
    $rareColorsRow=mysqli_fetch_array($colorResult);

    //create check
    if ($weaponsRow['created']==1) {$createFlag = 'C';
    } else {$createFlag = null;}

    //final check
    if ($weaponsRow['final']==1) {$finalFlag = 'F';
    } else {$finalFlag = null;}

    //show awaken as raw if checkbox unchecked
    if ($awakenFilter==1) {
        $hideAwaken=false;

        if ($weaponsRow['awaken']==1) {
            $elemType=$weaponsRow['awakenElement'];
            $elemValue=$weaponsRow['awakenElementValue'];
            $awakenFlag='*';
        } else{
            $elemType=$weaponsRow['element'];
            $elemValue=$weaponsRow['elementValue'];
            $awakenFlag='';
        }

    } else {
        $elemType=$weaponsRow['element'];
        $elemValue=$weaponsRow['elementValue'];
        $awakenFlag='';

        if ($elemFilter=='RAW' or $elemFilter=='ALL'){
            $hideAwaken=false;
        } else {
            $hideAwaken=true;
        }
    }
?>

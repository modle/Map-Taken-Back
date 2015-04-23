<?php
    //initialization
    $allCheck = "";
    $rawCheck = "";
    $firCheck = "";
    $watCheck = "";
    $thuCheck = "";
    $iceCheck = "";
    $draCheck = "";
    $parCheck = "";
    $poiCheck = "";
    $sleCheck = "";
    $blaCheck = "";
    $weaponSearch="";

    $weaponPath=null;
    $createCheck='';
    $createFilter=0;
    $finalCheck='';
    $finalFilter=0;
    $awakenCheck=null;
    $awakenFilter=0;
    $weaponSearch=null;
    $weaponType=1;

    $minRaritySelect=1;
    $maxRaritySelect=10;
    $allCheck = "checked";

    if(isset($_SESSION['weapons'])) {
        //this calls every post
        //weapons

        if($_SESSION['weapons']['createShow']==1){ $createCheck='checked'; $createFilter=1;
        } else { $createCheck=''; $createFilter=0;}

        //if($_SESSION['weapons']['createShow']==1){ $createCheck='checked'; $createFilter=1;
        //} else { $createCheck=''; $createFilter=0;}

        if($_SESSION['weapons']['finalShow']==1){ $finalCheck='checked'; $finalFilter=1;
        } else { $finalCheck=''; $finalFilter=0;}

        //if($_SESSION['weapons']['finalShow']==1){ $finalCheck='checked'; $finalFilter=1;
        //} else { $finalCheck=''; $finalFilter=0;}

        if($_SESSION['weapons']['awakenShow']==1){ $awakenCheck='checked'; $awakenFilter=1;
        } else { $awakenCheck=''; $awakenFilter=0;}

        //if($_SESSION['weapons']['awakenShow']==1){ $awakenCheck='checked'; $awakenFilter=1;
        //} else { $awakenCheck=''; $awakenFilter=0;}

        if(isset($_SESSION['weapons']['searchClick'])){
            $searchClickCSV = str_getcsv($_SESSION['weapons']['searchClick']);
            $weaponType=$searchClickCSV[1];
            $sql='SELECT name
                FROM weapondata
                WHERE weaponId='.$searchClickCSV[0].'
                AND weaponTYpeId='.$weaponType;
            $searchResultName = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; searchresultname table error');
            $row=mysqli_fetch_array($searchResultName);

            $weaponSearch=str_replace('\'','&#39;',$row['name']);
            $weaponPath=$row['name'];
        } else {
            //weapon path
            if(isset($_SESSION['weapons']['weaponPath'])){
                $weaponPath=$_SESSION['weapons']['weaponPath'];
                $weaponSearch=str_replace('\'','&#39;',$_SESSION['weapons']['weaponPath']);
            } else {
                $weaponPath=null;
                
                if(isset($_SESSION['weapons']['weaponName'])){
                    $weaponSearch=str_replace('\'','&#39;',$_SESSION['weapons']['weaponName']);
                }
            }

            if(isset($_SESSION['weapons']['weaponImage'])) {
                $weaponType=$_SESSION['weapons']['weaponImage'];
            } else {$weaponType=$_SESSION['weapons']['weaponType'];}
        }

        if(isset($_SESSION['weapons']['minRaritySelect'])) {
            $minRaritySelect=$_SESSION['weapons']['minRaritySelect'];
            $maxRaritySelect=$_SESSION['weapons']['maxRaritySelect'];
        } else {
            $minRaritySelect=1;
            $maxRaritySelect=10;
        }

        if(isset($_SESSION['weapons']['elementImage'])) {
            $elemFilter=$_SESSION['weapons']['elementImage'];
        } else {
            if(isset($_SESSION['weapons']['elem'])){
                $elemFilter=$_SESSION['weapons']['elem'];
            } else {
                $elemFilter='%';
            }
        }

        switch($elemFilter) {
            case "%": $allCheck = "checked"; break;
            case "RAW": $rawCheck = "checked"; break;
            case "FIR": $firCheck = "checked"; break;
            case "WAT": $watCheck = "checked"; break;
            case "THU": $thuCheck = "checked"; break;
            case "ICE": $iceCheck = "checked"; break;
            case "DRA": $draCheck = "checked"; break;
            case "PAR": $parCheck = "checked"; break;
            case "POI": $poiCheck = "checked"; break;
            case "SLE": $sleCheck = "checked"; break;
            case "BLA": $blaCheck = "checked"; break;
        }
    }
?>
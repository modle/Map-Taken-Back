<!DOCTYPE html>
<html>
<head>
    <title>Maps</title>
    <?php require_once('assets/modules/general/scripts_and_stylesheets.php'); ?>
</head>
<body>
    <div id='title'>
        Maps
    </div>
    <div id='navigation'>
        <?php require_once('assets/modules/general/nav.html'); ?>
    </div>
    <form method=POST name="form">
        <?php require_once('assets/modules/general/db_connect.php'); ?>
        <input type='hidden' name='postCheck'>
        <input type='hidden' value='1' name='area'>
        <input type='submit' value='Search' name='SearchButton' id='defaultActionButton' style='display:none;' />

        <?php if(isset($_POST['postCheck'])) {
                $area=$_POST['area'];
            } else {
                $area=1;
            }
        ?>

        <div id='wrapper'>
            <div id='main'>

                <H2></H2>

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

                <span class='zoom' id='ex1'>
                    <img src='assets/resources/maps/<?php echo($area) ?>.png' width='750' height='480' alt='derp'/>
                </span>
            </div>


        </div>
        <div id='footer'>
            <a href='#top'></a>
        </div>
    </form>
</body>
</html>
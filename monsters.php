<!DOCTYPE html>
<html>
<head>
    <title>Monsters</title>
    <?php require_once('assets/modules/general/header.php'); ?>
</head>
<body>
    <div id='title'>
        Monsters
    </div>
    <div id='navigation'>
        <?php require_once('assets/modules/general/nav.html'); ?>
    </div>
    <form method=POST name="form">
        <?php
            require_once('assets/modules/general/db_connect.php');
            require_once('assets/modules/weapons/hidden_inputs.php');
            require_once('assets/modules/monsters/vars.php');
        ?>

        <div id='wrapper'>
            <div id='aside'>
                <!--<input type='submit' value='Reset All Fields' name='ResetButton'/><br>-->
                <?php require_once('assets/modules/monsters/dropdown.php'); ?>
                <?php require_once('assets/modules/monsters/weaknesses_data_prep.php'); ?>
                <br>
                <?php require_once('assets/modules/monsters/weaknesses_table.php'); ?>
                <br>
                <?php require_once('assets/modules/monsters/location_details.php'); ?>
                <br>
                <?php require_once('assets/modules/monsters/quest_details.php'); ?>
            </div>
            <div id='section'>
                <H2>Carve Data</H2>
                <?php require_once('assets/modules/monsters/query.php'); ?>
                <?php require_once('assets/modules/monsters/table.php'); ?>
            </div>
        </div>
        <div id='footer'>
            <a href='#top'>Back to top</a>
        </div>
    </form>
</body>
</html>
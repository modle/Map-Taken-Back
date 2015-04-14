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
    <?php require_once('assets/modules/general/nav.html'); ?>
    <form method=POST name="form">
        <?php
            require_once('assets/modules/general/db_connect.php');
            require_once('assets/modules/weapons/hidden_inputs.php');
            require_once('assets/modules/monsters/vars.php');
        ?>
        <div id='wrapper'>
            <div id='section'>
                <H2>Monsters</H2>
                <input type='submit' value='Reset All Fields' name='ResetButton'/><br>
                <input type='text' placeholder='Monster Name' value='<?php echo($monsterName); ?>' name='monsterName'/><br>
                <?php require_once('assets/modules/monsters/dropdown.php'); ?>

                <H3>Carve Data</H3>
                <?php require_once('assets/modules/monsters/query.php'); ?>
                <?php require_once('assets/modules/monsters/table.php'); ?>
            </div>
            <div id='aside'>
                <?php require_once('assets/modules/monsters/weaknesses_data_prep.php'); ?>
                <br>
                <?php require_once('assets/modules/monsters/weaknesses_table.php'); ?>
                <br>
                <?php require_once('assets/modules/monsters/location_details.php'); ?>
            </div>
        </div>
        <div id='footer'>
            <a href='#top'>Back to top</a>
        </div>
    </form>
</body>
</html>
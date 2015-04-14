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
    <?php require_once('assets/modules/general/nav.html'); ?>

    <form method=POST name="form">
        <?php
            require_once('assets/modules/general/db_connect.php');
            require_once('assets/modules/armor/hidden_inputs.php');
            require_once('assets/modules/armor/vars.php');
            require_once('assets/modules/armor/reset_handler.php');
        ?>
        <div id='wrapper'>
            <div id='section'>
                <H2>Armor</H2>
                Click on an armor name to view that armor's skills.<br>
                <h4>Todo</h4> 1. Sort by elements<br>2. Sort/filter by set piece<br>3. Sort/filter by slot<br>
                <br>
                <?php
                    require_once('assets/modules/armor/inputs.php');
                    require_once('assets/modules/skills/dropdown.php');
                    require_once('assets/modules/armor/query.php');
                    require_once('assets/modules/armor/table.php');
                ?>
            </div>
            <div id='aside'>
                <h2>Skills</h2>
                <?php require_once('assets/modules/armor/skills_aside.php'); ?>
            </div>
        </div>
        <div id='footer'>
            <a href='#top'>Back to top</a>
        </div>
    </form>
</body>
</html>
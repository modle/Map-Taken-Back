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
    <?php require_once('assets/modules/general/nav.html'); ?>

    <form method=POST name="form">
        <?php
            require_once('assets/modules/general/db_connect.php');
            require_once('assets/modules/skills/hidden_inputs.php');
            require_once('assets/modules/skills/vars.php');
            require_once('assets/modules/skills/reset_handler.php');
        ?>
            
        <div id='wrapper'>
            <div id='section'>
                <H2>Skills</H2>
                Click on a tree name to view armor containing that skill.<br>

                <?php
                    require_once('assets/modules/skills/inputs.php');
                    require_once('assets/modules/skills/query.php');
                    require_once('assets/modules/skills/table.php');
                ?>
            </div>
            <div id='aside'>
                <h2>Armor</h2>
                <h4>Todo</h4>
                1. Filter/sort by points (pos or neg or both)<br>
                2. Filter/sort by rarity<br>
                3. Filter by piece<br>
                4. Sort by name<br>
                5. Retain tree name on dropdown change<br>
                <br>
                <?php
                    require_once('assets/modules/skills/armor_aside.php');
                ?>
            </div>
        </div>
        <div id='footer'>
            <a href='#top'>Back to top</a>
        </div>
    </form>
</body>
</html>
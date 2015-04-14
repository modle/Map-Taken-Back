<!doctype html>
<html>
<head>
    <title>Armor</title>
    <?php require_once('assets/modules/general/scripts_and_stylesheets.php'); ?>
</head>
<body>
    <div id='title'>
        Armor
    </div>
    <div id='navigation'>
        <?php require_once('assets/modules/general/nav.html'); ?>
    </div>


    <form method=POST name="form">
        <?php
            require_once('assets/modules/general/db_connect.php');
            require_once('assets/modules/armor/hidden_inputs.php');
            require_once('assets/modules/armor/vars.php');
            require_once('assets/modules/armor/reset_handler.php');
        ?>
        <div id='wrapper'>
            <div id='aside' <?php if (!$skillLoad){?>style="display:none"<?php } ?>>
                <h2>Skill Match</h2>
                <?php
                    require('assets/modules/general/reset_button.php');
                    require_once('assets/modules/armor/skills_aside.php');
                ?>
            </div>
            <div id='section'>
                <H2>Armor Search</H2>
                Click on an armor name to view that armor's skills.<br>
                <!--
                    Todo
                    1. Sort by elements<br>
                    2. Sort/filter by slot<br>
                    3. Sum skill tree values for entire set in skills section<br>
                -->
                <br>
                <?php
                    require('assets/modules/general/reset_button.php');
                    require_once('assets/modules/armor/inputs.php');
                    require_once('assets/modules/armor/query.php');
                    require_once('assets/modules/armor/table.php');
                ?>
            </div>
        </div>
        <div id='footer'>
            <a href='#top'>Back to top</a>
        </div>
    </form>
</body>
</html>
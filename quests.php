<!DOCTYPE html>
<html>
<head>
    <title>MH4U Quests</title>
    <?php require_once('assets/modules/general/header.php'); ?>
</head>
<body>
    <div id='title'>
        Quests
    </div>
    <div id='navigation'>
        <?php require_once('assets/modules/general/nav.html'); ?>
    </div>
    <form method=POST name="form">
        <?php
            require_once('assets/modules/general/db_connect.php');
            require_once('assets/modules/quests/hidden_inputs.php');
            require_once('assets/modules/quests/vars.php');
            require_once('assets/modules/quests/reset_handler.php');
        ?>
        <div id='wrapper'>
            <div id='section'>
                <H2>Quest Search</H2>
                <?php
                    require('assets/modules/general/reset_button.php');
                    echo('<br>');
                    require_once('assets/modules/quests/dropdown.php');
                    require_once('assets/modules/quests/inputs.php');
                    require_once('assets/modules/quests/query.php');
                    require_once('assets/modules/quests/table.php');
                ?>
            </div>
            <div id='aside'>
            </div>
        </div>
        <div id='footer'>
            <a href='#top'>Back to top</a>
        </div>
    </form>
</body>
</html>
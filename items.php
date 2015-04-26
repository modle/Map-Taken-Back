<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
    <?php require_once('assets/modules/general/header.php'); ?>
</head>
<body>
    <div id='title'>
        Items
    </div>
    <div id='navigation'>
        <?php require_once('assets/modules/general/nav.html'); ?>
    </div>
    <form method=POST name="form">
        <?php
            require_once('assets/modules/general/db_connect.php');
            require_once('assets/modules/items/hidden_inputs.php');
            require_once('assets/modules/items/vars.php');
            require_once('assets/modules/items/reset_handler.php');
        ?>
            
        <div id='wrapper'>
            <div id='aside' <?php if (!$materialSearchId){?>style="display:none"<?php } ?>>
                <h2>Source</h2>
                <?php
                    require('assets/modules/general/reset_button.php');
                    require_once('assets/modules/items/source.php');
                ?>
            </div>
            <div id='section'>
                <?php
                    //if($sourceLoad){
                    //    echo("<h2>Source</h2>");
                    //    require('assets/modules/general/reset_button.php');
                    //    require_once('assets/modules/items/source.php');
                    //    }
                ?>

                <H2>Item Search</H2>
                Search for an item, then click an item name to view source.<br>
                <?php
                    require('assets/modules/general/reset_button.php');
                    require_once('assets/modules/items/inputs.php');
                    require_once('assets/modules/items/query.php');
                    require_once('assets/modules/items/table.php');
                ?>
            </div>
        </div>
        <div id='footer'>
            <a href='#top'>Back to top</a>
        </div>
    </form>
</body>
</html>
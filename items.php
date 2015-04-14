<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
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
            require_once('assets/modules/items/hidden_inputs.php');
            require_once('assets/modules/items/vars.php');
            require_once('assets/modules/items/reset_handler.php');
        ?>
            
        <div id='wrapper'>
            <div id='section'>
                <H2>Item Search</H2>
                Search for an item, then click an item name to view source.<br>
                <input type='submit' value='Reset All Fields' name='ResetButton'/><br>
                <input type='text' placeholder='Item Name' value="<?php echo($itemName); ?>" name='itemName' />
                <br><br>
                <?php
                    require_once('assets/modules/items/query.php');
                    require_once('assets/modules/items/table.php');
                ?>
            </div>
            <div id='aside'>
                <h2>Source</h2>
                <?php require_once('assets/modules/items/source.php'); ?>
            </div>
        </div>
        <div id='footer'>
            <a href='#top'>Back to top</a>
        </div>
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>MH4U Weapons</title>
    <?php require_once('assets/modules/general/header.php'); ?>
    <?php //echo $_SESSION['posted']['createShow']; ?>

</head>
<body>
    <div id='title'>
        Weapons
    </div>
    <div id='navigation'>
        <?php require_once('assets/modules/general/nav.html'); ?>
    </div>
    <form method=POST name="form" id="form">
        <?php
            require_once('assets/modules/general/db_connect.php');
            require_once('assets/modules/weapons/hidden_inputs.php');
            require_once('assets/modules/weapons/vars.php');
            require_once('assets/modules/weapons/reset_handler.php');
            require_once('assets/modules/weapons/wishlist_delete.php');
        ?>
        <div id='wrapper'>
            <div id='section' <?php if (!$weaponPathId && !$materialsResult){?>style="display:none"<?php } ?>>
                <?php require_once('assets/modules/weapons/materials.php'); ?>
                <?php require_once('assets/modules/weapons/upgrade_path.php'); ?>
            </div>
            <div id='section'>
                <!--default values, to handle post when weapon checkbox is re-checked-->
                <?php require_once('assets/modules/weapons/default_values.php'); ?>

                <H2>Weapon Search</H2>
                <td class='navTdTh'><center><input type='submit' value='Reset All Fields' name='ResetButton'/></center>
                <?php
                    require_once('assets/modules/weapons/dropdown.php');
                    require_once('assets/modules/weapons/inputs.php');
                    require_once('assets/modules/weapons/query.php');
                    echo("<a href='#wishlist'>View Wishlist</a>");
                    require_once('assets/modules/weapons/table.php');
                ?>
            </div>
            <div id='aside'>
                <?php require_once('assets/modules/weapons/wishlist.php'); ?>
            </div>
        </div>
        <div id='footer'>
            <a href='#top'>Back to top</a>
        </div>
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>MH4U Weapons</title>
    <?php require_once('assets/modules/general/scripts_and_stylesheets.php'); ?>
</head>
<body>
    <div id='title'>
        Weapons
    </div>
    <div id='navigation'>
        <?php require_once('assets/modules/general/nav.html'); ?>
    </div>
    <form method=POST name="form">
        <?php
            require_once('assets/modules/general/db_connect.php');
            require_once('assets/modules/weapons/hidden_inputs.php');
            require_once('assets/modules/weapons/vars.php');
            require_once('assets/modules/weapons/reset_handler.php');

            if(isset($_POST['wishDelete'])){
                $wishDelete=str_replace('\'','&#39;',$_POST['wishDelete']);
                $sql = "DELETE FROM wishlist
                        WHERE id=$wishDelete";
                $resultWishDelete = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; wish delete error');
            }
        ?>
        <div id='wrapper'>
            <div id='section'>
                <?php require_once('assets/modules/weapons/upgrade_path.php'); ?>
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
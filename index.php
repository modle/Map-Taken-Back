<!DOCTYPE html>
<html>
<head>
    <title>MH4U Weapons</title>
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
                <!--default values, to handle post when weapon checkbox is re-checked-->
                <?php require_once('assets/modules/weapons/default_values.php'); ?>

                <H2>Weapons</H2>
                <td class='navTdTh'><center><input type='submit' value='Reset All Fields' name='ResetButton'/></center>
                <?php
                    require_once('assets/modules/weapons/dropdown.php');
                    require_once('assets/modules/weapons/inputs.php');
                    require_once('assets/modules/weapons/query.php');
                    require_once('assets/modules/weapons/table.php');
                ?>
            </div>
            <div id='aside'>
                <?php require_once('assets/modules/weapons/wishlist.php'); ?>
                <?php require_once('assets/modules/weapons/upgrade_path.php'); ?>
            </div>
        </div>
        <div id='footer'>
            <a href='#top'>Back to top</a>
        </div>
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Maps</title>
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
            require_once('assets/modules/inventory/hidden_inputs.php');
            require_once('assets/modules/inventory/vars.php');

            if(isset($_POST['armoryDelete'])){
                $armoryDelete=str_replace('\'','&#39;',$_POST['armoryDelete']);
                $sql = "DELETE FROM armory
                        WHERE id =$armoryDelete";
                $resultArmoryDelete = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli) . '; wish delete error');
            }

        ?>
        <div id='wrapper'>
            <div id='section'>
                <H2>Inventory</H2>
                <?php
                    require_once('assets/modules/inventory/query.php');
                    require_once('assets/modules/inventory/table.php');
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
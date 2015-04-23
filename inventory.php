<!DOCTYPE html>
<html>
<head>
    <title>Inventory</title>
    <?php require_once('assets/modules/general/header.php'); ?>
</head>
<body>
    <div id='title'>
        Inventory
    </div>
    <div id='navigation'>
        <?php require_once('assets/modules/general/nav.html'); ?>
    </div>
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
            <div id='main'>
                <H2>Inventory</H2>
                <?php
                    require_once('assets/modules/inventory/query.php');
                    require_once('assets/modules/inventory/table.php');
                ?>
            </div>
        </div>
        <div id='footer'>
            <a href='#top'>Back to top</a>
        </div>
    </form>
</body>
</html>
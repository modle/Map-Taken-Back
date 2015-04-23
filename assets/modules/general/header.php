<link rel="stylesheet" href="assets/stylesheets/mobile.css" type="text/css" media="only screen and (max-width: 550px)" />
<link rel="stylesheet" href="assets/stylesheets/main.css" type="text/css" media="only screen and (min-width: 551px)" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script type="text/javascript" src="assets/scripts/mh4u_jsFunctions.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script src='assets/scripts/jquery_zoom.js'></script>
<script src="assets/scripts/mh4u_jquery.js"></script>
<?php session_start(); ?>
<?php
    
    if(isset($_POST['armorPostCheck'])) {
        $_SESSION['armor']=$_POST;
    }
    if(isset($_POST['indexPostCheck'])) {
        $_SESSION['weapons']=$_POST;
    }
    if(isset($_POST['inventoryPostCheck'])) {
        $_SESSION['inventory']=$_POST;
    }
    if(isset($_POST['itemsPostCheck'])) {
        $_SESSION['items']=$_POST;
    }
    if(isset($_POST['mapsPostCheck'])) {
        $_SESSION['maps']=$_POST;
    }
    if(isset($_POST['monstersPostCheck'])) {
        $_SESSION['monsters']=$_POST;
    }
    if(isset($_POST['questsPostCheck'])) {
        $_SESSION['quests']=$_POST;
    }
    if(isset($_POST['skillsPostCheck'])) {
        $_SESSION['skills']=$_POST;
    }
    
?>
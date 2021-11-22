
<html>
<body>
<video autoplay muted loop style="
    margin-left: 0px;
    size: contain;
    background-size: cover;
    width: 100%;
    height: 100%;
">
    <source src="../médias/video/Medieval Fantasy Tavern  D&D Fantasy Music and Ambience.mp4" type="video/mp4" ></video>          
<div>
<?php
require './database.php';
?>
<?php
session_start()
?>
<?=$_SESSION['pseudo'] ?>
<br>
<?=$_SESSION['user_kind'] ?>
<br>
<?=$_SESSION['biere'] ?>
<br>
<?=$_SESSION['bourse'] ?>
</div>
<a href="./gest_acc.php"><img src="../médias/photos/Lhydromel_des_gueux.png"></a>
</body>
</html>
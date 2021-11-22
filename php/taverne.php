<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    video#test {
   position:fixed; 
   right: 0; 
   bottom: 0;
   min-width: 100%;
   width: auto;
   height: auto;
   z-index:-100;
   background: no-repeat;
   background-size:cover;
    }
</style>

<video autoplay muted loop style id="test">

    <source src="../médias/video/Medieval Fantasy Tavern  D&D Fantasy Music and Ambience.mp4" type="video/mp4" ></video>          
<div>
<?php
require './database.php';
?>
<?php
session_start();
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
<a href="./couloir.php"><button>Vers le couloir</button>
</body>
</html>
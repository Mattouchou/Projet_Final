<?php
require './database.php';
session_start();
if(isset($_SESSION['pseudo']));

    else{
        header('location: ./index.php');
    }
    ?>
<?php
    require './database.php';
    $username = $_SESSION['pseudo'];
    $req = $pdo->query("SELECT * FROM users WHERE pseudo = '$username'");
    while($data = $req->fetch()){
        echo "<div class='text'>
        <p>Bonjour $data->pseudo<br>
        Tu es actuellement au rang $data->user_kind !
        Tu as $data->biere bières <img src='../médias/photos/Icônes.png'> $data->bourse pièces <img src='../médias/photos/Argent.png'></p></div>";
    }
    ?>
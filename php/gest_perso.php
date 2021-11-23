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
        echo "<p> Bonjour $data->pseudo </p>
        <p> Tu es actuellement au rang $data->user_kind !</p>
        <p> Tu as $data->biere bières et $data->bourse pièces !";
    }
    ?>

<?php
include './fonction_valid_donnees.php';
if(!empty($_POST)){
    $errors = array();
    if(empty($_POST['pseudo'])){
        echo 'faux1';
    }
elseif(empty($_POST['nom'])){
    echo 'faux1';
}
elseif(empty($_POST['prenom'])){
    echo 'faux2';
}
elseif(empty($_POST['mail'])){
    echo 'faux4';
}
elseif(strlen($_POST['password']) <6 ){
    echo 'faux5';
}
elseif(empty($_POST['password'])){
    echo 'faux6';
}
elseif(($_POST['password']) != ($_POST['confirm_pass'])){
    echo 'faux7';
}
else{
    require "./database.php";
    $req = $pdo->prepare("INSERT INTO users SET pseudo = ?, nom = ?, prenom = ?, mail = ?, password = ?, user_kind = 2");
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $req->execute([$_POST['pseudo'], $_POST['nom'], $_POST['prenom'],$_POST['mail'], $password]);
    header('location:./connexion.php');
    exit();
}
}
if(isset($errors)){
    $_SESSION['erreur'] = $errors;
    header('location:./index.php');
    ?>
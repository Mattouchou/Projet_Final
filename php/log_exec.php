<?php
require "./database.php";
if(isset($_POST["submit"]))
{
    if(empty($_POST['pseudo']) || empty ($_POST['password']))
{
echo 'remplissage absent';
}
else{
    $query = "SELECT * FROM users WHERE pseudo = :pseudo LIMIT 1";
    $statement = $pdo->prepare($query);
    $statement-> execute(
        array(
            'pseudo' => $_POST['pseudo']
        )
        );
        $count = $statement -> rowCount();
        if($count > 0)
        {
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            if(password_verify($_POST['password'], $result['password'])){
                session_start();
                $_SESSION['pseudo'] = $_POST['pseudo'];
                $_SESSION['user_kind'] = $result['user_kind'];
                if($_SESSION['user_kind'] == 1){
                exit(header('location:./taverne.php'));
            }
                elseif($_SESSION['user_kind'] == 2){
                    exit(header('location:./taverne.php'));
                }
                header('location:./index.php');
            }
        }
            else{
                header("location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
                exit;
    }
}
}
?>
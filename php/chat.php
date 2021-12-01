<?php
if(!empty($_POST)){
    $errors = array();

  if(empty($_POST['mess'])){
      $errors['mess'] = "T'es tellement bourré que t'as rien écris ahaha !";
  }
  if(empty($errors)){
    require './database.php';
  $req = $pdo->prepare('INSERT INTO discut SET mess = ?, creadate = NOW()');
  $req->execute([$_POST['mess']]);
}
else{
    $errors['mess'] = "T'es tellement bourré que t'as rien écris ahaha !";
}
}
?>
<style>
    @font-face {
        font-family: "Olondon";
        src: url("../fonts/Olondon_.otf");
    }

    @font-face {
        font-family: "Seagram";
        src: url("../fonts/Seagramtfb.ttf");
    }

    legend {
        font-family: "Olondon";
        font-size: 28px;
        width: 400px;
        text-align: center;
        
    }

    form .mess {
        font-family: "Seagram";
        border: 1px solid;
        border-radius: 10%;
        background-color: #A36236;
        width: 412px;
        margin-left: 950px;
        position: relative;
        margin-right: 303px;
        bottom: 805px !important;
        
    }

    form .text {
        text-align: center;
    }

    table {
        text-align: center;
    }

    h1 {
        word-wrap: break-word;
        font-size: 19px;
        margin-left: 20px;
    margin-right: 20px;
}

    h4 {
        font-size: 13px;
    }

    #mess {
        background-color: #705747;
        border: 0px;
        width: 372;
        font-family: "Olondon";
    }    
</style>

<?php 
include './head.php'
?>


<form action="#" method="POST">
    <?php if(isset($errors)){
            foreach ($errors as $message){
                echo "<p class='errortest'> $message</p>";
            }
        }
        ?>
    <div class="mess">

        <br>
        <div>
            <legend>Parlez entre vous, les chiens galeux</legend>
            <div>
                <br>
                <?php

        $req = $pdo->query('SELECT * FROM discut');
        while($data = $req->fetch()){
            echo "<h2>$username :</h2><br><h1>$data->mess</h1><br><h4>$data->creadate</h4><br>";
        }
        ?>
            </div>
            <div class="text">
                <br>
                <label for="message"> Entre ton message...</label>
                <br>
                <br>
                <textarea name="mess" id="mess"></textarea>

                <div class="bouton">
                    <br>

                    <button type="submit">Poster</button>
                    <br>
                    <br>
                </div>
            </div>


</form>
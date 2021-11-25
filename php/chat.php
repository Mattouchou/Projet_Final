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
        border-radius: 10%;
        background-color: indianred;
        font-size: 31px;
    }
</style>

<?php 
include './head.php'
?>
<legend>Parlez entre vous, les chiens galeux</legend>

<form action="#" method="POST">
<?php if(isset($errors)){
            foreach ($errors as $message){
                echo "<p class='errortest'> $message</p>";
            }
        }
        ?>
<div>
    <label for="message"> Entre ton message...</label>
        <textarea name="mess" id="mess"></textarea>
<div>
    <button type="submit">Poster </button>
</div>
    </div>


</form>
</fieldset>

<?php
if(!empty($_POST)){
    $errors = array();

  if(empty($_POST['mess'])){
      $errors['mess'] = "T'es tellement bourré que t'as rien écris ahaha !";
  }
  $req = $pdo->prepare('INSERT INTO discut SET mess = ?, creadate = NOW()');
  $req->execute([$_POST['mess']]);
  $errors['mess'] = 'message non enregistré';
}
else{
    $errors['formulaire'] = 'veuillez renseigner les champs ';
}
?>


<table>
    <tr>
       
        <?php

        $req = $pdo->query('SELECT * FROM discut');
        while($data = $req->fetch()){
            echo "<tr><td>$username : </td><td>$data->mess</td><td>$data->creadate</td>";
        }
        ?>

    </tr>
</table>
<?php
include './gest_perso.php';
?>
<fieldset>
<legend>Parlez entre vous, les chiens galeux</legend>

<form action="#" method="POST">

<div>
    <label for="message"> Entre ton message...</label>
        <input type="textarea" name="message" id="message">
<div>
    <button type="submit">Poster </button>
</div>
    </div>
<?php
if(!empty($POST)){
    $errors = array();

  if(empty($_POST['mess'])){
      $errors['mess'] = "T'es tellement bourré que t'as rien écris ahaha !";
  }
  $req = $pdo->prepare('INSERT INTO discut SET mess= ?, creadate = NOW()');
  $req->execute([$_POST]['mess']);
  $errors['mess'] = 'message enregistré';
}
?>

</form>
</fieldset>

<!--<table>
    <tr>
        <th>Nom</th>
        <br>
        <th>Message</th>

    </tr>
</table>
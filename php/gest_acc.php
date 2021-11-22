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
<body background="../médias/photos/image.jpg">
<form action="./upload_avatar.php" method="POST" enctype="multipart/form-data">
    <label> Avatar : </label>
    <input type="file" name="avatar"/>
    <button type="submit">Inserez votre photo de bouffon</button>
   </form> 
 </body>
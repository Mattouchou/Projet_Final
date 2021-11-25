  <body>
  <?php
  $req = $pdo->query('SELECT * FROM race');
        while($data = $req->fetch()){ 
          $id = $_GET['id'];
          if(isset($_GET['race']));
else{
    echo 'nop';
}      
          echo "<img class='avatar' src=$data->avatar </img>
          <p> $data->race</p>
          <p> $data->id</p>";
        }
            ?>
            <style>
              .avatar{
                width : 100px;
              }
              </style>
    <ul>
      <li>
        <button class="homme" onclick="Homme()"><span>Homme</span></button>
      </li>
      <li>
        <button class="femme" onclick="Femme()"><span>Femme</span></button>
      </li>
    </ul>
    <div class="image_avatar">

    <span id="Dropdown_male" style="display: none" ;>
      <select>
        <option>Humain</option>
        <option>Nain</option>
        <option>Orc</option>
        <option>Troll</option>
        <option>Démon</option>
        <option>Alien</option>
        <option>Raptor Jésus</option>
        <option>Mort-Vivant</option>
        <option>Gnome</option>
        <option>Vampire</option>
        <option>Loup-Garou</option>
        <option>Elfe</option>
      </select>
    </span>
    <span id="Dropdown_female" style="display: none" ;>
      <select>
        <option>Humaine</option>
        <option>Naine</option>
        <option>Orcque</option>
        <option>Trollesse</option>
        <option>Démone</option>
        <option>Alien</option>
        <option>Raptor Jésus</option>
        <option>Morte-Vivante</option>
        <option>Gnomette</option>
        <option>Vampiresse</option>
        <option>Louve-Garette</option>
        <option>Elfette</option>
      </select>
    </span>

  </div>

    <script src="../projet_final_JS.js"></script>
  </body>
</html>

<fieldset>
        <legend>Inscription</legend>
        
        <form action="./inscription.php" method="POST">
        
        <label for="pseudo">Nom d'utilisateur</label>
        <input type="text" name="pseudo" id="usname" required>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="name" required>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prename" required>
        <label for="mail">E-mail</label>
        <input type="email" name="mail" id="mail" required>
        <label for="password">Mot de Passe</label>
        <input type="password" name="password" id="uspass" required>
        <label for="password">Confirmez le mot de Passe</label>
        <input type="password" name="confirm_pass" id="confpass" required>
        <button type="submit">Inscription</button>
</form>
    </fieldset>
    <fieldset class="fieldset2">
    <legend>Déjà inscrit ?</legend>
    <a href="./connexion.php">Connectez-vous !</a>
</fieldset>
</div>
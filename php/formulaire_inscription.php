<style>
    @font-face {
        font-family: "Olondon";
        src: url("../fonts/Olondon_.otf");
    }

    @font-face {
        font-family: "Seagram";
        src: url("../fonts/Seagramtfb.ttf");
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        background-image: url(../médias/photos/parchemin.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    legend {
        font-family: "Olondon";
        font-size: 50px;
        margin-top: -59px;
        transform: rotate(-11deg);
    }

    h1 {
        font-family: "Olondon";
        font-size: 45px;
        margin-left: 14px;
        margin-top: 79px;
    }

    fieldset {
        width: 30%;
        margin: auto;
    }

    label {
        font-size: 45px;
        font-family: "Seagram";
    }

    input {
        border-radius: 31px;
        padding: 12px 53px;
        font-size: 15px;
    }

    form {
        margin-top: 100px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    form button {
        font-family: "Seagram";
        font-size: 30px;
        border-radius: 40%;
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-property: transform;
        transition-property: transform;
    }

    form button:hover,
    form button:focus,
    form button:active {
        -webkit-transform: scale(1.1) rotate(4deg);
        transform: scale(1.1) rotate(4deg);

    }

    footer button {
        font-family: "Seagram";
        font-size: 30px;
        border-radius: 17%;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-property: transform;
        transition-property: transform;
        margin-left: 248px;
        margin-top: -44px;
    }

    footer button:hover,
    footer button:focus,
    footer button:active {
        -webkit-transform: scale(1.1) rotate(4deg);
        transform: scale(1.1) rotate(4deg);

    }

    footer .retour {
        font-family: "Seagram";
        font-size: 30px;
        border-radius: 40%;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-property: transform;
        transition-property: transform;
        margin-left: 1300px;
    }
</style>

<legend>Rejoins la secte des gueux !</legend>

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
    <br>
    <button type="submit">Inscription</button>

</form>



<footer>
    <h1>Déjà inscrit ?</h1>
    <a href="./connexion.php"><button type="submit">Connectez-vous !</button></a>
    <div class="retour">
        <a href="./index.php"><button type="submit" name="back">Retour</button></a>
    </div>
</footer>
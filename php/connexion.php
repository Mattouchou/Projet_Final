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
        transform: rotate(-11deg);
    }

    fieldset {
        width: 30%;
        margin: auto;
    }

    label {
        font-size: 50px;
        font-family: "Seagram";
    }
    input {
        border-radius: 31px;
        padding : 12px 53px;
        font-size: 15px;
    }
    form {
        margin-top: 150px;
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
        border-radius: 40%;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-property: transform;
        transition-property: transform;
        margin-left: 792px;
        margin-top: 300px;

    }

    footer button:hover,
    footer button:focus,
    footer button:active {
        -webkit-transform: scale(1.1) rotate(4deg);
        transform: scale(1.1) rotate(4deg);

    }
</style>


<legend>Viens tuter un petit coup à l'barraque !</legend>

<form action='./log_exec.php' method="POST"><label for="pseudo">Nom d'Utilisateur</label>
    <br>
    <input type="text" name="pseudo">
    <br>
    <label for="password">Mot de Passe</label>
    <br>
    <input type="password" name="password">
    <br>
    <br>
    <button type="submit" name="submit">Valider</button>

</form>

<footer>

    <a href="./index.php"><button type="submit" name="back">Retour</button></a>

</footer>

<style>
    @font-face {
        font-family: "Olondon";
        src: url("../../Projet_final1/fonts/Olondon_.otf");
    }

    @font-face {
        font-family: "Seagram";
        src: url("../../Projet_final1/fonts/Seagramtfb.ttf");
    }

    body {
        background-image: url(../médias/photos/parchemin.jpg);
        background-repeat: no-repeat;
        background-size: cover;
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
        padding: 12px 53px;
        font-size: 15px;
    }

    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>

<fieldset>

    <legend>Connexion</legend>

    <form action='./log_exec.php' method="POST"><label for="pseudo">Nom d'Utilisateur</label>

        <input type="text" name="pseudo"><label for="password">Mot de Passe</label>
        <input type="password" name="password"><button type="submit" name="submit">Connexion</button>

    </form>
</fieldset>
<style> fieldset{
        width : 30%}
    label {
        font-size: 24px;
    }
    input {
        border-radius: 31px;
        padding : 12px 53px;
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
    <legend>Connection</legend>
    <form action='./log_exec.php' method="POST">
    <label for="pseudo">Nom d'Utilisateur</label>
    <input type="text" name="pseudo">
    <label for="password">Mot de Passe</label>
    <input type="password" name="password">
    <button type="submit" name="submit">Connection</button>
    </form>
</fieldset>
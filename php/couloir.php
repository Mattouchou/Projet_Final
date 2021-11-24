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
        background-image: url(../médias/photos/couloir.jpg);
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        width: auto;
        height: auto;
        z-index: -100;
        background-size: cover;
    }

    .cave {
        text-decoration:none; 
        width: 56px;
        display: flex;
        position: relative;
        margin-bottom: -188px;
        margin-left: 1074px;
    }

    .chambre {
        text-decoration:none; 
        width: 111px;
        display: flex;
        position: relative;
        margin-bottom: 84px;
        margin-left: 783px;
    }

    .jeuxsoc {
        text-decoration:none; 
        position: relative;
        margin-bottom: -1px;
        margin-left: 541px;
        display: flex;
        width: 88px;
    }

    .jeuxrol {
        text-decoration:none; 
        width: 147px;
        display: flex;
        position: relative;
        margin-bottom: -37px;
        margin-left: 318px;
    }

    .cuisine {
        text-decoration:none; 
        width: 84px;
        display: flex;
        position: relative;
        margin-bottom: 272px;

        margin-left: 1245px;
    }

    .retour {
        text-decoration:none; 
        margin-left: 783px;
        margin-bottom: 9px;
        display: flex;
        position: relative;
        margin-top: -50px;
        width: 120px;
    }

    button {
        background-color: #A2816B;
        font-family: "Seagram";
        border-radius: 11%;
        font-size: 25px;
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        transition-duration: 0.3s;
        transition-property: transform;
    }

    button:hover,
    button:focus,
    button:active {
        transform: scale(1.1) rotate(4deg);

    }
</style>

<a href="./cave.php" class="cave"><button>Cave</button></a>
<a href="./chambre.php" class="chambre"><button>Chambres</button></a>
<a href="./jeux_soc.php" class="jeuxsoc"> <button>Jeux de <br> Société</button></a>
<a href="./jeux_role.php" class="jeuxrol"><button>Jeux de Rôle</button></a>
<a href="./cuisine.php" class="cuisine"><button>Cuisine</button></a>
<a href="./taverne.php" class="retour"><button>Retour Taverne</button></a>
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

        display: flex;
        position: relative;
        margin-bottom: -189px;
        margin-left: 1074px;
    }

    .chambre {

        display: flex;
        position: relative;
        margin-bottom: 135px;
        margin-left: 804px;
    }

    .jeuxsoc {

        position: relative;
        margin-bottom: 21px;
        margin-left: 551px;
        display: flex;
    }

    .jeuxrol {

        display: flex;
        position: relative;
        margin-bottom: -17px;
        margin-left: 341px;
    }

    .cuisine {
        
        display: flex;
        position: relative;
        margin-bottom: 260px;
        margin-left: 1245px;
    }

    button {

        font-family: "Seagram";
        border-radius: 40%;
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
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

    video#test {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        width: auto;
        height: auto;
        z-index: -100;
        background: no-repeat;
        background-size: cover;
    }

    img {
        width: 200px;
        border-radius: 48px;
        margin-top: 9px;
        margin-left: 15px;
    }

    p {
        font-size: 20px;
        font-family: "Seagram";
        background-color: #A36236;
        width: 258px;
        text-align: center;
    }
    
    button{
        margin-left: 7px;
        font-family: "Olondon";
        font-size: 22px;
        background-color: #F08f4f;
    }

/*Animation sur le bouton déconnexion*/
@keyframes hvr-buzz {
  50% {
    transform: translateX(3px) rotate(2deg);
  }
  100% {
    transform: translateX(-3px) rotate(-2deg);
  }
}

/*Je sélectionne le bouton déconnexion*/
.buzz {
  display: inline-block;
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
}

/*Animation*/
.buzz:hover, .buzz:focus, .buzz:active {
  animation-name: hvr-buzz;
  animation-duration: 0.15s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}
/*Animation sur le bouton vers le couloir*/
@keyframes hvr-wobble-vertical {
  16.65% {
    transform: translateY(8px);
  }
  33.3% {
    transform: translateY(-6px);
  }
  49.95% {
    transform: translateY(4px);
  }
  66.6% {
    transform: translateY(-2px);
  }
  83.25% {
    transform: translateY(1px);
  }
  100% {
    transform: translateY(0);
  }
}
/*Je sélectionne le bouton vers le couloir*/
.saut {
  display: inline-block;
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
}
/*Animation*/
.saut:hover, .saut:focus, .saut:active {
  animation-name: hvr-wobble-vertical;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 1;
}

</style>

<video autoplay muted loop style id="test">

    <source src="../médias/video/Medieval Fantasy Tavern  D&D Fantasy Music and Ambience.mp4" type="video/mp4"></video>

<a href="#"><img src="../médias/photos/Lhydromel_des_gueux.png"></a>

<br>
<br>
<a href="./couloir.php" class="saut"><button>Vers le couloir</button></a> 
<a href="./deco.php" class="buzz"><button>Déconnexion</button></a>
<br>
<br>
<?php
include './gest_perso.php';
?>
<br>
<a href="./gest_acc.php"><button>compte</button></a>

<br>
<a href="./chat.php"><button>Chat</button></a>

    </body>

    </html>
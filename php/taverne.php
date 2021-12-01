<?php 
include './head.php'
?>

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

    .logo img {
        width: 200px;
        border-radius: 48px;
        margin-top: 9px;
        margin-left: 23px;
    }

    img {
      width: 126px;
        border-radius: 48px;
        margin-top: 9px;
        margin-left: 23px;
    }

    p {
        font-size: 20px;
        font-family: "Seagram";
        background-color: #A36236;
        width: 258px;
        text-align: center;
        padding-bottom: 60px;
  
    }
    
    button{
        margin-left: 7px;
        font-family: "Olondon";
        font-size: 22px;
        background-color: #F08f4f;
    }
    .gauche {
        width: 16%;
        height: 100vh;
    }
    .milieu {
        width: 60%;
        height: 100vh;
    }
    .contenu {
        width: 100%;
        height: 90vh;
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

@-webkit-keyframes hvr-pulse {
  25% {
    transform: scale(1.1);
  }
  75% {
    transform: scale(0.9);
  }
}
@keyframes hvr-pulse {
  25% {
    transform: scale(1.1);
  }
  75% {
    transform: scale(0.9);
  }
}
.zoom {
  display: inline-block;
  vertical-align: middle;
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  margin-left: 32px;
}
.zoom:hover, .zoom:focus, .zoom:active {
  animation-name: hvr-pulse;
  animation-duration: 1s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

</style>

<video autoplay loop playsinline muted id="test">
    <source src="../médias/video/Medieval Fantasy Tavern  D&D Fantasy Music and Ambience.mp4" type="video/mp4"></video>
<div class="gauche">
    <div class="logo">
<a href="./taverne.php"><img src="../médias/photos/Lhydromel_des_gueux.png"></a>
</div>
<br>
<br>
<a href="./couloir.php" class="saut"><button>Vers le couloir</button></a> 
<a href="./deco.php" class="buzz"><button>Déconnexion</button></a>
<br>
<br>
<?php
include './gest_perso.php';
?>
<a href="./gest_acc.php" class="zoom"><button>Mes Caractéristiques</button></a>
</div>
<div class="milieu">
  <div class="contenu">
<?php
include './chat.php';
?>
</div>
</div>
    </body>
    </html>

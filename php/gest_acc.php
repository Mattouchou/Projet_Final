<?php
require './database.php';
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
    body {
        background-image: url(../médias/photos/parchemin.jpg);
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        width: auto;
        height: auto;
        z-index: -100;
        background-size: cover;
    }
</style>

<?php
include './gest_perso.php';
?>
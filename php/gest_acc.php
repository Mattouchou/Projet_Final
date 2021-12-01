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
        right: 0;
        bottom: 0;
        min-width: 100%;
        width: auto;
        height: auto;
        z-index: -100;
        background-size: cover;
    }

    .logo img {
        width: 200px;
        border-radius: 48px;
        margin-top: 17px;
        margin-left: 23px;
        margin-bottom: 6px;
        position: relative;

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
        border-radius: 30px;
        padding-bottom: 48px;
    }

    button {
        margin-left: 7px;
        font-family: "Olondon";
        font-size: 22px;
        background-color: #F08f4f;
    }

    ul {
        display: flex;
        margin-bottom: 30px;
        width: 143px;
        margin-left: 437px;
        background-color: #A36236;
        position: relative;
        top: auto;
        bottom: 38px;
        list-style-type: none;
    }

    select {
        margin-bottom: 248px;
        margin-left: 437px;
        background-color: #A36236;
        font-family: "Seagram";
        font-size: 20px;
    }

    .milieu .title h1 {
        text-align: center;
        width: 60%;
        height: 10vh;
        margin-left: auto;
        margin-right: auto;
        font-family: "Olondon";
        font-size: 77px;
    }

    .groupe {
        display: flex;
        justify-content: space-around;
    }

    .milieu {
        width: 60%;
        height: 100vh;
    }

    .gauche {
        width: 15%;
        height: 100vh;
    }

    .contenu {
        width: 100%;
        height: 90vh;
    }

    .droite {
        width: 15%;
        height: 100vh;
    }

    .text {
        margin-left: 379px;
    }
</style>
<div class="groupe">
    <div class="gauche">
        <div class="logo">
            <a href="./taverne.php"><img src="../médias/photos/Lhydromel_des_gueux.png"></a>
        </div>
    </div>
    <div class="milieu">
        <div class="title">
            <h1>Mes Caractéristiques</h1>
        </div>
        <div class="contenu">

            <?php
include './gest_perso.php';
?> <?php
include './race.php';
?>
        </div>
    </div>
    <div class="droite">
    </div>
</div>
<?php

    // Inizializza soldi se non esiste
    if(!isset($_SESSION['soldi'])){
        $_SESSION['soldi'] = 1000;
    }

    if($_SESSION["player"] > 21 || $_SESSION["npc"] > $_SESSION["player"]){
        $frase = "hai perso...";
        $_SESSION['soldi'] -= 500;
    }

    elseif($_SESSION["npc"] > 21 || $_SESSION["npc"] < $_SESSION["player"]){
        $frase = "hai vinto!";
        $_SESSION['soldi'] += 500;
    }

    else{
        $frase = "pareggio!";
    }

    $soldi = $_SESSION['soldi'];

?>
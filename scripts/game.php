<?php

// Inizializza soldi se non esiste
if(!isset($_SESSION['soldi'])){
    $_SESSION['soldi'] = 1000;
}

// Gestione pulsanti
if(isset($_POST["incrementa"])){
    $_SESSION['soldi'] += 500;
}

if(isset($_POST["decrementa"])){
    $_SESSION['soldi'] -= 500;
}

$soldi = $_SESSION['soldi'];


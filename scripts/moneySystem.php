<?php

    if(!isset($_SESSION['soldi'])){
        $_SESSION['soldi'] = 1000;
    }

    if(!isset($_SESSION["pagato"]) ){
        $_SESSION["pagato"] = false;
    }

    if($_SESSION["game_end"] && !$_SESSION["pagato"]){

        if($_SESSION["player"] > 21 || $_SESSION["npc"] > $_SESSION["player"]){
            $_SESSION["frase"] = "hai perso...";
            if(isset($_POST["double"])){
                $_SESSION['soldi'] -= 1000;
            }
            else{
                $_SESSION['soldi'] -= 500;
            }
        }

        elseif($_SESSION["npc"] > 21 || $_SESSION["npc"] < $_SESSION["player"]){
            $_SESSION["frase"] = "hai vinto!";
            if(isset($_POST["double"])){
                $_SESSION['soldi'] += 1000;
            }
            else{
                $_SESSION['soldi'] += 500;
            }
        }

        else{
            $_SESSION["frase"] = "pareggio!";
        }

        $_SESSION["pagato"] = true;
    }

    $soldi = $_SESSION['soldi'];
?>

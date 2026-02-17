<?php
    while($playerTurn){
        if(isset($_POST["call"])){
            $_SESSION["player"] += rand(1, 10);
        }
        if(isset($_POST["double"])){
            $_SESSION["player"] += rand(1, 10);
            $playerTurn = false;
        }
        if(isset($_POST["stop"])){
            $playerTurn = false;
        }
    }
    while($_SESSION["npc"] < 17){
         $_SESSION["npc"] += rand(1, 10);
    }
?>
<?php
    if(isset($_POST["reset"])){
        unset($_SESSION["player"]);
        unset($_SESSION["npc"]);
    }
    $playerTurn = true;
    if(!isset($_SESSION["npc"])){
        $_SESSION["npc"] = rand(1, 10) + rand(1, 10);    
    }

    if(!isset($_SESSION["player"])){
        $_SESSION["player"] = rand(1, 10) + rand(1, 10); 
    }
?>
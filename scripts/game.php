<?php

if(!isset($_SESSION["game_end"])){
    $_SESSION["game_end"] = false;
}

if($_SESSION["playerTurn"] && $_SESSION["player"] <= 21){

    if(isset($_POST["call"])){
        $_SESSION["player"] += rand(1, 10);
    }

    if(isset($_POST["double"])){
        $_SESSION["player"] += rand(1, 10);
        $_SESSION["playerTurn"] = false;
    }

    if(isset($_POST["stop"])){
        $_SESSION["playerTurn"] = false;
    }

    if($_SESSION["player"] > 21){
        $_SESSION["game_end"] = true;
    }

}

if(!$_SESSION["playerTurn"] && !$_SESSION["game_end"] && !$_SESSION["game_end"]){

    while($_SESSION["npc"] < 17){
        $_SESSION["npc"] += rand(1, 10);
    }

    $_SESSION["game_end"] = true;
}
?>

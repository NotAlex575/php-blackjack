<?php
    if(isset($_POST["call"])){
        $_SESSION["player"] += rand(1, 10);
    }
    if(isset($_POST["double"])){
        $_SESSION["player"] += rand(1, 10);
    }

?>
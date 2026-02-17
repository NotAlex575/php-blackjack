<?php
    session_start();
    if(isset($_POST["newGame"])){
        unset($_SESSION["player"]);
        unset($_SESSION["npc"]);
    }
    if(isset($_POST["restart"])){
        $_SESSION['soldi'] = 1000;
        unset($_SESSION["player"]);
        unset($_SESSION["npc"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Blackjack575</title>
</head>
<body class="bg-dark text-white">
    <?php 
        include_once "./layouts/header.php";
    ?>
    <main>
        <!--CONTENUTO GIOCO-->
        <div class="container">
            <div class="row">
                <div class="container text-center my-5 border border-success">
                    <h1 class="display-4 fw-bold p-4 bg-dark text-white rounded shadow">
                        BLACKJACK575! <br>
                        <small class="fs-5 text-warning">OGNI GAME COSTA 500 MONETE!</small>
                    </h1>
                </div>

                <div class="border border-success">
                     <?php
                        include_once "./scripts/setupGame.php";
                        include_once "./scripts/game.php";
                        include_once "./scripts/moneySystem.php";
                        if($_SESSION['soldi'] > 0){
                        echo
                        '
                            <div class="mt-5 col-12 d-flex flex-column justify-content-center align-items-center">
                                <h2>NPC</h2>
                                <p>'.$_SESSION["npc"].'</p>
                            </div>
                            <div class="my-5"></div>
                            <div class="my-5 col-12 d-flex flex-column justify-content-center align-items-center">
                                 <p>'.$_SESSION["player"].'</p>
                                <h2>PLAYER</h2>
                            </div>
                        ';
                        }
                        if(($_SESSION["player"] > 21 || 
                            $_SESSION["npc"] > 21 || 
                            $_SESSION["npc"] > $_SESSION["player"] || 
                            $_SESSION["npc"] < $_SESSION["player"]) && 
                            $_SESSION['soldi'] > 0){
                        echo'
                           <div class="container my-5">
                                <div class="row">
                                    <div class="col-12 d-flex flex-column align-items-center">
                                        <h3>'.$frase.'</h3>
                                        <form method="post" class="mt-3">
                                            <button type="submit" name="newGame" class="btn btn-warning">Nuovo game</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        ';
                        }
                        elseif($_SESSION['soldi'] <= 0){
                        echo'
                            <div class="container my-5">
                                <div class="row">
                                    <div class="col-12 d-flex flex-column align-items-center">
                                        <h3 class="mb-3">Hai perso tutti i soldi...</h3>
                                        <form method="post">
                                            <button type="submit" name="restart" class="btn btn-warning">Ricomincia</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        ';
                        }
                       
                        ?>
                </div>
            </div>
        </div>

        <!--PULSANTI PER AVVIARE GIOCO O FARE LE CALL-->
        <?php
        if($_SESSION['soldi'] > 0 && $_SESSION["player"] <= 21){
            echo 
            '
                <div class="container mt-4">
                <div class="row">
                    <div class="border border-success d-flex flex-column justify-content-between" style="height: 150px; padding: 1rem;">

                        <form method="post" class="mt-2">
                            <div class="d-flex justify-content-around">
                                <button type="submit" name="call">Call</button>
                                <button type="submit" name="double">Double</button>
                                <button type="submit" name="stop">Stop</button>
                            </div>
                        </form>

                    <div class="d-flex justify-content-end">
                            <p>Soldi attuali: '.$soldi.'</p>
                            </div>
                        </div>
                    </div>
                </div>
            ';
         }
         else if($_SESSION['player'] > 21){
             echo 
            '
                <div class="container mt-4">
                    <div class="row">
                        <div class="border border-success">
                            <div class="d-flex justify-content-end">
                                <p>Soldi attuali: '.$soldi.'</p>
                            </div>
                        </div>
                    </div>
                </div>
            ';
         }
         ?>
    </main>
</body>
</html>
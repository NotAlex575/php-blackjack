<?php 
 $buttonStart = true;

 if(isset($_POST['start'])){
    $buttonStart = false;
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
<body>
    <?php 
        include_once "./layouts/header.php";
    ?>
    <main>
        <!--CONTENUTO GIOCO-->
        <div class="container">
            <div class="row">
                <div class="border">
                     <?php
                            if ($buttonStart){
                                echo '<div class="d-flex justify-content-center align-items-center">
                                <form method="post">
                                    <button type="submit" name="start" class="btn btn-light">Start Game!</button>
                                </form>
                                </div>';
                            }
                            else{
                                echo '
                                <div class="mt-5 d-flex justify-content-center align-items-center">NPC</div>
                                <div class="my-5"></div>
                                <div class="mb-5 d-flex justify-content-center align-items-center">PLAYER</div>
                                ';
                            }
                        ?>
                </div>
            </div>
        </div>

        <!--PULSANTI PER AVVIARE GIOCO O FARE LE CALL-->
        <div class="container mt-4">
            <div class="row">
                <div class="border">
                    <h2 class="text-center">Pulsanti</h2>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
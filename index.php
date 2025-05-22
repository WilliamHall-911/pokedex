<?php
//include "db.php";
//include "function.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- لحتى يطابق جميع الابعاد في الاجهزة المختلفة-->
    <title>Pokedex - by William</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2" style="background-color: green"> <!--een website heeft 12 kolommen-->
            Dit is mijn eerste kolom
        </div>
        <div class="col-md-2" style="background-color: orange"> <!--md om de resoulotie te veranderen afhankelijk van het scherm resoulutie-->
            Dit is mijn tweede kolom
        </div>
        <div class="col" style="background-color: red">
            Dit is mijn derde kolom
        </div>

        <div class="row">
            <div class="col" style="background-color: yellow">
                nog maar een rij
            </div>
            <button type="button" class="btn btn-info">Info</button>
        </div>

        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/golduck.jpg" class="card-img-top" alt="..."> <!--na img schrijf ik de naam van de pokemon image-->
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4" style="background-color: #0dcaf0">
                    <div class="text-end">midden?</div>

                    </div>
                </div>


            </div>
    </div>

</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>

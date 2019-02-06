<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.0.0/dist/js/bootstrap.js">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Bienvenue sur ViensDindin</title>
</head>
<body>

    <?php
        include 'header.php';
    ?>


    <div class="jumbotron">
        <br><br><br>
            <h1>L'homme à la bièrre!</h1>
            <p class="lead">
                This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
            </p>
            <hr>
            <p>
                Catégorie s: Romance <br>
                Durée : 01h45min <br>
                Acteurs : Yao Antoine - Koné Moussa - Diti Raoùl

            </p>
            <p class="lead">
              
            </p>
    </div>

    <br><br>
    <h1>Films</h1>

    <br><br><br>

    <!-- Movies Grid -->
    <div class="container">

        <div class="row">

            <div class="col-4">
                    <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="Img/1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Le Parrain</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Regarder <i class="fas fa-play"></i></a>
                                <a href="#" class="btn btn-secondary">Détails <i class="fas fa-info-circle"></i></a>
                            </div>
                        </div>
            </div>

            <br><br>

            <div class="col-4">
                    <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="Img/1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Le Parrain</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Regarder <i class="fas fa-play"></i></a>
                                <a href="#" class="btn btn-secondary">Détails <i class="fas fa-info-circle"></i></a>
                            </div>
                        </div>
            </div>

            <br><br>

            <div class="col-4">
                    <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="Img/1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Le Parrain</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Regarder <i class="fas fa-play"></i></a>
                                <a href="#" class="btn btn-secondary">Détails <i class="fas fa-info-circle"></i></a>
                            </div>
                        </div>
            </div>

            <br><br>
          

        </div>

        <br><br>

    </div>

    <script>
        $(document).ready(function(){
            // Activate Carousel with a specified interval
            $("#carouselExampleIndicators").carousel({interval: 0});
        });
    </script>
</body>
</html>
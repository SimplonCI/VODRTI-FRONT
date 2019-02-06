<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
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


    <div class="container-fluid player">
        <div class="row">
            <div  class="col-8 player">
                <div class="section-play">

                </div>
                <div class="info">
                    <br>
                    <div class="row">
                        <div class="col-6">
                                <h3>Titre</h3> 
                                <h4>Description</h4>
                        </div>
                        <div class="col-6">
                                <div class="like">
                                    <span>514</span>
                                    <i class="far fa-thumbs-up"></i>
                                </div>
                                <div class="dislike">
                                    <span>24</span>
                                    <i class="far fa-thumbs-down"></i>
                                </div>
                                <div class="fav">
                                    <span>Favoris</span>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="share">
                                    <span>Partager</span> 
                                    <i class="fas fa-share-alt"></i>
                                </div>
                                <div class="ajouter">
                                    <span>Ajouter</span>
                                    <i class="fas fa-plus"></i>
                                </div>
                        </div>
                        

                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex praesentium exercitationem ab at reprehenderit veniam recusandae eaque perspiciatis commodi velit temporibus consequatur, cupiditate quidem magni et libero unde corrupti fuga?
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore in voluptas iure et quo. At quidem quae vitae veritatis deserunt inventore accusamus quia, tempora magni harum doloremque incidunt necessitatibus optio.

                    </p>
                </div>
            </div>

            <div class="col-3 sugestion">
                <h3>Recommandation</h3>

                <div class="row recommendation" id="recommendation">
                        <div class="col-6 img">
                           <img src="img/75.jpg" alt="..." class="rounded-0"> 
                        </div>
                        <div class="col-6 info">
                            <h5>Titre</h5>
                            <span>Type</span> <span>Catégories</span>
                        </div>
                        
                </div>
                <div class="row recommendation" id="recommendation">

                </div>
                <div class="row recommendation" id="recommendation">

                </div>
                <div class="row recommendation" id="recommendation">

                </div>
            </div>
        </div>
    </div>

</body>
</html>
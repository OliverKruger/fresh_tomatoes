<?php
require "settings/init.php";



$bind = [":movId" => 118];
$movie = $db->sql("SELECT  * FROM movie WHERE movId = :movId", $bind);
$movie = $movie[0];

?>



<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/movie.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<?php include "includes/navbar.php";?>

<div class="container-lg">
<div class="movieHeader">
    <h1><?php echo $movie->movName; ?></h1>
    <div class="infoBox">
        <p><?php echo $movie->movDate; ?></p>
        <span class="deler">|</span>
        <p><?php echo $movie->movGenre; ?></p>
    </div>
</div>
</div>

<div class="container_img_des">
    <img src="uploads/<?php echo $movie->movImage ?>">
    <div class="movInfo">
        <div class="rating top-pad"
        <h3>Rating:</h3>
        <p><?php echo $movie->movRating ?></p>
    </div>
    <div class="movInfo">
        <div class="rating"
        <h3>Actors:</h3>
        <p><?php echo $movie->movActors ?></p>
    </div>
    <div class="movInfo">
        <div class="rating"
        <h3>Age Limit:</h3>
        <p><?php echo $movie->movAge ?></p>
    </div>
</div>
<div class="text mt-5">
    <h3>Movie</h3>
    <p> <?php echo $movie->movDescription ?> </p>
</div>
</div>



<script>
    tinymce.init({
        selector: 'textarea',
    });
</script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="modal.js"></script>
</body>
</html>
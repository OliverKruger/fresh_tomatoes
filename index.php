<?php
require "settings/init.php";

if (!empty($_GET["type"])){
    if($_GET["type"] == "slet"){
        $id = $_GET["id"];

        $db-> sql("DELETE FROM movie WHERE movId = :movId", [":movId"=>$id], false);
    }
    header("location: index.php");
}

$movie = $db-> sql("SELECT * FROM movie WHERE movRating > 3");
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
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php include "includes/navbar.php";?>

<?php
foreach ($movie as $movie_) {
    ?>
    <div class="row border-bottom">
        <div class="col-12 col-md-4">
            <?php
            echo $movie_->movName;
            ?>
        </div>

        <div class="col-12 col-md-4 ">
            <?php
            echo number_format($movie_->movRating,2, ",", ".") . "<br>";
            ?>
        </div>
        <div class="col-12 col-md-2 ">
            <a href="index.php?type=rediger&id=<?php echo $movie_->movId; ?>">rediger</a>
        </div>
        <div class="col-12 col-md-2">
            <a href="index.php?type=slet&id=<?php echo $movie_->movId; ?>">slet</a>

        </div>
    </div>
    <?php
}
?>


<!-- Her skal sidens indhold ligge -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
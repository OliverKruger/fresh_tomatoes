<?php
require "settings/init.php";

if (!empty($_POST["data"])) {

    $data = $_POST["data"];

    $sql="INSERT INTO movie (movName, movDescription, movRating, movDate, movGenre, movActors, movAge, movTags) VALUES(:movName, :movDescription, :movRating, :movDate, :movGenre, :movActors, :movAge, :movTags)";
    $bind = [":movName" => $data["movName"], ":movDescription" => $data["movDescription"], ":movRating" => $data["movRating"],":movDate" => $data["movDate"],":movGenre" => $data["movGenre"], ":movActors" => $data["movActors"], ":movAge" => $data["movAge"], ":movTags" => $data["movTags"] ];

    $db->sql($sql, $bind, false);

    echo "Data er indsat. <a href='insert.php'>Indsæt nyt data</a>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Movie Database</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/8xhkox0n6a8hi1t2gt9s9aczn968f98m4nv82c8t5ic5ovni/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>


<div class="container mb-5 md-border">

<form method="post" action="insert.php">
    <div class="row">
        <div class="col-12 col-md-6 mb-4"
        <div class="form-group">
            <label class="mb-2 navn-margin" for="movName">Name</label>
            <input class="form-control" type="text" name="data[movName]" id="MovName" value="" maxlength="200"
                   placeholder="Name">
        </div>



    <div class="col-12 mb-4 ">
        <div class="form-group">
            <label class="mb-2" for="movDescription">Movie Description</label>
            <textarea class="form-control" name="data[movDescription]" id="movDescription"></textarea>
        </div>
    </div>


    <div class="col-12 col-md-6 mb-4 ">
        <div class="form-group">
            <label  class="mb-2" for="movRating">Movie Rating</label>
            <input class="form-control" type="number" step="0.1" name="data[movRating]" id="MovRating" value=""
                   placeholder="Rating" min="1" max="6.0">
        </div>
    </div>

    <div class="col-12 col-md-6 mb-4">
        <div class="form-group">
            <label  class="mb-2" for="movDate">Movie Date</label>
            <input class="form-control" type="date" name="data[movDate]" id="movDate" value="">
        </div>
    </div>

    <div class="col-12 col-md-6 mb-4">
        <div class="form-group">
            <label  class="mb-2" for="movGenre">Movie Genre</label>
            <input class="form-control" type="text" name="data[movGenre]" id="movGenre" value=""
                   placeholder="Genre" maxlength="100">
        </div>
    </div>

    <div class="col-12 col-md-6 mb-4">
        <div class="form-group">
            <label  class="mb-2" for="movActors">Actors</label>
            <input class="form-control" type="text" name="data[movActors]" id="movActors" value=""
                   placeholder="Actors" maxlength="200">
        </div>
    </div>

    <div class="col-12 col-md-6 mb-4">
        <div class="form-group">
            <label  class="mb-2" for="movAge">Age</label>
            <input class="form-control" type="number" name="data[movAge]" id="movRating" value=""
                   placeholder="Age" min="4">
        </div>
    </div>

    <div class="col-12 col-md-6 mb-4">
        <div class="form-group">
            <label  class="mb-2" for="movTags">Movie Tags</label>
            <input class="form-control" type="text" name="data[movTags]" id="movTags" value=""
                   placeholder="Tags" maxlength="200">
        </div>
    </div>
    <div class="col-12 col-md-4 mb-2">
        <button class="form-control btn btn-primary" type="submit" id="btnSubmit">Opret Data</button>
    </div>

    </div>
</form>
</div>

<script>
    tinymce.init({
        selector: 'textarea',
    });
</script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

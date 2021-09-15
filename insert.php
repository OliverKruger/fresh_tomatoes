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
</head>

<body>

<form method="post" action="insert.php">
    <div class="row">
        <div class="col-12 col-md-6"
        <div class="form-group">
            <label for="movName">Name</label>
            <input class="form-control" type="text" name="[movName]" id="MovName" value="" maxlength="200"
                   placeholder="Name">
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="movDescription">Movie Description</label>
            <textarea class="form-control" name="data[movDescription]" id="movDescription"></textarea>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="movRating">Movie Rating</label>
            <input class="form-control" type="number" step="0.1" name="data[movRating]" id="MovRating" value=""
                   placeholder="Rating" min="1" max="6.0">
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="movDate">Movie Date</label>
            <input class="form-control" type="text" name="data[movDate]" id="movDate" value=""
                   placeholder="Date">
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="movGenre">Movie Genre</label>
            <input class="form-control" type="text" name="data[movGenre]" id="movGenre" value=""
                   placeholder="Genre" maxlength="100">
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="movActors">Actors</label>
            <input class="form-control" type="text" name="data[movActors]" id="movActors" value=""
                   placeholder="Actors" maxlength="200">
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="movAge">Age</label>
            <input class="form-control" type="number" name="data[movAge]" id="movRating" value=""
                   placeholder="Age">
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="movTags">Movie Tags</label>
            <input class="form-control" type="text" name="data[movTags]" id="movTags" value=""
                   placeholder="Tags" maxlength="200">
        </div>
    </div>


</form>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

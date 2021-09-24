
<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);

$data["password"] = "Fresh_Tomatoes";


/*
 * password skal udfyldes og være Fresh_Tomatoes
 * NameSearch: Valgfri
$header = "HTTP/1.1 400 bad request"; // Sending malformed data results in a 400 Bad response.
$header = "HTTP/1.1 401 Unauthorized"; // Trying to access to the API without authentication results in a 401 Unauthorized response.
$header = "HTTP/1.1 404 Not Found"; // Not Found
$header = "HTTP/1.1 405 Methode Not Allowed"; Trying to use a methode on a route for which it is not implemented results in a 405 Methode Not Allowed
$header = "HTTP/1.1 422 Unprocessable Entity "; Sending invalid data results in a 422 Unprocessable Entity response.
$header = "HTTP/1.1 200 OK"; // Getting resource or a collection resource results in a 200 OK response.
$header = "HTTP/1.1 201 Created"; // Creating a resource results in a 201 Created response.
$header = "HTTP/1.1 204 No Content"; // Updating or deleting a resource in 204 No Content response.
*/

header('Content-Type: application/json; charset=utf-8');

if(isset($data) && $data["password"] == "Fresh_Tomatoes") {
    $sql = "SELECT * FROM movie WHERE 1=1";
    $bind = [];

    if(!empty($data["nameSearch"])) {
        $sql .= " AND movName = :movName";
        $bind[":movName"] = $data["nameSearch"];
    }

    if(!empty($data["actorsSearch"])) {
        $sql .= " AND movActors = :movActors";
        $bind[":movActors"] = $data["actorsSearch"];
    }

    if(!empty($data["ageSearch"])) {
        $sql .= " AND movAge = :movAge";
        $bind[":movAge"] = $data["ageSearch"];
    }

    if(!empty($data["tagsSearch"])) {
        $sql .= " AND movTags = :movTags";
        $bind[":movTags"] = $data["tagsSearch"];
    }


    $movie = $db->sql($sql, $bind);

    header("HTTP/1.1 200 OK");

    echo json_encode($movie);

}else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Din kodeord er forkert";
    echo json_encode($error);

}



?>

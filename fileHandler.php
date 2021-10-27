<?php


$data    = $_POST["result"];
$data    = json_decode("$data", true);

switch ($data["action"]) {
    case "getMovies":
        getMovies();
        break;
    case "getSessions":
        getSessions();
        break;
    case "bookSession":
        bookSession($data["sessionId"], $data["seat"]);
        break;
    case 'finalizeCart':
        finalizeCart($data["json"]);
        break;
    case 'getAll': 
        getAll();
        break;
} 

function getMovies(){
    $string = file_get_contents("movie-session.json");
    $json_data = json_decode($string,true);
    $movies = $json_data["movies"];
    echo json_encode($movies);
}

function getSessions(){
    $string = file_get_contents("movie-session.json");
    $json_data = json_decode($string,true);
    $sessions = $json_data["sessions"];
    echo json_encode($sessions);
}

function getMovie($id) {
    $string = file_get_contents("movie-session.json");
    $json_data = json_decode($string,true);
    $movies = $json_data["movies"];
    foreach ($movies as $key => $value){
        if ($value["id"] == $id) echo json_encode($value);
    }
    echo 1;
}

function getAll() {
    $string = file_get_contents("movie-session.json");
    $json_data = json_decode($string,true);
    echo json_encode($json_data);
}

function bookSession($sessionId, $seat){
    //Modify available and booked seat in session = > save to file
    $string = file_get_contents("movie-session.json");
    $json_data = json_decode($string,true);
    $movies = $json_data["movies"];
    //Save customer info - require more params
}

function finalizeCart($json) {
    file_put_contents("movie-session.json", $json);
    echo 1;
}
?>
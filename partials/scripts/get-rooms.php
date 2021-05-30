<?php
/**
 * GET DATA FOR ROOMS ARCHIVE
 */

require_once __DIR__ . '/database.php';

//Ottieni ospiti
$sql = "SELECT `id`, `room_number`
        FROM `stanze`";

$result = $conn->query($sql);

if($result && $result->num_rows > 0) { //Restituisce il numero di righe nel set di risultati
    $rooms = [];

    while($row = $result->fetch_assoc()) { //Restituisce un array associativo di stringhe che rappresentano la riga recuperata
        $rooms[] = $row;
    }

    //var_dump($rooms);
}
else {
    echo 'query error';
}

//Close DB Connection
$conn->close();
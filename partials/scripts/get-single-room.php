<?php
/**
 * GET DATA FOR ROOMS ARCHIVE
 */

require_once __DIR__ . '/database.php';

//get room id
$id = empty($_GET['id']) ? false : $_GET['id']; //se empty allora false, altrimenti ritorno l'id

if ($id) {
    $stmt = $conn->prepare("SELECT * FROM `stanze` WHERE `id`= ?"); //sull'id si stabilisce dopo il dato 
    $stmt->bind_param('s', $id); //bind: il type e a quale variabile va associato(quanti ? ho e di che type)

    //execute
    $stmt ->execute(); //interpreta quanto sopra

    $result = $stmt->get_result();


    if($result && $result->num_rows > 0) { //qui non faremo while, perchè l'id è un valore univoco
        $room = $result->fetch_assoc();
        //var_dump($room);
    }
}

//Close DB Connection
$conn->close();

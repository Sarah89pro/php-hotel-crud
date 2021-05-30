<?php //Get rooms

require_once __DIR__ . '/partials/scripts/get-rooms.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Hotel Crud</title>
</head>
<body>
    <main>
        <h1>Rooms Archive</h1>

        <!--Tabella Stanze-->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numero Stanza</th>
                    <th></th> <!--per il link di dettaglio-->
                </tr>
            </thead>

            <tbody>
            <?php //loop DB records
                if(!empty($rooms)) {
                    foreach($rooms as $room) { ?>
                        <tr>
                            <td><?php echo $room['id']; ?></td>
                            <td><?php echo $room['room_number'];?></td>
                            <td>
                                <a href="./show.php?id=<?php echo $room['id']; ?>">View Room Details</a>
                            </td>
                        </tr>
                    <?php }
                }
            ?>
            </tbody>
        </table>

    </main>

</body>
</html>
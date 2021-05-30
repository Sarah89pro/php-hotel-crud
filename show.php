<?php //Get rooms

require_once __DIR__ . '/partials/scripts/get-single-room.php';?>


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
        <?php if(!empty($room)) {?>
        <h1> Stanza <?php echo $room['room_number'];?> </h1>

        <!--Room Details-->
        <ul>
            <li>piano <?php echo $room['floor'];?> </li>
            <li>posti letto <?php echo $room['beds'];?> </li>
        </ul>

        <?php } else { ?>
            <h2>No Room found</h2>
        <?php } ?>

        <a href="./">Back to archive</a>

       

    </main>

</body>
</html>
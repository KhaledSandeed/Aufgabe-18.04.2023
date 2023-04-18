<?php
    if(isset($_POST['go'])){
        if(isset($_POST['height'], $_POST['weight'])){
            $height = $_POST['height'];
            $weight = $_POST['weight'];
            $ergebnis = sqrt(($height * $weight)/3600);
            echo "Deine Körperoberfläche ist" . round($ergebnis, 2) ."m2.";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="aufgabe6.php" method="POST">
        Größe: <input type="text" name="height" >
        Gewicht: <input type="text" name="weight">
        <input type="submit" name="go" value="berechnen">
    </form>
</body>
</html>
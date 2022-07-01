<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include 'connection.php';
    $cursor = $seanse->find();
    $resIN = 0;
    $resOut = 0;
    foreach ($cursor as $document) {
        $in = $document['traffic_in'];
        $out = $document['traffic_out'];
        $resIN += $in;
        $resOut += $out;
    }
    $result = "Общий входящий трафик: $resIN и исходящий трафик: $resOut";
    echo $result;
    echo "<script> localStorage.setItem('sum', '$result');</script>";
    ?>
</body>
</html>
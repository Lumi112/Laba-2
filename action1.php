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
    $name = $_GET['name'];
    $cursor = $client->find(['name' => $name]);
   
    

    $result = "Сообщения от клиента:";
    $result .= "<table border = 1>";
    $result .= "<tr><th>Name</th><th>Balance</th><th>IP</th><th>Messages</th></tr>";
    foreach ($cursor as $document) {
        $name = $document['name'];
        $IP = $document['ip'];
        $balance = $document['balance'];
        $messages = $document['messages'];
        if(is_object($messages)){
            $messages = (array)$messages;
            $messages = (implode('</br> ', $messages));
        }
        $result .=   "<tr><td>$name</td><td>$balance</td><td>$IP</td><td>$messages</td></tr>";
    }
    $result .= "</table>";
    echo $result;
    echo "<script> localStorage.setItem('$name', '$result');</script>";
    ?>
</body>
</html>
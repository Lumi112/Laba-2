<?php include "connection.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаба2</title>
    <script>
        function action1() {
            let client = document.getElementById("name").value;
            let result = localStorage.getItem(client);
            document.getElementById('res').innerHTML = result;
        }
    </script>
</head>
<body>
<form action="action1.php" method="get">
    <p><strong> Сообщения от выбранного клиента: </strong>
            <select name="name" id="name" onchange="action1()">
                <?php
                    $find = $client->distinct("name");
                    foreach ($find as $document) {
                        echo "<option>$document</option>";
                    }
                ?>
            </select>
        <button>ОК</button>
    </p>
</form>
<form action="action2.php" method="get">
<p><strong>Общий входящий и исходящий трафик:</strong>
    <button>ОК</button>
</p>
</form>
<form action="action3.php" method="get">
<p><strong> Вывести людей с отрицательным балансом </strong>
    <button>ОК</button>
</p>
</form>
<div id="res"></div>
</body>
</html>
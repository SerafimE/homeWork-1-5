<?php
$weather = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=498817&appid=f3d4855cbacbc20a8845e49073b854df');
$array_weather = json_decode($weather, true);
date_default_timezone_set('Europe/Moscow');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <title>Домашнее задание к лекции 1.5</title>
</head>
<body>
<div>
    <h1>Weather and forecasts in <?= $array_weather["name"] . ', ' . $array_weather["sys"]["country"] ?></h1>
    <p id="date"><?= date('l j F Y') ?></p>
    <p id="date"><?= date('H:i') ?></p>
    <p id="img"><img src="<?= 'http://openweathermap.org/img/w/' . $array_weather["weather"][0]["icon"] . '.png' ?>" alt=""></p>
    <p class="condition"><?= 'temp: ' .  round($array_weather["main"]["temp"] - 273.15, 2) . ' °C' ?></p>
    <p class="condition"><?= 'wind speed: ' . $array_weather["wind"]["speed"] . ' m/s' ?></p>
    <p class="condition"><?= 'pressure: ' . $array_weather["main"]["pressure"] . ' gPa'?></p>
    <p id="humidity"><?= 'Humidity: ' . $array_weather["main"]["humidity"] . '%' ?></p>
</div>
</body>
</html>
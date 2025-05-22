<?php
header('Content-Type: application/json');

// Clé API OpenWeatherMap
$apiKey = "987a82da705fc3a07f7208c9806d42db"; 
$city = urlencode($_GET['city'] ?? '');

if (!$city) {
    echo json_encode(['cod' => 400, 'message' => 'Ville non fournie']);
    exit;
}

$url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric&lang=fr";

$response = file_get_contents($url);
echo $response;

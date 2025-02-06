<?php
require 'phpMQTT.php'; 
include 'config.php';

$topic = $_POST['topic'] ?? '';
$message = $_POST['message'] ?? '';

if ($topic && $message) {
    $mqtt = new Bluerhinos\phpMQTT($MQTT_BROKER, $MQTT_PORT, 'phpMQTTClient');

    if ($mqtt->connect(true, null, $MQTT_USERNAME, $MQTT_PASSWORD)) {
        $mqtt->publish($topic, $message, 0);
        $mqtt->close();
        echo json_encode(['status' => 'Příkaz proveden']);
    } else {
        echo json_encode(['error' => 'Chyba na serveru']);
    }
} else {
    echo json_encode(['error' => 'Chyba na serveru']);
}
?>

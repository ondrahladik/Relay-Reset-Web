<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" CONTENT="text/html; charset=windows-1250"> 
    <meta name="viewport" content="width=device-width, viewport-fit=cover">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $NAME_RELAY ?></title>
</head>
<body>
    <div class="section">
        <h1><?php echo $NAME_RELAY ?></h1>
        <h2></h2>
    </div>

    <div class="section">
        <form id="mqttForm">
            <input type="hidden" id="topic" name="topic" value="geiger">
            <button type="button" id="reset">Restart</button>
        </form>
    </div>

    <div id="response"></div>

    <script>
        const MQTT_TOPIC = '<?php echo $MQTT_TOPIC; ?>';
    </script>
    <script src="script.js"></script>
</body>
</html>

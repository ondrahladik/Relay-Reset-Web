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
            <input type="hidden" id="topic" name="topic" value="reset">
            <button type="button" id="reset-relay">Reset relay</button>
            
            <?php if ($RESET_DEVICE == true): ?>
                <button type="button" id="reset-device">Reset device</button>
            <?php endif; ?>
            
            <?php if ($RESET_ALL == true): ?>
                <button type="button" id="reset-all">Reset all</button>
            <?php endif; ?>
        </form>
    </div>

    <div class="section">
        <form id="mqttForm">
            <input type="hidden" id="topic" name="topic" value="on/off">
            <?php if ($ON_OFF_RELAY == true): ?>
                <button type="button" id="off-relay">OFF relay</button>
                <button type="button" id="on-relay">ON relay</button>
            <?php endif; ?>
        </form>
    </div>

    <?php if ($RESPONSE_ACTIVE == true): ?>
        <div id="response"></div>
    <?php endif; ?>

    <script>
        const MQTT_TOPIC = '<?php echo $MQTT_TOPIC; ?>';
    </script>
    <script src="script.js"></script>
</body>
</html>

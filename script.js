function sendMessage(command) {
    fetch('send_mqtt.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            topic: MQTT_TOPIC,
            message: command
        })
    })
    .then(response => response.json())
    .then(data => {
        const responseDiv = document.getElementById('response');
        responseDiv.innerText = data.status || data.error;
        responseDiv.style.display = 'block';
        setTimeout(() => {
            responseDiv.style.display = 'none';
        }, 3000);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

document.getElementById('reset-relay').addEventListener('click', function() {
    sendMessage('reset-relay');
});

document.getElementById('reset-device').addEventListener('click', function() {
    sendMessage('reset-device');
});

document.getElementById('reset-all').addEventListener('click', function() {
    sendMessage('reset-all');
});
<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        //Pusher.logToConsole = true;

        var pusher = new Pusher('60b12015223e3113d075', {
            cluster: 'mt1',
            encrypted: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            //alert(JSON.stringify(data));
            var div = document.getElementById('tuan');

            div.innerHTML += data.message;
        });
    </script>
</head>
<body>
<h1>Pusher Test</h1>
<p id="tuan">
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
</p>

</body>

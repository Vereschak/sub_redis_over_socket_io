<!DOCTYPE html>
<html>
<head>
    <script src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
    <script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>
    <script>
        var i = 0;
        // socket.io specific code
        var socket = io.connect('http://localhost:8000');

        socket.on('news', function (msg) {
            console.log(i++);
            console.log(msg);
        });


    </script>
</head>
<body>

</body>
</html>
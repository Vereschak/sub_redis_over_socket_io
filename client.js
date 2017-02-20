var redis = require("redis");
var io = require('socket.io').listen(8000);

var sub = redis.createClient({host: 'host', port: port, password: 'password'});


sub.on("message", function (channel, message) {
    io.emit(channel, "sub channel " + channel + ": " + message);
});

io.sockets.on('connection', function (socket) {

    sub.subscribe("news");

});


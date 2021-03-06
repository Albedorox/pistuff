var http = require('http').createServer(handler); //require http server, and create server with function handler()
var fs = require('fs'); //require filesystem module
var express = require('express');
var app = express();

http.listen(8080); //listen to port 8080
app.use(express.static('/public'));

function handler (req, res) { //create server
  fs.readFile(__dirname + '/index.html', function(err, data) {
    if (err) {
      res.writeHead(404, {'Content-Type': 'text/html'}); //display 404 on error
      return res.end("404 Not Found");
    }
    res.writeHead(200, {'Content-Type': 'text/html'}); //write HTML
    res.write(data);
    return res.end();
  });
} 

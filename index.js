const express = require('express');
const app = express();
var url = require('url');

app.use(express.static(__dirname + '/public'));
let viewers = 0;
app.get('/', function(req, res)
{
    viewers++;
    console.log(viewers);
    res.sendFile(__dirname + '/index.html');
});

var server = app.listen(3000, function()
{
    console.log("Node server listening on port: 3000");
});

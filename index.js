const express = require('express');
const app = express();
var url = require('url');

app.use(express.static(__dirname + '/public'));
let viewers = 0;
app.get('/', function(req, res)
{
    viewers++;
    console.log(viewers);
    if(req.url == "/about.html")
    {
        res.sendFile(__dirname + '/about.html');
        res.end();
    }

    res.sendFile(__dirname + '/index.html');
});

var server = app.listen(3000, function()
{
    console.log("Node server listening on port: 3000");
});























// const express = require('express');
// const fs = require('fs');
// const app = express();


// app.use(express.json());


// let views = 0;
// app.get('/viewer-count', (req, res) => {
//     res.sendFile(__dirname + 'public/index.html')
//     views++;
//     console.log(`This page has been viewed ${views} times`);
// });



// // assign port number and listen  
// const port = process.env.PORT || 3000;
// app.listen(port, () => 
// {
//     console.log(`Server is listening on port ${port}`);
// });
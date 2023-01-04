const request = require('request');
const options = 
{
    method: 'POST', 
    url: 'http://localhost:3000/',
    headers: 
    {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(
        {
            key: 'edjan'
        }
    )
};

request(options, (error, response, body) =>
{
    if(error) throw new Error(error);
    console.log(body);
});
'use strict';

const express = require('express');

const port = 3000;
const server = express();

server.get('/test', (req, res) => {
    res.send('test answer')
});

server.post('/test', (req, res) => {
    res.send('test answer')
});

server.listen(port, () => {
    console.log('listening')
});

import express from 'express';
import React from 'react';
import { renderToString } from 'react-dom/server';
import App from './src/pages/creditcard/App';
import Html from './src/pages/Html';
import { ServerStyleSheet } from 'styled-components';
const port = 3000;
const server = express();
const bodyParser = require('body-parser');

server.use(bodyParser.urlencoded({ extended: true }));
server.use(bodyParser.json());
server.use('/static', express.static('dist'));

server.use(express.static("public"));

server.get('/test', (req, res) => {
    res.send('test answer')
});

server.post('/test', (req, res) => {
    const sheet = new ServerStyleSheet();

    const body = renderToString(sheet.collectStyles(<App title={req.body.title}/>));
    const styles = sheet.getStyleTags();
    const title = 'Server side Rendering with Styled Components';

    res.send(
        Html({
            body,
            styles,
            title,
            'bundleFileName': 'client-bundle-creditcard'
        })
    );
});

server.listen(port, () => {
    console.log('listening')
});

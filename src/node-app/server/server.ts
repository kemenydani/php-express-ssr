import express from "express";
import React from "react";
import ReactDOMServer from "react-dom/server";
import { App } from "../client/components/app";

const server = express();

server.use('/static', express.static('static'));

server.post("/get", (req, res) => {
  res.send(`<html><body>testei</body></html>`)
});

server.post("/test", (req, res) => {
  const component = ReactDOMServer.renderToString(React.createElement(App));
  res.send(`<html>
                <body><div id="root">${component}</div></body>
                <script src="http://localhost:9005/static/client.js"></script>
            </html>`
)});

server.listen(3000, () => {
  console.log(`Server running on http://localhost:3000`);
});

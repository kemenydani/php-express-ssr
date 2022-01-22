import express from "express";
import React from "react";
import ReactDOMServer from "react-dom/server";
import App from "../client/components/app";
import {ServerStyleSheet} from "styled-components";

const server = express();

server.use('/static', express.static('static'));

server.post("/get", (req, res) => {
  res.send(`<html><body>testei</body></html>`)
});

server.post("/test", (req, res) => {
  const sheet = new ServerStyleSheet();
  const component = ReactDOMServer.renderToString(sheet.collectStyles(<App test={"hello"} />));
  const styles = sheet.getStyleTags();

  res.send(`
    <html>
      <body>
        ${styles}
        <div id="root">${component}</div>
        <script src="http://localhost:9005/static/client.js"></script>
      </body>
    </html>
  `)});

server.listen(3000, () => {
  console.log(`Server running on http://localhost:3000`);
});

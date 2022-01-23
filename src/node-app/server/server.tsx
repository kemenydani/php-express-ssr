import express from "express";
import React from "react";
import ReactDOMServer from "react-dom/server";
import {ServerStyleSheet} from "styled-components";
import CreditCardLandingPage, {CreditCardLandingPageView} from "../client/pages/creditcard/CreditCardLandingPage";

const server = express();
const bodyParser = require('body-parser');

server.use(bodyParser.urlencoded({ extended: true }));
server.use(bodyParser.json());
server.use('/static', express.static('static'));

server.get("/test", (req, res) => {
  res.send(`test`)
});

server.post("/creditcard", (req, res) => {
  const sheet = new ServerStyleSheet();
  const viewModel: CreditCardLandingPageView|undefined = JSON.parse(req.body.viewModel);
  const component = ReactDOMServer.renderToString(sheet.collectStyles(<CreditCardLandingPage viewModel={viewModel} />));
  const styles = sheet.getStyleTags();

  res.send(`
    ${styles}
    <div id="root" data-view-model="${encodeURIComponent(req.body.viewModel)}">${component}</div>
    <script src="http://localhost:9005/static/creditcard-client-bundle.js"></script>
  `)});

server.listen(3000, () => {
  console.log(`Server running on http://localhost:3000`);
});

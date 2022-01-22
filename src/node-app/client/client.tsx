import React from "react";
import ReactDOM from "react-dom";
import App from "./components/app";

ReactDOM.hydrate(<App test={"foo"} />, document.getElementById("root"));

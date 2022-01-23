import React from "react";
import ReactDOM from "react-dom";
import TimeMoneyLandingPage, {TimeMoneyLandingPageView} from "./TimeMoneyLandingPage";

// @ts-ignore
const rootElement = document.getElementById("root");
// @ts-ignore
const viewModelString = rootElement.dataset.viewModel;
// @ts-ignore
const viewModel: TimeMoneyLandingPageView = JSON.parse(decodeURIComponent(viewModelString));
// @ts-ignore
ReactDOM.hydrate(<TimeMoneyLandingPage viewModel={viewModel} />, rootElement);

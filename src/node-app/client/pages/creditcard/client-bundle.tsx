import React from "react";
import ReactDOM from "react-dom";
import CreditCardLandingPage, {CreditCardLandingPageView} from "./CreditCardLandingPage";

// @ts-ignore
const rootElement = document.getElementById("root");
// @ts-ignore
const viewModelString = rootElement.dataset.viewModel;
// @ts-ignore
const viewModel: CreditCardLandingPageView = JSON.parse(decodeURIComponent(viewModelString));
// @ts-ignore
ReactDOM.hydrate(<CreditCardLandingPage viewModel={viewModel} />, rootElement);

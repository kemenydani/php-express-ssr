import React from "react";
import InfoBox, {InfoBoxProps} from "../../components/info-box/InfoBox";
import Button, {ButtonProps} from "../../components/button/Button";

export type CreditCardLandingPageView = {
    welcomeBox?: InfoBoxProps;
    resultPageButton?: ButtonProps;
}

type Props = {
    viewModel: CreditCardLandingPageView|undefined;
}

export default function CreditCardLandingPage({
    viewModel
}: Props): JSX.Element|null {

    if (!viewModel) {
        return null;
    }

    const {
        welcomeBox,
        resultPageButton
    } = viewModel;

    return (
        <>
            <div>Hello from React</div>
            {welcomeBox && (
                <InfoBox title={welcomeBox.title} text={welcomeBox.text} />
            )}
            {resultPageButton && (
                <div onClick={() => {
                    alert("Clicked!")
                }}>
                    <Button text={resultPageButton.text} />
                </div>
            )}
        </>
    );
}

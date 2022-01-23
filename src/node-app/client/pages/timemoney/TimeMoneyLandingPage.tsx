import React from "react";
import InfoBox, {InfoBoxProps} from "../../components/info-box/InfoBox";
import Button, {ButtonProps} from "../../components/button/Button";
import {Container, PageWrapper, InfoBoxWrapper, SectionTitle} from "./styles";

export type TimeMoneyLandingPageView = {
    infoBoxLeft?: InfoBoxProps;
    infoBoxRight?: InfoBoxProps;
    infoBox?: InfoBoxProps;
    resultPageButton?: ButtonProps;
}

type Props = {
    viewModel: TimeMoneyLandingPageView|undefined;
}

export default function TimeMoneyLandingPage({
    viewModel
}: Props): JSX.Element|null {

    if (!viewModel) {
        return null;
    }

    const {
        infoBoxLeft,
        infoBoxRight,
        infoBox,
        resultPageButton
    } = viewModel;

    return (
        <PageWrapper>
            <Container>
                <SectionTitle>
                    <h1>React Section</h1>
                </SectionTitle>
                <InfoBoxWrapper>
                    {infoBoxLeft && (
                        <InfoBox title={infoBoxLeft.title} text={infoBoxLeft.text} />
                    )}
                    {infoBoxRight && (
                        <InfoBox title={infoBoxRight.title} text={infoBoxRight.text} />
                    )}
                </InfoBoxWrapper>
                {infoBox && (
                    <InfoBox title={infoBox.title} text={infoBox.text} />
                )}
                {resultPageButton && (
                    <div onClick={() => {
                        alert("Clicked!")
                    }}>
                        <Button text={resultPageButton.text} />
                    </div>
                )}
            </Container>
        </PageWrapper>
    );
}

import React from "react";
import {StyledInfoBox} from "./styles";

export type InfoBoxProps = {
    title: string;
    text: string;
}

export default function InfoBox({
    title,
    text,
}: InfoBoxProps): JSX.Element {

    return (
        <StyledInfoBox>
            {title && (
                <h3>{title}</h3>
            )}
            <p>{text}</p>
        </StyledInfoBox>
    )
}
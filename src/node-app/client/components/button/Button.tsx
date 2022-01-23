import React from "react";
import {StyledButton} from "./styles";

export type ButtonProps = {
    text: string;
}

export default function Button({
    text,
}: ButtonProps): JSX.Element {
    return (
        <StyledButton>
            {text}
        </StyledButton>
    )
}

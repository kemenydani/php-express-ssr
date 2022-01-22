import React from "react";
import {StyledButton} from "./styles";

type Props = {
    test?: string
}

export default function App ({
    test
}: Props) {
    return (<StyledButton onClick={() => {
        alert(window.location.href);
    }}>{test}</StyledButton>)
}

;

import styled from "styled-components";

export const StyledButton = styled.button`
    border: none;
    outline: none;
    margin: 0;
    background-color: #0271c2;
    height: 50px;
    min-height: 50px;
    max-height: 50px;
    color: white;
    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, .26);
    border-radius: 3px;
    font-family: Arial, Verdana, Helvetica, sans-serif;
    font-size: 20px;
    padding: 0 15px;
    width: 100%;
    cursor: pointer;

    &:hover,
    :focus,
    :active {
        background-color: #015fa4;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .26);
    }
`;
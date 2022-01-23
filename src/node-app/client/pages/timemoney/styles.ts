import styled from "styled-components";

export const PageWrapper = styled.div`
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
`;

export const Container = styled.div`
    width: 1280px;
`;

export const SectionTitle = styled.div`
    text-align: center;
`;

export const InfoBoxWrapper = styled.div`
    display: flex;
    justify-content: space-between;
    position: relative;
    box-sizing: border-box;

    @media only screen and (max-width: 1000px) {
        flex-direction: column;
    }

    > * {
        min-width: calc(50% - 7px);
        
        @media only screen and (max-width: 1000px) {
            min-width: 100%;
        }
    }
`;

